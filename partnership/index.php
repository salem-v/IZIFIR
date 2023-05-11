<?php
/**
 * @global $APPLICATION CMain
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty('hide_title', 'Y');
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetPageProperty("TITLE", "Партнёрская программа");
$APPLICATION->SetPageProperty("description", "");
$APPLICATION->SetTitle("Партнёрская программа");
?>

<?php $APPLICATION->IncludeComponent(
    "izifir:page.block",
    "partnership",
    array(
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "N",
        "COMPONENT_TEMPLATE" => "partnership",
        "CONDITIONS_TITLE" => "Что нужно сделать, чтобы начать зарабатывать с нами?"
    )
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
