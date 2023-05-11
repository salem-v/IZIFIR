<?php
/**
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER_FIELD_MANAGER
 */

include($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$request = \Bitrix\Main\Context::getCurrent()->getRequest();

$articleID = $request->get("articleID");

if ($request->isAjaxRequest()) {
    if ($request->get('action') === 'setRating') {
        \Nicedo\Core\Blog\Detail::setRating(
            $request->get('articleID'),
            $request->get('rating')
        );
    }
}
?>

<?php $APPLICATION->ShowAjaxHead(); ?>

<?php
$APPLICATION->IncludeComponent(
    "izifir:form",
    "blog-rating",
    array(
        "COMPONENT_TEMPLATE" => "blog-rating",
        "CACHE_TYPE" => "N",
        "ARTICLE_ID" => $articleID,
    ),
    false
);
?>
