<?php
/**
 * @global $APPLICATION
 * @var CBitrixComponent $component
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контактные данные агентства «iZIFIR» - Краснодар - телефон, WhatsApp, Telegram, адрес, электронная почта, время работы, карта");
$APPLICATION->SetPageProperty("title", "Контактная информация интернет-агентства «iZIFIR»");

$APPLICATION->SetTitle("Контактная информация");

use Nicedo\Core\Helpers\Tools;
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"contacts", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "contacts",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => Tools::getIblockIdByCode("contacts"),
		"IBLOCK_TYPE" => "contacts",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ADDRESS_TITLE",
			2 => "ADDRESS_DESCRIPTION",
			3 => "SCHEDULE_TITLE",
			4 => "SCHEDULE_DESCRIPTION",
			5 => "PHONE",
			6 => "EMAIL",
			7 => "REQ_TITLE",
			8 => "REQ_COMPANY_NAME",
			9 => "REQ_INN",
			10 => "REQ_OGRN",
			11 => "REQ_KPP",
			12 => "REQ_UR_ADDRESS",
			13 => "REQ_ADDRESS",
			14 => "SOCIAL_ICON",
			15 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"FORM_SECTION_ID" => "75",
		"COMPONENT_TEMPLATE" => "contacts",
		"MAP_LAT" => "45.047660",
		"MAP_LONG" => "38.966743",
		"MAP_ZOOM" => "14",
		"MAP_TITLE" => "Где мы находимся",
		"MAP_LINK_SHOW" => "Y",
		"MAP_LINK_TARGET" => "Y",
		"MAP_LINK_TITLE" => "Построить маршрут через",
		"MAP_LINK_YANDEX" => "https://yandex.ru/maps/?rtext=~45.047660,38.966743",
		"MAP_LINK_GOOGLE" => "https://google.com/maps/?daddr=45.047660,38.966743",
		"FORM_TITLE" => "Обсудим ваш проект?"
	),
	false
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
