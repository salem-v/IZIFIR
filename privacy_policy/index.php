<?php
/**
 * @global $APPLICATION
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("TITLE", "Политика в отношении обработки персональных данных");
$APPLICATION->SetTitle("Политика в отношении обработки персональных данных");
?>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"agreement", 
	array(
		"COMPONENT_TEMPLATE" => "agreement",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	),
	false
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
