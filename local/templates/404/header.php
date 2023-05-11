<?php
/**
 * @global $APPLICATION CMain
 */

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

use Nicedo\Core\Helpers\Tools;

include($_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/header.php');
?>

<?php
$APPLICATION->IncludeComponent(
    'izifir:page.block',
    'page.404',
    array(
        'CACHE_TYPE' => 'N'
    )
)
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "prices",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "blocks",
        "IBLOCK_ID" => Tools::getIblockIdByCode("prices"),
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "TERM",
            2 => "PRICE",
            3 => "PHONE",
            4 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "#SITE_DIR#/prices/#ELEMENT_ID#/",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "index",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "ajax",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "prices",
        "STRICT_SECTION_CHECK" => "N",
        "FILE_404" => "",
        "TITLE" => "Цены",
        "DESCRIPTION" => "Создаем конверсионные сайты с качественной адаптивной версткой и авторским дизайном, которые легко ранжируются поисковыми системами."
    ),
    false
);
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "cases",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "blocks",
        "IBLOCK_ID" => Tools::getIblockIdByCode("cases"),
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "TITLE",
            2 => "CATEGORY",
            3 => "DESCRIPTION",
            4 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "ajax",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "cases",
        "STRICT_SECTION_CHECK" => "N",
        "FILE_404" => "",
        "DISPLAY_TITLE" => "",
        "DISPLAY_LEFT_BUTTON" => "",
        "DISPLAY_RIGHT_BUTTON" => "",
        "TITLE" => "Кейсы",
    ),
    false
);
?>
