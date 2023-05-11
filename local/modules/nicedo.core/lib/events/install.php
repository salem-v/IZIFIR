<?php

namespace Nicedo\Core\Events;

use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;
use Nicedo\Core\Events\IBlock as IBlockEvents;

class Install
{
    public static function onPageStart()
    {
        Loader::includeModule('nicedo.core');

        self::redirect();

        EventManager::getInstance()->addEventHandler(
            'main',
            'OnEpilog',
            [self::class, 'onEpilogHandler']
        );

        $devsrv = \Bitrix\Main\Config\Option::get('main', 'update_devsrv', 'N');

        if ((!defined('ADMIN_SECTION') || ADMIN_SECTION !== true) && $devsrv !== 'Y') {
            EventManager::getInstance()->addEventHandler(
                'main',
                'OnEndBufferContent',
                [self::class, 'endBufferContentHandler']
            );
        }

        IBlockEvents::registerHandlers();
    }

    public static function onEpilogHandler()
    {
        if (defined('ERROR_404') && ERROR_404 === 'Y') {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();

            include $_SERVER['DOCUMENT_ROOT'] . '/local/templates/404/header.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/404.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/local/templates/404/footer.php';
        }
    }

    public static function endBufferContentHandler(&$content)
    {
        /*$search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $replace = array('>','<','\\1');
        $content = preg_replace($search, $replace, $content);*/
    }

    public static function onBuildGlobalMenu()
    {

    }

    public static function redirect()
    {
        $request = Context::getCurrent()->getRequest();
        $adminSection = (defined('ADMIN_SECTION') && ADMIN_SECTION === true);
        $requestUri = $request->getRequestUri();
        $domain = $request->getServer()->getHttpHost();
        $hasIndex = false;
        $hasWWW = false;

        if (!$adminSection) {
            $arRequestUri = explode('/', $requestUri);
            $lastPathItem = $arRequestUri[count($arRequestUri) - 1];

            if ($lastPathItem === 'index.php') {
                $arRequestUri[count($arRequestUri) - 1] = '';
                $hasIndex = true;
            }

            if (preg_match('/(www\.)\D+/', $domain)) {
                $domain = preg_replace('/(www.)/', '', $domain);
                $hasWWW = true;
            }

            if ($hasWWW || $hasIndex) {
                $path = implode('/', $arRequestUri);
                header("HTTP/1.1 301 Moved Permanently");
                header('Location: ' . 'https://' . $domain . $path);
            }
        }
    }
}
