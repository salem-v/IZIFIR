<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.case_all', 'izifir.smartfilter', 'izifir.blockuslug', 'izifir.blockformmain']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockformmain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockuslug()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Smartfilter()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CaseAll()
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
        <h1>Цены</h1>
    </div>
</div>

<div class="case_all">
    <div class="container">
        <div class="type filters">
            <div class="smart-filter" data-filter="price">
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

<div class="uslugi" data-container="price">
    <div class="container">
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
            <div class="button_all">
                <button class="btn btn_but">Показать все</button>
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