<?php
/**
 * @global $APPLICATION CMain
 */

defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED === true ?? die();
require_once (__DIR__ . '/assets/assets.php');

use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;
use Nicedo\Core\Helpers\Phone;
use Bitrix\Main\Page\Asset;

$arOptions = Option::getForModule("nicedo.core");
$request = \Bitrix\Main\Context::getCurrent()->getRequest();
if ($request->isAjaxRequest()) {
    $APPLICATION->RestartBuffer();
}
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>

<script>
    !function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);

    document.addEventListener('DOMContentLoaded', function() {
        var modalButtons = document.querySelectorAll('.js-open-menu'),
            overlay      = document.querySelector('.js-overlay-modal'),
            closeButtons = document.querySelectorAll('.js-menu-close');

        modalButtons.forEach(function(item){
            item.addEventListener('click', function(e) {
                e.preventDefault();
                var modalId = this.getAttribute('data-menu'),
                    modalElem = document.querySelector('.menu_collapse[data-menu="' + modalId + '"]');
                modalElem.classList.add('active');
                overlay.classList.add('active');
            }); // end click
        }); // end foreach

        closeButtons.forEach(function(item){
            item.addEventListener('click', function(e) {
                var parentModal = this.closest('.menu_collapse');

                parentModal.classList.remove('active');
                overlay.classList.remove('active');
            });
        }); // end foreach

        document.body.addEventListener('keyup', function (e) {
            var key = e.keyCode;

            if (key == 27) {

                document.querySelector('.menu_collapse.active').classList.remove('active');
                document.querySelector('.overlay').classList.remove('active');
            };
        }, false);

        overlay.addEventListener('click', function() {
            document.querySelector('.menu_collapse.active').classList.remove('active');
            overlay.classList.remove('active');
        });

    }); // end ready

</script>
<div class="page">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-12 col-md-12 col-12 col-12">
                    <ul class="header__menu">
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Цены</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Кейсы</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Отзывы</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Блог</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">О компании</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Команда</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Вакансии</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-12 top-header__contact">
                    <div class="row">
                        <div class="col-xl-6 col-12 contact__mail">
                            <a href="mailto:info@izifir.ru">info@izifir.ru</a>
                        </div>
                        <div class="col-xl-6 col-12 contact__tel">
                            <a href="tel:8 (800) 550-88-14">8 (800) 550-88-14</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-12 top-header__link">
                    <a href="#">Заказать звонок</a>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-12 col-6 header__logo">
                    <svg  width="163" height="42" viewBox="0 0 136 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.42411 36.4065C1.08788 36.4065 0.801672 36.2873 0.566411 36.0485C0.330836 35.81 0.213205 35.5198 0.213205 35.1789V12.6192C0.213205 11.9174 0.778083 11.3447 1.47034 11.3447H6.12146C6.81372 11.3447 7.3786 11.9174 7.3786 12.6192V35.1789C7.3786 35.5198 7.26097 35.81 7.02539 36.0485C6.82347 36.2873 6.53789 36.4065 6.1677 36.4065H1.42411ZM0.212891 5.35783V1.82362C0.212891 1.48276 0.330521 1.1926 0.566096 0.954098C0.801357 0.715275 1.08757 0.596022 1.42379 0.596022H6.16738C6.53757 0.596022 6.82347 0.715275 7.02508 0.954098C7.26065 1.1926 7.37828 1.48276 7.37828 1.82362V5.35783C7.37828 6.05964 6.81341 6.63231 6.12115 6.63231H1.47003C0.777768 6.63231 0.212891 6.05964 0.212891 5.35783ZM14.5355 36.4065C14.1993 36.4065 13.9131 36.2873 13.6778 36.0485C13.4425 35.81 13.3246 35.5029 13.3246 35.1276V31.5465C13.3246 31.0348 13.4256 30.6257 13.6275 30.3186C13.8294 30.0115 13.9807 29.7899 14.0816 29.6535L27.6705 11.8392C27.9167 11.5166 28.2627 11.3444 28.665 11.3444H34.1556C34.644 11.3444 35.0626 11.6071 35.2809 12.0506C35.4989 12.4942 35.4536 12.991 35.1592 13.3867L22.5592 30.3186H39.7163C40.0865 30.3186 40.389 30.4379 40.6246 30.6767C40.8602 30.9155 40.9778 31.2222 40.9778 31.5975V35.1786C40.9778 35.5195 40.8602 35.8096 40.6246 36.0481C40.3893 36.287 40.0865 36.4062 39.7163 36.4062L14.5355 36.4065ZM31.6422 6.63262H15.0403H15.023C14.661 6.6288 14.3638 6.50955 14.132 6.27455C13.93 6.03572 13.8291 5.74588 13.8291 5.40471V1.87464C13.8291 1.49966 13.93 1.1926 14.132 0.95378C14.3672 0.714956 14.6701 0.595703 15.0403 0.595703H39.1611C39.5313 0.595703 39.8339 0.714956 40.0695 0.95378C40.3051 1.19228 40.4227 1.49934 40.4227 1.87464V3.41089V5.35783C40.4227 6.05964 39.8578 6.63231 39.1656 6.63231H33.4866L31.6422 6.63262ZM48.0426 36.4065C47.706 36.4065 47.4201 36.2873 47.1845 36.0485C46.9493 35.81 46.8313 35.5198 46.8313 35.1789V12.6192C46.8313 11.9174 47.3962 11.3447 48.0885 11.3447H52.7393C53.4315 11.3447 53.9964 11.9174 53.9964 12.6192V35.1789C53.9964 35.5198 53.8788 35.81 53.6432 36.0485C53.4413 36.2873 53.1557 36.4065 52.7855 36.4065H48.0426ZM46.8313 5.35783V1.82362C46.8313 1.48276 46.949 1.1926 47.1845 0.954098C47.4201 0.715275 47.706 0.596022 48.0426 0.596022H52.7858C53.156 0.596022 53.4419 0.715275 53.6435 0.954098C53.8788 1.1926 53.9967 1.48276 53.9967 1.82362V5.35783C53.9967 6.05964 53.4319 6.63231 52.7396 6.63231H48.0888C47.3965 6.63231 46.8313 6.05964 46.8313 5.35783ZM63.1216 36.4065C62.785 36.4065 62.4992 36.2873 62.2639 36.0485C62.0283 35.81 61.9107 35.5198 61.9107 35.1789V12.6192C61.9107 11.9174 62.4756 11.3447 63.1678 11.3447H67.5667C68.259 11.3447 68.8238 11.9174 68.8238 12.6192V16.4037H84.0129C84.3828 16.4037 84.6854 16.5229 84.9213 16.7618C85.1572 17.0003 85.2745 17.3073 85.2745 17.6826V21.2634C85.2745 21.6046 85.1572 21.8944 84.9213 22.1329C84.6857 22.3717 84.3831 22.491 84.0129 22.491H68.8238V35.1783C68.8238 35.5192 68.7062 35.8093 68.4706 36.0478C68.2351 36.2867 67.9322 36.4059 67.5623 36.4059H63.1213L63.1216 36.4065ZM61.9104 5.35783V1.87464C61.9104 1.49966 62.028 1.1926 62.2636 0.95378C62.4988 0.714956 62.7847 0.595703 63.1213 0.595703H85.0222C85.3918 0.595703 85.6947 0.714956 85.9306 0.95378C86.1661 1.19228 86.2838 1.49934 86.2838 1.87464V5.45572C86.2838 5.83102 86.1661 6.13776 85.9306 6.37658C85.7909 6.49775 85.628 6.58288 85.4415 6.63231H63.1675C62.4753 6.63231 61.9104 6.05964 61.9104 5.35783ZM93.4281 36.4065C93.0922 36.4065 92.806 36.2873 92.5701 36.0485C92.3351 35.81 92.2169 35.5198 92.2169 35.1789V12.6192C92.2169 11.9174 92.7818 11.3447 93.474 11.3447H98.1251C98.8174 11.3447 99.3823 11.9174 99.3823 12.6192V35.1789C99.3823 35.5198 99.2646 35.81 99.0291 36.0485C98.8271 36.2873 98.5416 36.4065 98.1714 36.4065H93.4281ZM92.2169 5.35783V1.82362C92.2169 1.48276 92.3351 1.1926 92.5701 0.954098C92.806 0.715275 93.0922 0.596022 93.4281 0.596022H98.1717C98.5422 0.596022 98.8278 0.715275 99.0294 0.954098C99.265 1.1926 99.3826 1.48276 99.3826 1.82362V5.35783C99.3826 6.05964 98.8177 6.63231 98.1255 6.63231H93.4743C92.7821 6.63231 92.2169 6.05964 92.2169 5.35783ZM108.507 36.4065C108.172 36.4065 107.885 36.2873 107.65 36.0485C107.414 35.81 107.297 35.5198 107.297 35.1789V12.6192C107.297 11.9174 107.861 11.3447 108.554 11.3447H113.054C113.746 11.3447 114.311 11.9174 114.311 12.6192V17.1202H121.426C123.478 17.1202 125.009 16.66 126.018 15.7389C127.027 14.7839 127.532 13.4536 127.532 11.7487C127.532 10.0434 127.027 8.71317 126.018 7.75819C125.042 6.7691 123.512 6.63262 121.426 6.63262H114.311H108.554C107.861 6.63262 107.297 6.05996 107.297 5.35815V1.87496C107.297 1.49998 107.415 1.19292 107.65 0.954098C107.885 0.715275 108.172 0.596022 108.507 0.596022H121.577C125.648 0.596022 128.861 1.551 131.215 3.46095C133.571 5.37091 134.748 8.1507 134.748 11.8C134.748 14.3238 134.126 16.4212 132.881 18.0923C131.67 19.7635 130.038 20.9739 127.986 21.7244L135.353 34.7699C135.454 34.9746 135.505 35.162 135.505 35.3326C135.505 35.6394 135.387 35.8954 135.151 36.0998C134.949 36.3045 134.714 36.4069 134.445 36.4069H129.853C129.281 36.4069 128.844 36.2532 128.541 35.9464C128.238 35.6394 128.003 35.3326 127.834 35.0256L121.325 22.9014H114.311V35.1793C114.311 35.5201 114.193 35.8103 113.957 36.0488C113.756 36.2876 113.47 36.4069 113.1 36.4069L108.507 36.4065Z" fill="url(#paint0_linear_1029_10900)"/>
                        <defs>
                            <linearGradient id="paint0_linear_1029_10900" x1="67.8587" y1="0.595703" x2="67.8587" y2="36.4069" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF41A1"/>
                                <stop offset="1" stop-color="#FF904D"/>
                                <stop offset="1" stop-color="#FFEC3F"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="col-xl-1 col-md-2 col-12 menu__but">
                    <div class="header__menu-button btn js-open-menu" data-menu="1"><span>Меню</span></div>
                    <!-- <div class="header__menu-button btn" id="open" onclick="document.getElementById('menu_collapse').style.display='block';
                document.getElementById('open').style.display='none';
                document.getElementById('close').style.display='block';"><span>Меню</span></div>
                    <div class="header__menu-button header__menu-button_close btn" id="close" style="display: none" onclick="document.getElementById('menu_collapse').style.display='none';
                document.getElementById('close').style.display='none';
                document.getElementById('open').style.display='block';"><span>Меню</span></div> -->
                </div>
                <div class="menu_collapse" id="menu_collapse" data-menu="1">
                    <ul class="sub_menu">
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Создание сайтов</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Дизайн</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Разработка мобильных приложений</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Сопровождение и техническая поддержка сайтов</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Техническая поддержка Битрикс24</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Реклама в интернете</a>
                        </li>
                        <li class="sub_menu__item active">
                            <a href="" class="sub_menu__link">Seo продвижение</a>
                            <div class="menu_dropdown">
                                <ul class="sub_menu">
                                    <li class="sub_menu__item active">
                                        <a href="" class="sub_menu__link">Seo продвижение</a>
                                    </li>
                                    <li class="sub_menu__item">
                                        <a href="" class="sub_menu__link">Продвижение корпоративного сайта</a>
                                        <div class="menu_dropdown menu_dropdown__sec">
                                            <ul class="sub_menu">
                                                <li class="sub_menu__item">
                                                    <a href="" class="sub_menu__link">Seo продвижение</a>
                                                </li>
                                                <li class="sub_menu__item">
                                                    <a href="" class="sub_menu__link">Продвижение корпоративного сайта</a>
                                                </li>
                                                <li class="sub_menu__item">
                                                    <a href="" class="sub_menu__link">Seo продвижение</a>
                                                </li>
                                                <li class="sub_menu__item">
                                                    <a href="" class="sub_menu__link">Продвижение корпоративного сайта</a>
                                                </li>
                                                <li class="sub_menu__item">
                                                    <a href="" class="sub_menu__link">Seo продвижение</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sub_menu__item">
                                        <a href="" class="sub_menu__link">Seo продвижение</a>
                                    </li>
                                    <li class="sub_menu__item">
                                        <a href="" class="sub_menu__link">Продвижение корпоративного сайта</a>
                                    </li>
                                    <li class="sub_menu__item">
                                        <a href="" class="sub_menu__link">Seo продвижение</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Сопровождение и техническая поддержка сайтов</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Техническая поддержка Битрикс24</a>
                        </li>
                        <li class="sub_menu__item">
                            <a href="" class="sub_menu__link">Реклама в интернете</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-7 col-xl-6 col-md-7 col-12">
                    <ul class="header__menu">
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Продвижение сайтов</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Создание сайтов</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Контекстная реклама</a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menu_item__link">Кейсы</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-3 col-md-3 col-6 header__buton">
                    <button class="js-open-modal btn btn_form" data-modal="1">
                        <span>Оставить заявку</span>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <div class="modal modal-callback" data-modal="1">
        <div class="modal__button-close">
            <svg class="modal__cross js-modal-close" width="17" height="17" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.598918 0.598429C0.715262 0.481791 0.853474 0.389251 1.00564 0.32611C1.1578 0.262969 1.32093 0.230469 1.48567 0.230469C1.65041 0.230469 1.81354 0.262969 1.9657 0.32611C2.11787 0.389251 2.25608 0.481791 2.37242 0.598429L9.00052 7.22903L15.6286 0.598429C15.7451 0.48198 15.8833 0.389606 16.0355 0.326584C16.1876 0.263562 16.3507 0.231125 16.5154 0.231125C16.68 0.231125 16.8431 0.263562 16.9953 0.326584C17.1474 0.389606 17.2857 0.48198 17.4021 0.598429C17.5186 0.714879 17.6109 0.853125 17.674 1.00527C17.737 1.15742 17.7694 1.3205 17.7694 1.48518C17.7694 1.64987 17.737 1.81294 17.674 1.96509C17.6109 2.11724 17.5186 2.25548 17.4021 2.37193L10.7715 9.00003L17.4021 15.6281C17.5186 15.7446 17.6109 15.8828 17.674 16.035C17.737 16.1871 17.7694 16.3502 17.7694 16.5149C17.7694 16.6796 17.737 16.8426 17.674 16.9948C17.6109 17.1469 17.5186 17.2852 17.4021 17.4016C17.2857 17.5181 17.1474 17.6105 16.9953 17.6735C16.8431 17.7365 16.68 17.7689 16.5154 17.7689C16.3507 17.7689 16.1876 17.7365 16.0355 17.6735C15.8833 17.6105 15.7451 17.5181 15.6286 17.4016L9.00052 10.771L2.37242 17.4016C2.25597 17.5181 2.11773 17.6105 1.96558 17.6735C1.81343 17.7365 1.65035 17.7689 1.48567 17.7689C1.32098 17.7689 1.15791 17.7365 1.00576 17.6735C0.853613 17.6105 0.715368 17.5181 0.598918 17.4016C0.482468 17.2852 0.390094 17.1469 0.327072 16.9948C0.26405 16.8426 0.231613 16.6796 0.231613 16.5149C0.231613 16.3502 0.26405 16.1871 0.327072 16.035C0.390094 15.8828 0.482468 15.7446 0.598918 15.6281L7.22952 9.00003L0.598918 2.37193C0.482279 2.25559 0.389739 2.11738 0.326598 1.96521C0.263457 1.81305 0.230957 1.64993 0.230957 1.48518C0.230957 1.32044 0.263457 1.15731 0.326598 1.00515C0.389739 0.852986 0.482279 0.714774 0.598918 0.598429Z" fill="#959595"/>
            </svg>
            <svg width="17" height="17" class="modal__cross modal__cross-hover js-modal-close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.503525 0.503525C0.662733 0.343915 0.851865 0.21728 1.06009 0.130877C1.26831 0.0444739 1.49154 0 1.71698 0C1.94241 0 2.16564 0.0444739 2.37386 0.130877C2.58209 0.21728 2.77122 0.343915 2.93043 0.503525L12.0004 9.57698L21.0705 0.503525C21.2298 0.344173 21.419 0.217767 21.6272 0.131526C21.8354 0.0452851 22.0586 0.000897348 22.2839 0.000897348C22.5093 0.000897348 22.7324 0.0452851 22.9406 0.131526C23.1488 0.217767 23.338 0.344173 23.4974 0.503525C23.6567 0.662878 23.7831 0.852056 23.8694 1.06026C23.9556 1.26846 24 1.49162 24 1.71698C24 1.94233 23.9556 2.16549 23.8694 2.37369C23.7831 2.58189 23.6567 2.77107 23.4974 2.93043L14.4239 12.0004L23.4974 21.0705C23.6567 21.2298 23.7831 21.419 23.8694 21.6272C23.9556 21.8354 24 22.0586 24 22.2839C24 22.5093 23.9556 22.7324 23.8694 22.9406C23.7831 23.1488 23.6567 23.338 23.4974 23.4974C23.338 23.6567 23.1488 23.7831 22.9406 23.8694C22.7324 23.9556 22.5093 24 22.2839 24C22.0586 24 21.8354 23.9556 21.6272 23.8694C21.419 23.7831 21.2298 23.6567 21.0705 23.4974L12.0004 14.4239L2.93043 23.4974C2.77107 23.6567 2.58189 23.7831 2.37369 23.8694C2.16549 23.9556 1.94233 24 1.71698 24C1.49162 24 1.26846 23.9556 1.06026 23.8694C0.852056 23.7831 0.662878 23.6567 0.503525 23.4974C0.344173 23.338 0.217767 23.1488 0.131526 22.9406C0.0452851 22.7324 0.000897348 22.5093 0.000897348 22.2839C0.000897348 22.0586 0.0452851 21.8354 0.131526 21.6272C0.217767 21.419 0.344173 21.2298 0.503525 21.0705L9.57698 12.0004L0.503525 2.93043C0.343915 2.77122 0.21728 2.58209 0.130877 2.37386C0.0444739 2.16564 0 1.94241 0 1.71698C0 1.49154 0.0444739 1.26831 0.130877 1.06009C0.21728 0.851865 0.343915 0.662733 0.503525 0.503525Z" fill="url(#paint0_linear_1759_15326)"/>
                <defs>
                    <linearGradient id="paint0_linear_1759_15326" x1="12" y1="0" x2="12" y2="24" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F56FB3"/>
                        <stop offset="1" stop-color="#FF9A5C"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <form action="" class="modal-callback__form">
            <h3>Заполните форму</h3>
            <p>Мы перезвоним вам и ответим на любой вопрос.</p>
            <input type="name" name="name" placeholder="Ваше имя*">
            <input type="tel" name="tel" placeholder="+7(___)___-__-__*">
            <input type="email" name="email" placeholder="E-mail">
            <div class="privacy">
                <input type="checkbox" name="privacy-policy" id="privacy-policy" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked/>
                <label for="privacy-policy"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                </label>
            </div>
            <input type="submit" value="Оставить заявку" class="form__button btn js-modal-close js-open-modal" data-modal="2">
        </form>
    </div>

    <div class="modal modal-thanks" data-modal="2">
        <div class="modal__button-close">
            <svg class="modal__cross js-modal-close" width="17" height="17" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.598918 0.598429C0.715262 0.481791 0.853474 0.389251 1.00564 0.32611C1.1578 0.262969 1.32093 0.230469 1.48567 0.230469C1.65041 0.230469 1.81354 0.262969 1.9657 0.32611C2.11787 0.389251 2.25608 0.481791 2.37242 0.598429L9.00052 7.22903L15.6286 0.598429C15.7451 0.48198 15.8833 0.389606 16.0355 0.326584C16.1876 0.263562 16.3507 0.231125 16.5154 0.231125C16.68 0.231125 16.8431 0.263562 16.9953 0.326584C17.1474 0.389606 17.2857 0.48198 17.4021 0.598429C17.5186 0.714879 17.6109 0.853125 17.674 1.00527C17.737 1.15742 17.7694 1.3205 17.7694 1.48518C17.7694 1.64987 17.737 1.81294 17.674 1.96509C17.6109 2.11724 17.5186 2.25548 17.4021 2.37193L10.7715 9.00003L17.4021 15.6281C17.5186 15.7446 17.6109 15.8828 17.674 16.035C17.737 16.1871 17.7694 16.3502 17.7694 16.5149C17.7694 16.6796 17.737 16.8426 17.674 16.9948C17.6109 17.1469 17.5186 17.2852 17.4021 17.4016C17.2857 17.5181 17.1474 17.6105 16.9953 17.6735C16.8431 17.7365 16.68 17.7689 16.5154 17.7689C16.3507 17.7689 16.1876 17.7365 16.0355 17.6735C15.8833 17.6105 15.7451 17.5181 15.6286 17.4016L9.00052 10.771L2.37242 17.4016C2.25597 17.5181 2.11773 17.6105 1.96558 17.6735C1.81343 17.7365 1.65035 17.7689 1.48567 17.7689C1.32098 17.7689 1.15791 17.7365 1.00576 17.6735C0.853613 17.6105 0.715368 17.5181 0.598918 17.4016C0.482468 17.2852 0.390094 17.1469 0.327072 16.9948C0.26405 16.8426 0.231613 16.6796 0.231613 16.5149C0.231613 16.3502 0.26405 16.1871 0.327072 16.035C0.390094 15.8828 0.482468 15.7446 0.598918 15.6281L7.22952 9.00003L0.598918 2.37193C0.482279 2.25559 0.389739 2.11738 0.326598 1.96521C0.263457 1.81305 0.230957 1.64993 0.230957 1.48518C0.230957 1.32044 0.263457 1.15731 0.326598 1.00515C0.389739 0.852986 0.482279 0.714774 0.598918 0.598429Z" fill="#959595"/>
            </svg>
            <img src="/local/templates/.default/assets/img/icons/cross-hover.svg" alt="cross" width="17" height="17" class="modal__cross modal__cross-hover js-modal-close">
        </div>
        <picture>
            <img src="/local/templates/.default/assets/img/icons/thanks-modal-check.svg" alt="icons" width="100px" height="100px" class="modal-thanks__img">
        </picture>
        <h3 class="modal-thanks__title">Спасибо!</h3>
        <p class="modal-thanks__text">Ваша заявка успешна оформлена. Мы свяжемся с Вами в ближайшее время.</p>
    </div>

    <div class="overlay js-overlay-modal"></div>