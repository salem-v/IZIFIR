<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.case_all', 'izifir.review', 'izifir.smartfilter', 'izifir.blockformmain']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockformmain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CaseAll()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Review()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Smartfilter()
    })
</script>

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
        <h1>Отзывы наших клиентов</h1>
    </div>
</div>

<div class="case_all">
    <div class="container">
        <div class="type filters">
            <div class="smart-filter" data-filter="testemonials">
                <div class="smart-filter__container">
                    <label class="smart-filter__item btn">
                        <input type="checkbox" value="clear" class="smart-filter__checkbox" data-filter-clear="90">
                        <span class="smart-filter__label">Все услуги</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_1" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">Только сайты</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_2" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">Landing Page</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_3" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">Логотип</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_4" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">CRM</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_5" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">SEO</span>
                    </label>
                    <label class="smart-filter__item btn">
                        <input type="checkbox" name="testimonialsFilter_90_6" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label">Логотип</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="review" data-container="testemonials">
    <div class="review_row">
        <div class="review__block">
            <h3 class="review__title">Строительство</h3>
            <div class="review__item container">
                <div class="col-xxl-2 col-md-3 col-12">
                    <div class="review__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\mts-logo.png" alt="review-img" width="205px" height="105px" class="review__img ">
                        </picture>
                    </div>
                    <a href="#" class="review__link">Интернет-магазин</a>
                </div>
                <div class="col-xxl-10 col-md-9 col-12">
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                    </div>
                    <div class="item__author">
                        <h4 class="author__name">Имя Фамилия</h4>
                        <p class="author__post">Должность</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="review__block">
            <h3 class="review__title">Строительство</h3>
            <div class="review__item container">
                <div class="col-xxl-2 col-md-3 col-12">
                    <div class="review__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\mts-logo.png" alt="review-img" width="205px" height="105px" class="review__img ">
                        </picture>
                    </div>
                </div>
                <div class="col-xxl-10 col-md-9 col-12">
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                    </div>
                </div>
                <div class="col-xxl-2 col-md-3 col-12">
                    <a href="#" class="review__link">Интернет-магазин</a>
                </div>
                <div class="col-xxl-10 col-md-9 col-12">
                    <div class="item__author">
                        <h4 class="author__name">Имя Фамилия</h4>
                        <p class="author__post">Должность</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="review__block">
            <h3 class="review__title">Строительство</h3>
            <div class="review__item container">
                <div class="col-xxl-2 col-md-3 col-12">
                    <div class="review__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\mts-logo.png" alt="review-img" width="205px" height="105px" class="review__img ">
                        </picture>
                    </div>
                </div>
                <div class="col-xxl-10 col-md-9 col-12">
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                    </div>
                </div>
                <div class="col-xxl-2 col-md-3 col-12">
                    <a href="#" class="review__link">Интернет-магазин</a>
                </div>
                <div class="col-xxl-10 col-md-9 col-12">
                    <div class="item__author">
                        <h4 class="author__name">Имя Фамилия</h4>
                        <p class="author__post">Должность</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="review__button_all review_page">
        <a href="" class="btn"><span>Показать все</span></a>
    </div>
</div>

<div class="form_main">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12 form_main__banner">
                    <div class="col-xl-6 col-12">
                        <picture>
                            <img src="local/templates/.default/assets/img/content/form_main_img.png" alt="form_main_img" width="470px" height="355px">
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