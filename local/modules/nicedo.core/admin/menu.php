<?php

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$aMenu[] = array(
    "parent_menu" => "global_menu_settings",
    "sort" => 400,
    "text" => "Доп. настройки (Nicedo)",
    "title" => GetMessage("MAIN_MENU_TOOLS_TITLE"),
    "url" => "nicedo_core_settings.php?lang=".LANGUAGE_ID,
    "icon" => "",
    "page_icon" => "",
    "items_id" => "menu_util",
);

return $aMenu;