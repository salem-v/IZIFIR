<?php
/**
 * @global $APPLICATION CMain
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Оптимизируйте продажи и растите бизнес с комплексным интернет-маркетингом от Digital агентства IZIFIR. Наши услуги включают в себя создание, разработку и дизайн сайтов, контекстную, таргетированную и медийную рекламу, раскрутку в социальных сетях и управление репутацией в Краснодаре и России.");

$APPLICATION->SetPageProperty('hide_title', 'Y');
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetPageProperty("TITLE", "IZIFIR - маркетинговое агентство полного цикла в Краснодаре. Комплексные решения для Вашего бизнеса в интернете!");
$APPLICATION->SetTitle("При заказе сайта дарим базовые SEO-настройки + продвижение по 10 целевым запросам");
?>

<?php
$APPLICATION->IncludeComponent(
    'izifir:page.block',
    'page.main',
    array(
        "CACHE_TYPE" => "N"
    ),
    false,
    array('HIDE_ICONS' => 'Y')
);
?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
