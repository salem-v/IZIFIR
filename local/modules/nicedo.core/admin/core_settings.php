<?php
/** @global CMain $APPLICATION */
/** @global CDatabase $DB */

/** @global CUser $USER */

use Bitrix\Main\Config\Option;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_before.php");
IncludeModuleLangFile(__FILE__);
$APPLICATION->SetTitle('Доп. настройки (Nicedo)');

$request = \Bitrix\Main\Context::getCurrent()->getRequest();

$tabs = [
    ['DIV' => 'settings', 'TAB' => 'Настройки', "ICON" => "main_settings", 'TITLE' => 'Настройки сайта']
];

$tabControl = new CAdminTabControl("tabControl", $tabs);

$allSettings = [
    'header' => [
        'title' => 'Шапка сайта',
        'items' => [
            'header_email' => [
                'name' => 'Почта',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'header_email', '')
            ],
            'header_phone' => [
                'name' => 'Телефон',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'header_phone', '')
            ],
            'header_form_callback' => [
                'name' => 'Форма. Заказать звонок',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'header_form_callback', '')
            ],
            'header_form_leave_request' => [
                'name' => 'Форма. Оставить заявку',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'header_form_leave_request', '')
            ],
        ]
    ],
    'prices' => [
        'title' => 'Цены',
        'items' => [
            'prices_phone' => [
                'name' => 'Телефон',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'prices_phone', '')
            ],
        ]
    ],
    'footer_contacts' => [
        'title' => 'Подвал контакты',
        'items' => [
            'footer_address' => [
                'name' => 'Адрес',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_address', '')
            ],
            'footer_phone' => [
                'name' => 'Телефон',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_phone', '')
            ],
            'footer_email' => [
                'name' => 'Почта',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_email', '')
            ],

        ]
    ],
    'footer_fields' => [
        'title' => 'Подвал поля',
        'items' => [
            'footer_copyright' => [
                'name' => 'Копирайт',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_copyright', '')
            ],
            'footer_agreement_title' => [
                'name' => 'Заголовок соглашения',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_agreement_title', '')
            ],
            'footer_agreement_link' => [
                'name' => 'Ссылка соглашения',
                'type' => 'text',
                'value' => Option::get('nicedo.core', 'footer_agreement_link', '')
            ],

        ]
    ],
];

if (check_bitrix_sessid() && $request->get('Settings')) {
    $data = $request->get('Settings');
    foreach ($allSettings as $group) {
        foreach ($group['items'] as $id => $item) {
            switch ($item['type']) {
                default:
                    Option::set('nicedo.core', $id, $data[$id]);
                    break;
            }
        }
    }
    LocalRedirect($_SERVER['REQUEST_URI']);
}


require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_after.php");

?>

    <form name="main_options" method="POST"
          action="<? echo $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($mid) ?>&amp;lang=<?= LANG ?>">
        <?= bitrix_sessid_post() ?>
        <?php
        $tabControl->Begin();
        $tabControl->BeginNextTab();
        ?>

        <?php foreach ($allSettings as $group) : ?>
            <tr class="heading">
                <td colspan="2"><b><?= $group['title'] ?></b></td>
            </tr>
            <?php foreach ($group['items'] as $id => $item) : ?>
                <tr>
                    <td style="width: 40%"><?= $item['name'] ?>:</td>
                    <td style="width: 60%">
                        <?php if ($item['type'] == 'text') : ?>
                            <input type="text" name="Settings[<?= $id ?>]" value="<?= $item['value'] ?>">
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <?php $tabControl->Buttons(); ?>
        <input type="submit" name="Save" value="Сохранить" title="Сохранить" class="adm-btn-save">
        <?php $tabControl->End(); ?>
    </form>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_admin.php"); ?>