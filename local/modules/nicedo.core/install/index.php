<?php
/**
 *
 */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\EventManager;
use Bitrix\Main\Loader;

class nicedo_core extends CModule
{
    public $MODULE_ID = 'nicedo.core';
    public $MODULE_GROUP_RIGHTS = 'Y';

    public function __construct()
    {
        $arVersion = [];
        include(dirname(__FILE__) . '/version.php');

        $this->MODULE_VERSION = $arVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arVersion['VERSION_DATE'];

        $this->MODULE_NAME = Loc::getMessage('ND.MODULE.CORE.INSTALL.INDEX.NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('ND.MODULE.CORE.INSTALL.INDEX.DESCRIPTION');

        $this->PARTNER_NAME = 'NiceDo';
        $this->PARTNER_URI = 'https://nicedo.ru';
    }

    public function InstallEvents()
    {
        $eventManager = EventManager::getInstance();
        $eventManager->registerEventHandler('main', 'OnPageStart', $this->MODULE_ID, '\Nicedo\Core\Events\Install', 'onPageStart');
        $eventManager->registerEventHandler('main', 'OnBuildGlobalMenu', $this->MODULE_ID, '\Nicedo\Core\Events\Install', 'onBuildGlobalMenu');
    }

    public function InstallFiles()
    {
        CopyDirFiles(__DIR__ . '/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin', true, true);
    }

    public function DoInstall()
    {
        $this->InstallEvents();
        $this->InstallTasks();
        $this->InstallFiles();
        ModuleManager::registerModule($this->MODULE_ID);
    }

    public function UnInstallEvents()
    {
        $eventManager = EventManager::getInstance();
        $eventManager->unRegisterEventHandler('main', 'OnPageStart', $this->MODULE_ID, '\Nicedo\Core\Events\Install', 'onPageStart');
        $eventManager->unRegisterEventHandler('main', 'OnBuildGlobalMenu', $this->MODULE_ID, '\Nicedo\Core\Events\Install', 'onBuildGlobalMenu');
    }

    public function UnInstallFiles()
    {
        DeleteDirFiles(__DIR__ . '/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin');
    }

    public function DoUninstall()
    {
        $this->UnInstallEvents();
        $this->UnInstallTasks();
        $this->UnInstallFiles();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }

    public function GetModuleTasks(): array
    {
        return [
            'nicedo_core_deny' => [
                'LETTER' => 'D',
                'BINDING' => 'module',
                'OPERATIONS' => []
            ],
            'nicedo_core_edit' => [
                'LETTER' => 'W',
                'BINDING' => 'module',
                'OPERATIONS' => [
                    'nicedo_core_edit_settings'
                ]
            ]
        ];
    }
}
