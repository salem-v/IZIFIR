<?php

namespace Nicedo\Core\Blog;

use Bitrix\Iblock\ElementTable;
use Bitrix\Main\ArgumentException;
use Bitrix\Main\Context;
use Bitrix\Main\LoaderException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;
use Bitrix\Main\Type\DateTime;
use JsonException;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Nicedo\Core\Helpers\Tools;


class Detail
{
    /**
     * Метод сохраняет информацию о просмотр статьи блога
     *
     * @param $articleId
     * @return void
     * @throws JsonException
     * @throws LoaderException
     * @throws SystemException
     */
    public static function setView($articleId): void
    {
        Loader::includeModule('iblock');
        Loader::includeModule('highloadblock');

        $fingerPrint = self::getFingerPrint();
        $yaClientID = $_COOKIE['_ym_uid'] ?? $_COOKIE['YA_CLIENT_ID'];

        $hlBlock = HL\HighloadBlockTable::query()
            ->setFilter(['NAME' => 'BlogViews'])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlBlock);

        // Ищем просмотры текущего пользователя
        $view = $entity->getDataClass()::query()
            ->setFilter([
                'UF_FINGERPRINT' => $fingerPrint,
                'UF_ARTICLE' => $articleId,
            ])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        if ($view) {
            // Если просмотры уже были, то увеличим их количество
            $diff = time() - $view['UF_VIEW_DATE']->getTimestamp();

            // но только если последний просмотр был более часа назад
            if ($diff > 3600) {
                $entity->getDataClass()::update($view['ID'], [
                    'UF_VIEW_DATE' => new DateTime(),
                    'UF_COUNT' => $view['UF_COUNT'] + 1,
                    'UF_YA_CLIENT_ID' => $yaClientID
                ]);
            }
        } else {
            // Если ранее просмотров не было, создадим новую запись
            $entity->getDataClass()::add([
                'UF_VIEW_DATE' => new DateTime(),
                'UF_COUNT' => 1,
                'UF_YA_CLIENT_ID' => $yaClientID,
                'UF_FINGERPRINT' => $fingerPrint,
                'UF_ARTICLE' => $articleId
            ]);

            // и обновим общее количество просмотров у самой статьи
            // так как учитываем только уникальные просмотры, то обновляем количество просмотров
            // только при первом просмотре
            $articleElement = ElementTable::query()
                ->setFilter(['ID' => $articleId])
                ->setSelect(['ID', 'IBLOCK_ID'])
                ->exec()
                ->fetch();

            if ($articleElement) {
                $count = $entity->getDataClass()::getCount([
                    'UF_ARTICLE' => $articleId,
                ]);
                \CIBlockElement::SetPropertyValuesEx($articleElement['ID'], $articleElement['IBLOCK_ID'], ['VIEWS_COUNT' => $count]);
                \Bitrix\Iblock\PropertyIndex\Manager::updateElementIndex($articleElement['IBLOCK_ID'], $articleElement['ID']);
                \CIBlock::clearIblockTagCache($articleElement['IBLOCK_ID']);
            }
        }
    }

    /**
     * Метод получает уникальный отпечаток браузера пользователя
     * и возвращает его в виде хэшированной строки
     *
     * @throws JsonException
     */
    public static function getFingerPrint(): string
    {
        $server = Context::getCurrent()->getServer()->toArray();
        $result = [];
        $result[] = $server['REMOTE_ADDR'];
        $result[] = $server['HTTP_USER_AGENT'];
        $result[] = $server['HTTP_SEC_CH_UA'];
        return md5(json_encode($result, JSON_THROW_ON_ERROR));
    }

    /**
     * Метод добавляет/удаляет информацию о лайках и дизлайках к статьям
     *
     * @throws ObjectPropertyException
     * @throws JsonException
     * @throws LoaderException
     * @throws ArgumentException
     * @throws SystemException
     */
    public static function setEstimate(int $articleId, int $estimate): array
    {
        Loader::includeModule('iblock');
        Loader::includeModule('highloadblock');

        $fingerprint = self::getFingerPrint();
        $yaClientID = $_COOKIE['_ym_uid'] ?? $_COOKIE['YA_CLIENT_ID'];

        $hlBlock = HL\HighloadBlockTable::query()
            ->setFilter(['NAME' => 'BlogLikes'])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlBlock);

        $estimateElement = $entity->getDataClass()::query()
            ->setFilter([
                'UF_FINGERPRINT' => $fingerprint,
                'UF_ARTICLE' => $articleId
            ])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        if ($estimateElement) {
            $entity->getDataClass()::delete($estimateElement['ID']);
        }

        if (!$estimateElement || ($estimateElement && (int)$estimateElement['UF_ESTIMATE'] !== $estimate)) {
            $entity->getDataClass()::add([
                'UF_FINGERPRINT' => $fingerprint,
                'UF_ARTICLE' => $articleId,
                'UF_ESTIMATE' => $estimate,
                'UF_CREATED_AT' => new DateTime(),
                'UF_YA_CLIENT_ID' => $yaClientID
            ]);
        }

        $likesCount = $entity->getDataClass()::getCount([
            'UF_ARTICLE' => $articleId,
            'UF_ESTIMATE' => '1'
        ]);

        $dislikesCount = $entity->getDataClass()::getCount([
            'UF_ARTICLE' => $articleId,
            'UF_ESTIMATE' => '0'
        ]);

        $articleElement = ElementTable::query()
            ->setFilter(['ID' => $articleId])
            ->setSelect(['ID', 'IBLOCK_ID'])
            ->exec()
            ->fetch();

        if ($articleElement) {
            \CIBlockElement::SetPropertyValuesEx($articleElement['ID'], $articleElement['IBLOCK_ID'], [
                'LIKES' => $likesCount,
                'DISLIKES' => $dislikesCount
            ]);
            \Bitrix\Iblock\PropertyIndex\Manager::updateElementIndex($articleElement['IBLOCK_ID'], $articleElement['ID']);
            \CIBlock::clearIblockTagCache($articleElement['IBLOCK_ID']);
        }

        return [
            'likes' => $likesCount,
            'dislikes' => $dislikesCount
        ];
    }

    public static function setRating(int $articleID, int $rating): array
    {
        Loader::includeModule('iblock');
        Loader::includeModule('highloadblock');

        $fingerprint = self::getFingerPrint();
        $yaClientID = $_COOKIE['_ym_uid'] ?? $_COOKIE['YA_CLIENT_ID'];

        $hlBlock = HL\HighloadBlockTable::query()
            ->setFilter(['NAME' => 'BlogRating'])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlBlock);

        $ratingElement = $entity->getDataClass()::query()
            ->setFilter([
                'UF_FINGERPRINT' => $fingerprint,
                'UF_ARTICLE' => $articleID
            ])
            ->setSelect(['*'])
            ->exec()
            ->fetch();

        if ($ratingElement) {
            $entity->getDataClass()::delete($ratingElement['ID']);
        }

        if (!$ratingElement || ($ratingElement && (int)$ratingElement['UF_RATING'] !== $rating)) {
            $entity->getDataClass()::add([
                'UF_FINGERPRINT' => $fingerprint,
                'UF_ARTICLE' => $articleID,
                'UF_RATING' => $rating,
                'UF_CREATED_AT' => new DateTime(),
                'UF_YA_CLIENT_ID' => $yaClientID
            ]);
        }

        $arRating = $entity->getDataClass()::query()
            ->setFilter([
                'UF_ARTICLE' => $articleID
            ])
            ->setSelect(['*'])
            ->exec()
            ->fetchAll();

        foreach ($arRating as $rating) {
            $ratingSumm += $rating['UF_RATING'];
        }

        $ratingCount = $entity->getDataClass()::getCount([
            'UF_ARTICLE' => $articleID,
        ]);

        $averageRating = round($ratingSumm/$ratingCount,1);

        $articleElement = ElementTable::query()
            ->setFilter(['ID' => $articleID])
            ->setSelect(['ID', 'IBLOCK_ID'])
            ->exec()
            ->fetch();

        if ($articleElement) {
            \CIBlockElement::SetPropertyValuesEx($articleElement['ID'], $articleElement['IBLOCK_ID'], [
                'RATING' => $averageRating
            ]);
            \Bitrix\Iblock\PropertyIndex\Manager::updateElementIndex($articleElement['IBLOCK_ID'], $articleElement['ID']);
            \CIBlock::clearIblockTagCache($articleElement['IBLOCK_ID']);
        }

        return [
            'rating' => $averageRating,
        ];
    }

    public static function addComment($articleId, $name, $comment,  $email = null)
    {
        Loader::includeModule('iblock');

        $element = new \CIBlockElement();
        $commentId = $element->Add([
            'IBLOCK_ID' => Tools::getIblockIdByCode('blog_comments'),
            'NAME' => $name,
            'ACTIVE_FROM' => new DateTime(),
            'PREVIEW_TEXT' => $comment,
            'PROPERTY_VALUES' => [
                'ARTICLE' => $articleId,
                'EMAIL' => $email
            ]
        ]);

        if ((int)$commentId > 0) {
            return [
                'status' => 'success'
            ];
        }

        return [
            'status' => 'error',
            'message' => $element->LAST_ERROR
        ];
    }
}
