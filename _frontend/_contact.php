
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.contact', 'izifir.form', 'izifir.map', 'izifir.requisites', 'izifir.form_service']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FormService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Contact()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Map()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Requisites()
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
<div class="title title_after_dis">
    <div class="container">
        <h1>Контактная информация</h1>
    </div>
</div>
<div class="back_cont"></div>
<div class="contact">
    <div class="container">
        <h2>Контактная информация</h2>
        <div class="row m-t-60">
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <div class="card__title">
                        <picture><img src="/local/templates/.default/assets/img/icons/cont_icon_1.svg" alt="contact_icon" width="20px" height="20px" class="card__icon"></picture>
                        <p>Находимся по адресу</p>
                    </div>
                    <div class="card__content">
                        <p>350049, г. Краснодар, ул. Пластунская, д. 12</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <div class="card__title">
                        <picture><img src="/local/templates/.default/assets/img/icons/cont_icon_2.svg" alt="contact_icon" width="20px" height="20px" class="card__icon"></picture>
                        <p>Работаем по графику</p>
                    </div>
                    <div class="card__content">
                        <p>Пн-Пт: с 09:00 до 18:00<br>
                            Сб-Вс: выходной</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <div class="card__title">
                        <picture><img src="/local/templates/.default/assets/img/icons/cont_icon_3.svg" alt="contact_icon" width="20px" height="20px" class="card__icon"></picture>
                        <p>Всегда рады пообщаться</p>
                    </div>
                    <div class="card__content">
                        <div class="card__content_link">
                            <a href="tel:+7 (880) 550-88-14">+7 (880) 550-88-14</a>
                        </div>
                        <div class="card__content_link">
                            <a href="mailto:info@izifir.ru">info@izifir.ru</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-5 col-12 card_wraper">
                <div class="card card__static">
                    <div class="row">
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\teleg.svg" alt="teleg" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\vk-f.svg" alt="vk" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\whatsapp-f.svg" alt="whatsapp" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\odnoklasniki.svg" alt="odnoklasniki" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\behance.svg" alt="behance" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\dribble.svg" alt="dribble" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\youtube.svg" alt="youtube" width="24px" height="19px"></picture>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-3">
                            <a href="" class="social_link btn btn__arrow">
                                <picture><img src="\local\templates\.default\assets\img\icons\r.svg" alt="r" width="25px" height="19px"></picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="requisites">
    <div class="container">
        <h2>Реквизиты</h2>
        <div class="row m-t-60">
            <div class="col-xxl-9 col-md-8 col-12 requisites__text">
                <div class="row">
                    <div class="col-12 requisites__text_name">
                        <p>ООО "Аурум"</p>
                    </div>
                    <div class="col-xl-3 col-12">
                        <p>ИНН: 2308213044</p>
                    </div>
                    <div class="col-xl-9 col-12">
                        <p>Юр. адрес: <span>350049, Краснодарский край, город Краснодар, Пластунская ул., д.12</span></p>
                    </div>
                    <div class="col-xl-3 col-12">
                        <p>ОГРН: 1142308009865</p>
                    </div>
                    <div class="col-xl-9 col-12">
                        <p>Почтовый адрес: <span>350049, Краснодарский край, город Краснодар, Пластунская ул., д.12</span></p>
                    </div>
                    <div class="col-xl-3 col-12">
                        <p>КПП: 230801001</p>
                    </div>
                </div>
                <div class="requisites__button">
                    <a href="#" class="btn"><span>Скачать PDF</span></a>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12">
                <picture><img src="/local/templates/.default/assets/img/content/requisite_img.png" alt="requisites_img" width="380px" height="290px" class="requisites__img"></picture>
            </div>
        </div>
    </div>
</div>

<div class="map">
    <div class="container">
        <h2>Где мы находимся</h2>
        <div class="map__button">
            <p>Построить маршрут через</p>
            <a href="" class="btn">
                <img src="/local/templates/.default/assets/img/icons/yandex_maps.svg" width="160px" height="40px" alt="map_logo">
            </a>
            <a href="" class="btn">
                <img src="/local/templates/.default/assets/img/icons/google_maps.svg" width="160px" height="40px" alt="map_logo">
            </a>
        </div>
    </div>
    <div class="fluid">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae71a9d4ea19ae9d33e62009e1dbc04a2f9e5883d9b40e884adfb616c1d395f45&amp;source=constructor" width="100%" height="525" frameborder="0"></iframe>
    </div>
</div>

<div class="service_form service_form_create">
    <div class="container">
        <h2>Обсудим Ваш проект</h2>
    </div>
    <form action="" class="form_service form m-t-60">
        <div class="form__container">
            <div class="form__row">
                <div class="form__wrapper col-xxl-4 col-md-4 col-12">
                    <div class="form__img">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/service_form_img.png" alt="servis_form_img" width="440px" height="430px">
                        </picture>
                    </div>
                </div>
                <div class="form__wrapper col-xxl-8 col-md-8 col-12">
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
                        <div class="form__inp-wrap form__inp-wrap--file col-xl-6 col-12">
                            <label class="input-file">
                                <input type="file" name="file">
                                <span>Выберите файл</span>
                            </label>
                        </div>
                        <div class="form__inp-wrap form__inp-wrap--info-file col-xl-6 col-12">
                            <p>Файл размером не больше 5 Мб.<br>Разрешённые к загрузке форматы: doc, docx, txt, pdf, jpg, png.</p>
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
