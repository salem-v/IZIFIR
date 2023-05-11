<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main','izifir.breadcrumb', 'izifir.case_all', 'izifir.smartfilter', 'izifir.blockkeisi', 'izifir.blockformmain']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Breadcrumb()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CaseAll()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockkeisi()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Smartfilter()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockformmain()
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
        <h1>Все кейсы</h1>
    </div>
</div>

<div class="case_all">
    <div class="container">
        <div class="filters">
            <h3>Виды работ:</h3>
            <div class="smart-filter" data-filter="case_type">
                <div class="smart-filter__container">
                    <label class="smart-filter__item">
                        <input type="checkbox" value="clear" class="smart-filter__checkbox" data-filter-clear="90">
                        <span class="smart-filter__label btn">Все виды работ</span>
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
        <div class="filters">
            <h3>Направления:</h3>
            <div class="smart-filter__container">
                <label class="smart-filter__item btn">
                    <input type="checkbox" value="clear" class="smart-filter__checkbox" data-filter-clear="90">
                    <span class="smart-filter__label">Все виды работ</span>
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

<div class="keisi case_all">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
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