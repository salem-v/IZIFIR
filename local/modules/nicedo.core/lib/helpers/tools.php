<?php

namespace Nicedo\Core\Helpers;

use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;
use Bitrix\Main\Data\Cache;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Config\Option;

class Tools
{
    public static function getIblockIdByCode(string $code): ?int
    {
        Loader::includeModule('iblock');

        $cache = Cache::createInstance();

        $filter = ['CODE' => $code];

        $iblockId = null;

        if ($cache->initCache(86400, md5(Json::encode($filter)))) {
            $vars = $cache->getVars();
            $iblockId = $vars['IBLOCK_ID'];
        } elseif ($cache->startDataCache()) {
            $iblock = IblockTable::query()
                ->setFilter($filter)
                ->setSelect(['ID'])
                ->exec()
                ->fetch();

            $iblockId = (int)$iblock['ID'];

            if ($iblock) {
                $cache->endDataCache(['IBLOCK_ID' => $iblockId]);
            } else {
                $cache->abortDataCache();
            }
        }

        return $iblockId;
    }

    /**
     * Функция вывода массива
     * @param mixed $var Массив, который необходимо вывести
     * @param boolean $all Выводить для всех на печать (по умолчанию выводит для администраторов)
     * @param boolean $hide спрятать методом display:none
     */
    public static function pre($var, bool $all = false, bool $hide = false)
    {
        global $USER;
        if ($USER->IsAdmin() || $all) {
            $trace = debug_backtrace();
            $arPre = array('file' => $trace[0]['file'], 'line' => $trace[0]['line']);
            $pre = '<pre id="pre" style=" background: #000;color: #fff; ' . (($hide) ? 'display:none;' : '/*display:none;*/') . '">' . print_r($var, true) . '</pre>';
            $pre .= '<pre id="pre_file" style=" background: #565656;color: #fff;' . (($hide) ? 'display:none;' : '/*display:none;*/') . '">' . print_r($arPre, true) . '</pre>';
            echo $pre;
        }
    }

    public static function getUserOS($userAgent): string
    {
        $arOS = array(
            '/windows nt 10/i'      =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS',
            '/mac_powerpc/i'        =>  'Mac OS',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile',
            'Search Bot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
        );
        foreach ($arOS as $regex => $value) {
            if (preg_match($regex, $userAgent)) {
                return $value;
            }
        }
        return 'Unknown';
    }

    public static function showTitle(): void
    {
        global $APPLICATION;
        $APPLICATION->AddBufferContent([self::class, 'getTitle']);
    }

    public static function getTitle()
    {
        global $APPLICATION;

        $hideTitle = $APPLICATION->GetProperty('hide_title', 'N');
        $result = '';

        if ($hideTitle !== 'Y') {
            $title = $APPLICATION->GetTitle(false);
            $result = '<div class="title">';
            $result .= '<div class="container">';
            $result .= "<h1>{$title}</h1>";
            $result .= '</div>';
            $result .= '</div>';
        }

        return $result;
    }
}
