<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.banner-advantage', 'izifir.advantage', 'izifir.form', 'izifir.blockuslug', 'izifir.blockkeisi', 'izifir.blockklientmain', 'izifir.blockcomand', 'izifir.blockqa', 'izifir.result_service', 'izifir.interest_form', 'izifir.maybe_interest', 'izifir.deadline', 'izifir.review', 'izifir.info_service', 'izifir.other_service', 'izifir.form_service']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.BannerAdvantage()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Advantage()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockuslug()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockkeisi()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockklientmain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockcomand()
    })

    /*document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockqa()
    })*/

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.ResultService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.InterestForm()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.MaybeInterest()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Deadline()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Review()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.InfoService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.OtherService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FormService()
    })
</script>

<div class="banner-adv-background fluid">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-12">
                    <div class="banner__text">
                        <h1 class="text__title">При заказе сайта дарим базовые SEO-настройки + продвижение по 10 целевым запросам для Яндекс и Google</h1>
                        <div class="text__text">
                            <p>Сюда входят: разработка сайта под технические требования SEO, метаописание страниц (title, description), аналитика количества запросов и выбор популярных. В акции не участвуют лендинги.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="banner__img">
                        <picture><img src="/local/templates/.default/assets/img/content/banner_img.png" alt="" width="450px" height="400px"></picture>
                    </div>
                </div>
                <form action="" class="banner__form form row">
                    <div class="col-xl-9 col-md-9 col-12">
                        <div class="form__row">
                            <div class="form__inp-wrap form__inp-wrap--name col-xl-6 col-md-6 col-12">
                                <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="name" value="">
                                <label for="name" class="form__label">
                                    Ваше имя<span class="form__required">*</span>
                                </label>
                            </div>
                            <div class="form__inp-wrap form__inp-wrap--phone col-xl-6 col-md-6 col-12">
                                <input type="tel" name="PROPERTY_VALUES[PHONE]" class="form__input" id="property_3_3_w6fg" value="" inputmode="text">
                                <label for="property_3_3_w6fg" class="form__label">
                                    Телефон <span class="form__required">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="privacy">
                            <div class="privacy__wrapper">
                                <input type="checkbox" name="privacy-policy-ban" id="privacy-policy-ban" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked/>
                                <label for="privacy-policy-ban"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-12">
                        <input type="submit" value="Оставить заявку" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="advantage container">
        <h2 class="advantage__title">Преимущества</h2>
        <div class="swiper advantage-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="advantage__item">
                        <div class="item__icon">
                            <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-1.svg" alt="icons-adv" width="30px" height="30px"></picture>
                        </div>
                        <h3 class="item__title">Сайты с конверсией выше, чем у конкурентов</h3>
                        <p class="item__text">На конверсию сайта влияют внутренние и внешние факторы: дизайн, контент, юзабельность ресурса, SEO и контекстная реклама. Мы можем взять весь цикл работ на себя, включая тщательный анализ ЦА и маркетинга в вашей сфере бизнеса. </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advantage__item">
                        <div class="item__icon">
                            <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-1.svg" alt="icons-adv" width="30px" height="30px"></picture>
                        </div>
                        <h3 class="item__title">Сайты с конверсией выше, чем у конкурентов</h3>
                        <p class="item__text">На конверсию сайта влияют внутренние и внешние факторы: дизайн, контент, юзабельность ресурса, SEO и контекстная реклама. Мы можем взять весь цикл работ на себя, включая тщательный анализ ЦА и маркетинга в вашей сфере бизнеса. </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advantage__item">
                        <div class="item__icon">
                            <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-1.svg" alt="icons-adv" width="30px" height="30px"></picture>
                        </div>
                        <h3 class="item__title">Сайты с конверсией выше, чем у конкурентов</h3>
                        <p class="item__text">На конверсию сайта влияют внутренние и внешние факторы: дизайн, контент, юзабельность ресурса, SEO и контекстная реклама. Мы можем взять весь цикл работ на себя, включая тщательный анализ ЦА и маркетинга в вашей сфере бизнеса. </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advantage__item">
                        <div class="item__icon">
                            <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-1.svg" alt="icons-adv" width="30px" height="30px"></picture>
                        </div>
                        <h3 class="item__title">Сайты с конверсией выше, чем у конкурентов</h3>
                        <p class="item__text">На конверсию сайта влияют внутренние и внешние факторы: дизайн, контент, юзабельность ресурса, SEO и контекстная реклама. Мы можем взять весь цикл работ на себя, включая тщательный анализ ЦА и маркетинга в вашей сфере бизнеса. </p>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="row">-->
<!--            <div class="col-xl-3 col-12">-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-12">-->
<!--                <div class="advantage__item">-->
<!--                    <div class="item__icon">-->
<!--                        <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-2.svg" alt="icons-adv" width="30px" height="30px"></picture>-->
<!--                    </div>-->
<!--                    <h3 class="item__title">Бесплатный аудит сайта с погружением в ваш бизнес</h3>-->
<!--                    <p class="item__text">Проверим технические настройки имеющегося ресурса и скорость загрузки, проанализируем внешнюю оптимизацию. Дадим рекомендации по изменению контента, дизайна, SEO, если необходимо. И за это не возьмем у вас денег.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-12">-->
<!--                <div class="advantage__item">-->
<!--                    <div class="item__icon">-->
<!--                        <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-3.svg" alt="icons-adv" width="30px" height="30px"></picture>-->
<!--                    </div>-->
<!--                    <h3 class="item__title">Обучение редакции сайта и техподдержка</h3>-->
<!--                    <p class="item__text">После создания сайта не бросим вас на произвол судьбы. Покажем и расскажем, как поменять информацию, добавить новые блоки или товары в каталог. Всегда ответим на вопросы, если сайт перестал работать, загружаться или появились другие проблемы.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-12">-->
<!--                <div class="advantage__item">-->
<!--                    <div class="item__icon">-->
<!--                        <picture><img src="/local/templates/.default/assets/img/icons/adv-icon-4.svg" alt="icons-adv" width="30px" height="30px"></picture>-->
<!--                    </div>-->
<!--                    <h3 class="item__title">Каждый сайт — уникален, даже если это шаблон  </h3>-->
<!--                    <p class="item__text">Создадим сайт, который будет актуален для аудитории, учитывать ваши пожелания. Безусловно, мы в курсе всех модных новинок, но это не означает, что каждому сайту требуется анимация или логотип в неоновых цветах. Сделаем сайт под задачу, ЦА и сферу бизнеса.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="dop-info">
            <div class="row">
                <div class="col-xl-8 col-12">
                    <div class="dop-info__text">
                        <p>Мы помогаем бизнесу становиться узнаваемым, динамичным, эффективным и прибыльным.  Как именно? Специалисты продумывают все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Грамотно верстают, программируют и наполняют смыслом до мелочей. Каждое решение подходит для ваших бизнес-задач, сайты красивые и продающие, а приложения удобные.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="dop-info__link">
                        <a href="" class="link__item">
                            <span class="item__link">Статья по фирменному стилю</span>
                        </a>
                        <a href="" class="link__item">
                            <span class="item__link">Сайт на CMS 1С-Битрикс</span>
                        </a>
                        <a href="" class="link__item">
                            <span class="item__link">Сколько стоит SEO продвижение</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uslugi service_back">
    <div class="container">
        <h2 class="uslugi__title">Цены</h2>
        <p class="uslugi__text">Создаем сайты с качественной адаптивной версткой и авторским дизайном, которые легко ранжируются поисковиком и увеличивают конверсию.</p>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_1">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_1').style.display='block';document.getElementById('card_1').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_1">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_1').style.display='none';
        document.getElementById('card_1').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_2">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_2').style.display='block';
        document.getElementById('card_2').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_2">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_2').style.display='none';
        document.getElementById('card_2').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_3">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_3').style.display='block';
        document.getElementById('card_3').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_3">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_3').style.display='none';
        document.getElementById('card_3').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_4">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_4').style.display='block';
        document.getElementById('card_4').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_4">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_4').style.display='none';
        document.getElementById('card_4').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_5">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_5').style.display='block';
        document.getElementById('card_5').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_5">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_5').style.display='none';
        document.getElementById('card_5').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_6">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_6').style.display='block';
        document.getElementById('card_6').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_6">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <p class="item__text">Это удобный и современный способ рассказать о себе, чем вы занимаетесь и как можете быть полезны пользователю. На сайте можно разместить больше информации, контактных данных, адрес и карту, где находится офис.</p>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__cont">
                            <div class="cont__tel">
                                <a href="tel:89288538788" class="cont__link">8 (928) 853-87-88</a>
                            </div>
                            <div class="cont__button">
                                <a href="">Заказать</a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_6').style.display='none';
        document.getElementById('card_6').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_all uslugi__button">
                <button class="btn btn_but">
                    <span>Показать все</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="result block-indent">
    <div class="container">
        <h2>Что в результате получите?</h2>
        <div class="row m-t-60">
            <div class="col-xxl-4 col-md-6 col-12 card_wraper">
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-1.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-3.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12">
                <div class="result__img">
                    <picture>
                        <img src="\local\templates\.default\assets\img\content\result-img.png" alt="result-img" width="520px" height="595px">
                    </picture>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-12 card_wraper">
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-1.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
                <div class="card card__static result__item">
                    <div class="item__img btn">
                        <picture>
                            <img src="\local\templates\.default\assets\img\icons\res-it-3.svg" alt="result-item-img" width="30px" height="30px">
                        </picture>
                    </div>
                    <h3 class="item__title">Заголовок<br>Заголовок</h3>
                    <div class="item__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="keisi service">
    <div class="container">
        <h2 class="keisi__title">Кейсы</h2>
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
            <div class="keisi__button">
                <a href="" class="btn"><span>Показать все</span></a>
            </div>
        </div>
    </div>
</div>

<div class="interest_form block-indent">
    <div class="container">
        <h2>Что вас интересует?</h2>
        <div class="m-t-60">
            <form action="" class="in_form form">
                <div class="col-xxl-7 col-md-8 col-12">
                    <h4 class="item__title">Тип сайта</h4>
                    <div class="form__item">
                        <div class="form__check">
                            <p>landing page</p>
                            <input type="checkbox" name="type" id="switch1" />
                            <label for="switch1">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>корпоротивный</p>
                            <input type="checkbox" name="type" id="switch2" /><label for="switch2">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>интернет - магазин</p>
                            <input type="checkbox" name="type" id="switch3" /><label for="switch3">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>сложный проект</p>
                            <input type="checkbox" name="type" id="switch4" /><label for="switch4">Toggle</label>
                        </div>
                    </div>
                    <h4 class="item__title">Тип сайта</h4>
                    <div class="form__item">
                        <div class="form__check">
                            <p>landing page</p>
                            <input type="checkbox" name="type" id="switch1" /><label for="switch1">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>корпоротивный</p>
                            <input type="checkbox" name="type" id="switch2" /><label for="switch2">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>интернет - магазин</p>
                            <input type="checkbox" name="type" id="switch3" /><label for="switch3">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>сложный проект</p>
                            <input type="checkbox" name="type" id="switch4" /><label for="switch4">Toggle</label>
                        </div>
                    </div>
                    <h4 class="item__title">Тип сайта</h4>
                    <div class="form__item">
                        <div class="form__check">
                            <p>landing page</p>
                            <input type="checkbox" name="type" id="switch1" /><label for="switch1">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>корпоротивный</p>
                            <input type="checkbox" name="type" id="switch2" /><label for="switch2">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>интернет - магазин</p>
                            <input type="checkbox" name="type" id="switch3" /><label for="switch3">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>сложный проект</p>
                            <input type="checkbox" name="type" id="switch4" /><label for="switch4">Toggle</label>
                        </div>
                    </div>
                    <h4 class="item__title">Тип сайта</h4>
                    <div class="form__item">
                        <div class="form__check">
                            <p>landing page</p>
                            <input type="checkbox" name="type" id="switch1" /><label for="switch1">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>корпоротивный</p>
                            <input type="checkbox" name="type" id="switch2" /><label for="switch2">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>интернет - магазин</p>
                            <input type="checkbox" name="type" id="switch3" /><label for="switch3">Toggle</label>
                        </div>
                        <div class="form__check">
                            <p>сложный проект</p>
                            <input type="checkbox" name="type" id="switch4" /><label for="switch4">Toggle</label>
                        </div>
                    </div>
                    <div class="btn btn_but btn_form form__button" id="form_open_btn" onclick="(document.getElementById('form_open').style.display='block');
                    document.getElementById('form_open_btn').style.display='none';
                    document.getElementById('form_open_btn_close').style.display='block';"><span>Далее</span></div>
                    <div class="form__open" id="form_open" style="display:none;">
                        <div class="form__wrapper col-12">
                            <div class="form__row">
                                <div class="form__inp-wrap form__inp-wrap--name col-xl-5 col-12">
                                    <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="name">
                                    <label for="name" class="form__label">
                                        Ваше имя<span class="form__required">*</span>
                                    </label>
                                </div>
                                <div class="form__inp-wrap form__inp-wrap--email col-xl-5 col-12">
                                    <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="email">
                                    <label for="email" class="form__label">
                                        E-mail
                                    </label>
                                </div>
                                <div class="form__open_btn_close" id="form_open_btn_close" onclick=" document.getElementById('form_open').style.display='none'; document.getElementById('form_open_btn_close').style.display='none'; document.getElementById('form_open_btn').style.display='block';">
                                    <div class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                            <path d="M25.3594 27.3594L9.60937 11.6094C9.07125 11.0713 9.07125 10.1788 9.60937 9.64063C10.1475 9.1025 11.04 9.1025 11.5781 9.64062L27.3281 25.3906C27.8662 25.9287 27.8662 26.8212 27.3281 27.3594C26.79 27.8975 25.8975 27.8975 25.3594 27.3594Z" fill="url(#paint0_linear_2324_12526)"/>
                                            <path d="M9.60938 27.3594C9.07125 26.8212 9.07125 25.9287 9.60938 25.3906L25.3594 9.64062C25.8975 9.1025 26.79 9.1025 27.3281 9.64063C27.8663 10.1788 27.8663 11.0713 27.3281 11.6094L11.5781 27.3594C11.04 27.8975 10.1475 27.8975 9.60938 27.3594Z" fill="url(#paint1_linear_2324_12526)"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_2324_12526" x1="19.4531" y1="17.5156" x2="17.4844" y2="19.4844" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F56FB3"/>
                                                    <stop offset="1" stop-color="#FF9A5C"/>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2324_12526" x1="27.3281" y1="9.64063" x2="9.60938" y2="27.3594" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F56FB3"/>
                                                    <stop offset="1" stop-color="#FF9A5C"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="form__inp-wrap form__inp-wrap--text col-12">
                                    <textarea name="PROPERTY_VALUES[PHONE]" class="form__input" id="text" value="" inputmode="text"></textarea>
                                    <label for="text" class="form__label">
                                        Расскажите о своем проекте:
                                    </label>
                                </div>
                            </div>
                            <div class="form__button form__button_close">
                                <input type="submit" value="Оставить заявку" class="btn">
                                <div class="privacy">
                                    <div class="privacy__wrapper">
                                        <input type="checkbox" name="privacy-policy-ban" id="privacy-policy-ban" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked="">
                                        <label for="privacy-policy-ban"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-md-4 col-12 form__img">
                    <picture>
                        <img src="/local/templates/.default/assets/img/content/interest_form_img.png" alt="interest_form_img" width="550px" height="685px">
                    </picture>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="maybe_interest block-indent">
    <div class="container">
        <h2>Возможно вас заинтересует</h2>
        <div class="swiper swiper-maybe m-t-60">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card_wraper">
                        <div class="maybe__item card card__hover">
                            <div class="maybe__img">
                                <picture>
                                    <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                                </picture>
                            </div>
                            <h4 class="maybe__item">Интернет-магазин</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card_wraper">
                        <div class="maybe__item card card__hover">
                            <div class="maybe__img">
                                <picture>
                                    <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                                </picture>
                            </div>
                            <h4 class="maybe__item">Интернет-магазин</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card_wraper">
                        <div class="maybe__item card card__hover">
                            <div class="maybe__img">
                                <picture>
                                    <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                                </picture>
                            </div>
                            <h4 class="maybe__item">Интернет-магазин</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maybe__button">
                <div class="button__arrow">
                    <div class="btn btn__arrow swiper-button-prev">
                        <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                    </div>
                    <div class="btn btn__arrow swiper-button-next">
                        <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="klient service_back">
    <div class="container">
        <h2 class="klient__title">Наши клиенты</h2>
    </div>
    <div class="fluid">
        <div class="first_line">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/hr-cadr.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/fasadug.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/project-ru.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/ruselcom.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/advocat.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/vent.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/thirdfeeling.svg" alt="logo" widht="100%" height="60px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fluid">
        <div class="second_line">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/hr-cadr.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/fasadug.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/project-ru.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/ruselcom.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/advocat.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/vent.svg" alt="logo" widht="100%" height="60px">
                    </div>
                    <div class="swiper-slide">
                        <img src="/local/templates/.default/assets/img/content/logo_clients/thirdfeeling.svg" alt="logo" widht="100%" height="60px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="deadline block-indent">
    <div class="container">
        <h2>Сроки продвижения</h2>
        <div class="row m-t-60">
            <div class="col-xxl-4 col-md-4 col-12 deadline__item">
                <div class="item__count">
                    <p>1</p>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12 deadline__item">
                <div class="item__count">
                    <p>2</p>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12 deadline__item">
                <div class="item__count">
                    <p>3</p>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12 deadline__item order-4">
                <div class="item__count">
                    <p>4</p>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12 deadline__item order-5">
                <div class="item__count">
                    <p>5</p>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</p>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4 col-12 deadline__button order-6">
                <a href="#" class="js-open-modal btn btn_form" data-modal="1">
                    <span>Оставить заявку</span>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockqa()
    })
</script>

<div class="qa">
    <div class="container">
        <h2 class="qa__title">Вопрос-ответ</h2>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-link">
                    <div class="accordion__title">
                        <p>Сколько в среднем занимает разработка сайта? А если мне надо быстро, сделаете?</p>
                    </div>
                    <span class="icon btn btn__arrow js-open-qa visible" data-qa="1">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross" width="16px" height="16px">
                    </span>
                    <span class="icon btn btn__arrow js-close-qa" data-qa="1">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa_close.svg" alt="cross" width="16px" height="16px">
                    </span>
                </div>
                <div class="answer" data-qa="1">
                    <p> We believe in the greater good, we strive to do something for people, we aim to make their lives easier and more enjoyable, we love businesses that keep this</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-link">
                    <div class="accordion__title">
                        <p>Сколько в среднем занимает разработка сайта? А если мне надо быстро, сделаете?</p>
                    </div>
                    <span class="icon btn btn__arrow js-open-qa visible" data-qa="2">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross" width="16px" height="16px">
                    </span>
                    <span class="icon btn btn__arrow js-close-qa" data-qa="2">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa_close.svg" alt="cross" width="16px" height="16px">
                    </span>
                </div>
                <div class="answer" data-qa="2">
                    <p> We believe in the greater good, we strive to do something for people, we aim to make their lives easier and more enjoyable, we love businesses that keep this</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-link">
                    <div class="accordion__title">
                        <p>Сколько в среднем занимает разработка сайта? А если мне надо быстро, сделаете?</p>
                    </div>
                    <span class="icon btn btn__arrow js-open-qa visible" data-qa="3">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross" width="16px" height="16px">
                    </span>
                    <span class="icon btn btn__arrow js-close-qa">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa_close.svg" alt="cross" width="16px" height="16px">
                    </span>
                </div>
                <div class="answer" data-qa="3">
                    <p> We believe in the greater good, we strive to do something for people, we aim to make their lives easier and more enjoyable, we love businesses that keep this</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-link">
                    <div class="accordion__title">
                        <p>Сколько в среднем занимает разработка сайта? А если мне надо быстро, сделаете?</p>
                    </div>
                    <span class="icon btn btn__arrow js-open-qa visible" data-qa="4">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross" width="16px" height="16px">
                    </span>
                    <span class="icon btn btn__arrow js-close-qa">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa_close.svg" alt="cross" width="16px" height="16px">
                    </span>
                </div>
                <div class="answer" data-qa="4">
                    <p> We believe in the greater good, we strive to do something for people, we aim to make their lives easier and more enjoyable, we love businesses that keep this</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-link">
                    <div class="accordion__title">
                        <p>Сколько в среднем занимает разработка сайта? А если мне надо быстро, сделаете?</p>
                    </div>
                    <span class="icon btn btn__arrow js-open-qa visible" data-qa="5">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross" width="16px" height="16px">
                    </span>
                    <span class="icon btn btn__arrow js-close-qa">
                        <img src="/local/templates/.default/assets/img/icons/cross_qa_close.svg" alt="cross" width="16px" height="16px">
                    </span>
                </div>
                <div class="answer" data-qa="5">
                    <p> We believe in the greater good, we strive to do something for people, we aim to make their lives easier and more enjoyable, we love businesses that keep this</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="comand service_back">
    <div class="container">
        <h2 class="comand__title">Команда</h2>
        <div class="row">
            <div class="col-xl-8 col-12">
                <!-- <div class="swiper swiper-comand">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comand__item">
                                <div class="item__back">
                                    <picture>
                                        <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                                    </picture>
                                    <h4 class="item__title">Сергей</h4>
                                    <p class="item__spec">специалист по маркетингу</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Сергей</h4>
                            <p class="item__spec">специалист по маркетингу</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand2.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Владислава </h4>
                            <p class="item__spec">Специалист по контекстной рекламе</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand3.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Анастасия</h4>
                            <p class="item__spec">Контент-менеджер</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand4.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Дмитрий</h4>
                            <p class="item__spec">Системный администратор</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand5.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Виктория</h4>
                            <p class="item__spec">Fronted-разработчик (Vuejs)</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand6.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Геннадий</h4>
                            <p class="item__spec">Графический дизайнер</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand7.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Семён</h4>
                            <p class="item__spec">Проджект-менеджер</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand8.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Людмила</h4>
                            <p class="item__spec">Руководитель</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand9.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Роман</h4>
                            <p class="item__spec">Копирайтер</p>
                        </div>
                    </div>
                    <div class="comand__item">
                        <div class="item__back">
                            <picture>
                                <img src="/local/templates/.default/assets/img/content/comand/comand10.png" alt="comand_photo" class="item__img" width="195px" height="180px">
                            </picture>
                            <h4 class="item__title">Павел</h4>
                            <p class="item__spec">Руководитель отдела разработки</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-12">
                <div class="comand__description">
                    <h3 class="description__title">Наша команда</h3>
                    <div class="description__text">
                        <p>Небольшая, но продуктивная команда опытных специалистов. Так уж получилось, что у нас нет случайных людей. Каждый проект — это вызов для любого из команды. И тем веселее и интереснее, если он будет сложным.</p>
                        <p>Мы все с с разным характером, образованием и стилем жизни, но единой задачей — помогать бизнесу становиться узнаваемым, динамичным, эффективным и прибыльным.</p>
                    </div>
                    <div class="description__button">
                        <a href="" class="btn">
                            <span>Подробнее</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="comand__button">
            <a href="" class="btn btn__arrow">
                <img src="/local/templates/.default/assets/img/icons/arrow-prev.svg" alt="arrow" width="8px" height="17px">
            </a>
            <a href="" class="btn btn__arrow">
                <img src="/local/templates/.default/assets/img/icons/arrow-next.svg" alt="arrow" width="8px" height="17px">
            </a>
        </div>
    </div>
</div>

<div class="review block-indent">
    <div class="container">
        <h2>Отзывы наших клиентов</h2>
    </div>
    <div class="swiper swiper-review m-t-60">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
            <div class="swiper-slide">
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
        <div class="review__button">
            <div class="button__arrow">
                <div class="btn btn__arrow swiper-button-prev">
                    <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                </div>
                <div class="btn btn__arrow swiper-button-next">
                    <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                </div>
            </div>
        </div>
    </div>
    <div class="review__button_all">
        <a href="" class="btn"><span>Показать все</span></a>
    </div>
</div>

<div class="info block-indent">
    <div class="container">
        <h2 class="info__title">Создание сайтов под ключ</h2>
        <div class="info__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Tellus egestas proin id mi hendrerit elit blandit. Aliquet in morbi suscipit massa. Lectus magna vestibulum, suspendisse pharetra. Vitae, porttitor egestas at accumsan viverra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Tellus egestas proin id mi hendrerit elit blandit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
        </div>
        <button class="info__button info__button_open">Развернуть</button>
        <button class="info__button info__button_close" style="display: none">Свернуть</button>
    </div>
</div>

<div class="other_service block-indent">
    <div class="container">
        <h2>Другие услуги</h2>
        <div class="row">
            <div class="other__item">
                <a href="" class="btn"><span>Создание сайтов</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Дизайн</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Разработка мобильных приложений</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Сопровождение и техническая поддержка сайтов</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Реклама в интернете</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Реклама в интернете</span></a>
            </div>
            <div class="other__item">
                <a href="" class="btn"><span>Техническая поддержка Битрикс24</span></a>
            </div>
        </div>
        <div class="other__button_all">
            <a href="" class="btn"><span>Показать все</span></a>
        </div>
    </div>
</div>

<div class="service_form">
    <div class="container">
        <h2>Обсудим Ваш проект</h2>
    </div>
    <form action="" class="form_service form m-t-60">
        <div class="form__container">
            <div class="form__row">
                <div class="form__wrapper col-xxl-3 col-md-4 col-12">
                    <div class="form__check_list">
                        <h3 class="check__title">Вы хотите обсудить</h3>
                        <div class="form__check">
                            <input type="checkbox" name="type" id="what1" /><label for="what1">SEO</label>
                            <p>SEO</p>
                        </div>
                        <div class="form__check">
                            <input type="checkbox" name="type" id="what2" /><label for="what2">SEO</label>
                            <p>Аудит</p>
                        </div>
                        <div class="form__check">
                            <input type="checkbox" name="type" id="what3" /><label for="what3">SEO</label>
                            <p>Контекстную рекламу</p>
                        </div>
                        <div class="form__check">
                            <input type="checkbox" name="type" id="what4" /><label for="what4">SEO</label>
                            <p>SMM продвижение</p>
                        </div>
                    </div>
                </div>
                <div class="form__wrapper col-xxl-9 col-md-8 col-12">
                    <div class="form__row">
                        <div class="form__inp-wrap form__inp-wrap--name col-xl-6 col-12">
                            <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="name">
                            <label for="name" class="form__label">
                                Ваше имя<span class="form__required">*</span>
                            </label>
                        </div>
                        <div class="form__inp-wrap form__inp-wrap--phone col-xl-6 col-12">
                            <input type="tel" name="PROPERTY_VALUES[PHONE]" class="form__input" id="tel" value="" inputmode="text">
                            <label for="tel" class="form__label">
                                Телефон <span class="form__required">*</span>
                            </label>
                        </div>
                        <div class="form__inp-wrap form__inp-wrap--email col-xl-6 col-12">
                            <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="email">
                            <label for="email" class="form__label">
                                E-mail
                            </label>
                        </div>
                        <div class="form__inp-wrap form__inp-wrap--site col-xl-6 col-12">
                            <input type="site" name="PROPERTY_VALUES[PHONE]" class="form__input" id="site" value="" inputmode="text">
                            <label for="site" class="form__label">
                                Ссылка на сайт текущий(если есть)
                            </label>
                        </div>
                        <div class="form__inp-wrap form__inp-wrap--text col-12">
                            <textarea name="PROPERTY_VALUES[PHONE]" class="form__input" id="text" value="" inputmode="text"></textarea>
                            <label for="text" class="form__label">
                                Расскажите о своем проекте:
                            </label>
                        </div>
                    </div>
                    <div class="form__button col-12">
                        <input type="submit" value="Оставить заявку" class="btn">
                        <div class="privacy">
                            <div class="privacy__wrapper">
                                <input type="checkbox" name="privacy-policy-ban" id="privacy-policy-ban" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked="">
                                <label for="privacy-policy-ban"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
