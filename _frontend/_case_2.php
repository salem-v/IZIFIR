<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.banner_case', 'izifir.form', 'izifir.maininfo_case', 'izifir.check_list', 'izifir.carousel_result', 'izifir.banner_request', 'izifir.blockformmain']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.BannerCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.MaininfoCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CheckList()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CarouselResult()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockformmain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.BannerRequest()
    })
</script>

<div class="banner_case">
    <picture><img src="/local/templates/.default/assets/img/content/project-ru-case.png" alt="logo_case" width="100%" height="400px"></picture>
</div>

<div class="breadcrumb">
    <div class="container">
        <div class="links">
            <a href="/" class="link">главная</a>
            <a href="#" class="link link_active">цены</a>
        </div>
    </div>
</div>
<div class="title">
    <div class="container">
        <h1>ПРОЕКТРУ  Проектирование и строительство</h1>
    </div>
</div>

<div class="maininfo_case">
    <div class="container">
        <div class="maininfo_case__text">
            <div class="text__title">
                <p>Клиент:</p>
            </div>
            <div class="text__info">
                <p>ООО “ПРОЕКТРУ”</p>
            </div>
            <div class="text__title">
                <p>Дата:</p>
            </div>
            <div class="text__info">
                <p>01.01.2022</p>
            </div>
        </div>
    </div>
</div>

<div class="check_list">
    <div class="container">
        <h2>Проблемы</h2>
        <div class="list m-t-60">
            <div class="list__item list__item_cross">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item list__item_cross">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item list__item_cross">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item list__item_cross">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
        </div>
    </div>
</div>

<div class="check_list">
    <div class="container">
        <h2>Выполненные работы</h2>
        <div class="list m-t-60">
            <div class="list__item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
            <div class="list__item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
            </div>
        </div>
    </div>
</div>

<div class="result_case block-indent">
    <div class="container">
        <h2>Результат</h2>
        <div class="swiper swiper_result m-t-60">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="result_item">
                        <div class="swiper-slide__title">
                            <p>Посетители из поисковых систем Посетители из поисковых систем</p>
                        </div>
                        <div class="swiper-slide__img">
                            <picture><img src="/local/templates/.default/assets/img/content/result_1.png" alt="result_img"></picture>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="result_item">
                        <div class="swiper-slide__title">
                            <p>Позиции</p>
                        </div>
                        <div class="swiper-slide__img">
                            <picture><img src="/local/templates/.default/assets/img/content/result_2.png" alt="result_img"></picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="result_swiper__button">
            <div class="button__arrow">
                <div class="btn btn__arrow swiper-button-prev">
                    <img src="/local/templates/.default/assets/img/icons/arrow-prev.svg" alt="arrow" width="8px" height="17px">
                </div>
                <div class="btn btn__arrow swiper-button-next">
                    <img src="/local/templates/.default/assets/img/icons/arrow-next.svg" alt="arrow" width="8px" height="17px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner_request block-indent">
    <div class="container">
        <div class="card_wraper">
            <div class="card card__static">
                <div class="card__title">
                    <h4>Хотите так же?</h4>
                </div>
                <div class="card__text">
                    <p>Перед заказчиком стояла задача создать сайт-агрегатор с церквями, храмами и соборами Армении. Сайт получился удобным и понятным благодаря детально продуманной навигации. При разработке продуманы разделы для дальнейших интеграций с поиском авиабилетов и бронирования жилья.</p>
                </div>
                <div class="card__button">
                    <a href="" class="btn btn_form"><span>Хочу так же</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form_main">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12 form_main__banner">
                    <div class="col-xl-6 col-12">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/form_main_img.png" alt="form_main_img" width="470px" height="355px">
                        </picture>
                    </div>
                    <div class="col-xl-6 col-12 form_main__banner_text">
                        <h2 class="text__title">Остались вопросы?</h2>
                        <p class="text__text">Просто позвоните или напишите нам, оставьте любой контакт в форме обратной связи. Вам перезвонит менеджер и ответит на все вопросы, сориентирует по срокам и стоимости проекта. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <form action="" class="form_main__form">
                        <h3>Заполните форму</h3>
                        <p class="form__text">Мы перезвоним вам и ответим на любой вопрос.</p>
                        <input type="name" name="name" placeholder="Ваше имя*">
                        <input type="tel" name="tel" placeholder="+7(___)___-__-__*">
                        <div class="privacy">
                            <input type="checkbox" name="privacy-policy" id="privacy-policy" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked/>
                            <label for="privacy-policy"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                            </label>
                        </div>
                        <input type="submit" value="Оставить заявку" class="form__button btn js-modal-close js-open-modal" data-modal="2">
                    </form>
                </div>
            </div>
        </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>