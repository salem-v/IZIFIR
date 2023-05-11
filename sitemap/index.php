<?php
/**
 * @global $APPLICATION
 * @var CBitrixComponent $component
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Карта сайта для посетителей в HTML коде");

$APPLICATION->SetPageProperty("TITLE", "Карта сайта IZIFIR");
$APPLICATION->SetTitle("Карта сайта");
?><?
$APPLICATION->IncludeComponent(
	"bitrix:main.map",
	"",
	array(
		"COMPONENT_TEMPLATE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SET_TITLE" => "N",
		"LEVEL" => "0",
		"COL_NUM" => "1",
		"SHOW_DESCRIPTION" => "N"
	),
	false
); ?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>