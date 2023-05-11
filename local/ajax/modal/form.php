<?php
/**
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER_FIELD_MANAGER
 */

include($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

global $USER_FIELD_MANAGER;

\Bitrix\Main\Loader::includeModule('iblock');

$server = \Bitrix\Main\Context::getCurrent()->getServer();
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
$formId = $request->get('form');
$elementID = $request->get('elementID');
$arResult = [];

if ($formId) {
    $arResult['FORM'] = \Bitrix\Iblock\SectionTable::query()
        ->setFilter(['ACTIVE' => 'Y', 'ID' => $formId])
        ->setSelect(['ID', 'IBLOCK_ID', 'NAME', 'DESCRIPTION', 'PICTURE'])
        ->exec()
        ->fetch();

    if ($arResult['FORM']) {
        $userFields = $USER_FIELD_MANAGER->GetUserFields(
            'IBLOCK_' . $arResult['FORM']['IBLOCK_ID'] . '_SECTION',
            $arResult['FORM']['ID'],
            LANGUAGE_ID
        );

        if (!empty($userFields)) {
            foreach ($userFields as $userField) {
                $arResult['FORM'][$userField['FIELD_NAME']] = $userField['VALUE'];
            }
        }
    }
}
?>

<div>
    <?php $APPLICATION->ShowAjaxHead(); ?>
    <?php if ($arResult) : ?>
        <?php
        $APPLICATION->IncludeComponent(
            'izifir:form',
            '',
            array(
                'IBLOCK_ID' => $arResult['FORM']['IBLOCK_ID'],
                'SECTION_ID' => $arResult['FORM']['ID'],
                'DEFAULT_VALUES' => [
                    'URL' => $server->get('HTTP_REFERER'),
                    'ELEMENT' => $elementID
                ],
                'CACHE_TYPE' => 'N',
                'TITLE' => $arResult['FORM']['UF_TITLE'],
                'DESCRIPTION' => $arResult['FORM']['UF_FORM_TEXT'],
                'BUTTON_TEXT' => $arResult['FORM']['UF_BUTTON_TEXT'],
            )
        )
        ?>
    <?php else : ?>
        <p class="error-message">Форма не найдена</p>
    <?php endif; ?>
</div>
