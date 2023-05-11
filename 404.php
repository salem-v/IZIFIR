<?php
/**
 * @global $APPLICATION CMain
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty('hide_title', 'Y');
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetPageProperty("TITLE", "404 Not Found");
$APPLICATION->SetTitle("404 Not Found");
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>