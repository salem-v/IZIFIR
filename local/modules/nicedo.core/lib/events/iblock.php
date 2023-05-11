<?php

namespace Nicedo\Core\Events;

use Bitrix\Main;
use Bitrix\Iblock\PropertyTable;
use Bitrix\Main\EventManager;
use Bitrix\Main\Loader;
use Nicedo\Core\Bitrix24;

class IBlock
{
    public static function registerHandlers(): void
    {
        EventManager::getInstance()->addEventHandler(
            'iblock',
            'OnAfterIBlockElementAdd',
            [static::class, 'afterElementAdd']
        );
        EventManager::getInstance()->addEventHandler(
            'iblock',
            'OnAfterIBlockElementUpdate',
            [static::class, 'afterElementAdd']
        );
    }

    /**
     * @param array $fields
     * @return void
     * @throws Main\LoaderException
     */
    public static function afterElementAdd(array $fields): void
    {
        $devsrv = \Bitrix\Main\Config\Option::get('main', 'update_devsrv', 'N');
        if ($devsrv !== 'Y' && in_array((int)$fields['IBLOCK_ID'], [24, 25, 26, 48, 50, 51, 52, 58, 62, 64, 65], true)) {
            $element = self::getElementById($fields['ID']);
            $leadFields = [
                'TITLE' => "Заполнена форма \"{$element['NAME']}\"",
                'NAME' => $element['NAME'],
                'COMMENTS' => '',
                'SOURCE_ID' => '61'
            ];

            foreach ($element['PROPS'] as $code => $prop) {
                switch ($code) {
                    case 'NAME':
                        $leadFields['NAME'] = $prop['VALUE'];
                        break;
                    case 'URL':
                        $leadFields['SOURCE_DESCRIPTION'] = $prop['VALUE'] . " Заполнена форма \"{$element['NAME']}\"";
                        break;
                    case 'PHONE':
                        $leadFields['PHONE'] = [['VALUE' => $prop['VALUE'], 'VALUE_TYPE' => 'HOME']];
                        break;
                    case 'EMAIL':
                        $leadFields['EMAIL'] = [['VALUE' => $prop['VALUE'], 'VALUE_TYPE' => 'HOME']];
                        break;
                    default:
                        if ($prop['PROPERTY_TYPE'] === PropertyTable::TYPE_LIST) {
                            $value = $prop['VALUE_ENUM'];
                        } elseif($prop['PROPERTY_TYPE'] === PropertyTable::TYPE_FILE) {
                            $value = '//' . $_SERVER['HTTP_HOST'] . \CFile::GetPath($prop['VALUE']);
                        } elseif($prop['PROPERTY_TYPE'] === PropertyTable::TYPE_ELEMENT) {
                            $el = self::getElementById($prop['VALUE']);
                            $value = $el['NAME'];
                        } elseif ($prop['PROPERTY_TYPE'] === PropertyTable::TYPE_STRING && $prop['USER_TYPE'] === 'HTML') {
                            try {
                                $value = [];
                                $text = htmlspecialcharsback($prop['VALUE']['TEXT']);
                                $tmp = Main\Web\Json::decode($text);
                                foreach ($tmp as $t) {
                                    $val = [];
                                    foreach ($t as $k => $v) {
                                        $val[] = "{$k} - {$v}";
                                    }
                                    $value[] = implode(', ', $val);
                                }
                            } catch (\Exception $e) {
                                $value = $prop['VALUE']['TEXT'];
                            }
                        } else {
                            $value = $prop['VALUE'];
                        }

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        if (!empty($value)) {
                            $leadFields['COMMENTS'] .= "{$prop['NAME']}: {$value} \r\n\t&#13;&#10;<br>";
                        }
                        break;
                }
            }

            $yaClientID = $_COOKIE['_ym_uid'] ?? $_COOKIE['YA_CLIENT_ID'];
            $ip = Main\Context::getCurrent()->getServer()->getRemoteAddr();
            $referrer = $_SESSION['REFERRER_URI'];

            if (!empty($leadFields['COMMENTS'])) {
                $leadFields['COMMENTS'] .= '\r\n\t&#13;&#10;<br>\r\n\t&#13;&#10;<br>\r\n\t&#13;&#10;<br>';
            }
            $leadFields['COMMENTS'] .= "ID клиента ЯМ: {$yaClientID}\r\n\t&#13;&#10;<br>";
            $leadFields['COMMENTS'] .= "IP адрес: {$ip}\r\n\t&#13;&#10;<br>";
            $leadFields['COMMENTS'] .= "Источник перехода: {$referrer}\r\n\t&#13;&#10;<br>";

            Bitrix24::send('crm.lead.add.json', ['fields' => $leadFields]);
        }
    }

    /**
     * Return iblock element by ID
     *
     * @param int $id
     * @return array
     * @throws \Bitrix\Main\LoaderException
     */
    protected static function getElementById(int $id): array
    {
        Loader::includeModule('iblock');

        $iterator = \CIBlockElement::GetList(
            [],
            ['ID' => $id],
            false,
            false,
            ['ID', 'NAME', 'IBLOCK_ID']
        )->GetNextElement();

        $element = $iterator->GetFields();
        $element['PROPS'] = $iterator->GetProperties();

        return $element;
    }
}