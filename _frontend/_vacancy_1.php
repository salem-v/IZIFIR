<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.text_banner', 'izifir.form', 'izifir.check_list', 'izifir.form_service', 'izifir.vacancy_contact', 'izifir.map', 'izifir.contact', 'izifir.steps_apply', 'izifir.info_vacancy']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.TextBanner()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CheckList()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.StepsApply()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FormService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.VacancyContact()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Contact()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Map()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.InfoVacancy()
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
        <h1>Back-end разработчик (middle)</h1>
    </div>
</div>

<div class="text_banner">
    <div class="container">
        <div class="col-xxl-8 col-12 text_banner__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
        </div>
    </div>
</div>

<div class="info_vacancy">
    <div class="container">
        <div class="main_inf">
            <div class="main_inf__item">
                <p>от 1 до 2 ₽</p>
            </div>
            <div class="main_inf__item">
                <p>требуемый опыт работы: 1 - 3 года</p>
            </div>
            <div class="main_inf__item">
                <p>полная занятость,  работа в офисе</p>
            </div>
        </div>
        <div class="check_list">
            <div class="container">
                <h2>Обязанности:</h2>
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
                </div>
            </div>
        </div>
        <div class="check_list">
            <div class="container">
                <h2>Требования:</h2>
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
                </div>
            </div>
        </div>
        <div class="check_list">
            <div class="container">
                <h2>Условия:</h2>
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
        <div class="skill">
            <h2>Ключевые навыки:</h2>
            <div class="row m-t-60">
                <div class="skill__item">
                    <a href="" class="btn"><span>Ajax на чистом js и БЭМ</span></a>
                </div>
                <div class="skill__item">
                    <a href="" class="btn"><span>Figma</span></a>
                </div>
                <div class="skill__item">
                    <a href="" class="btn"><span>PHP</span></a>
                </div>
                <div class="skill__item">
                    <a href="" class="btn"><span>Adobe Photoshop</span></a>
                </div>
            </div>
        </div>
        <div class="info_date">
            <p>Публикация вакансии 1.01.2022</p>
        </div>
    </div>
</div>

<div class="step_apply">
    <div class="container">
        <h2>Как к нам устроиться</h2>
        <div class="row m-t-60">
            <div class="col-xxl-3 col-md-3 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_1.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 1</h4>
                    <div class="card__text">
                        <p>Ознакомиться с вакансией</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_2.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 2</h4>
                    <div class="card__text">
                        <p>Отправить резюме</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_3.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 3</h4>
                    <div class="card__text">
                        <p>Пройти этапы отбора</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_4.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 4</h4>
                    <div class="card__text">
                        <p>Стать частью команды</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vacancy_contact">
    <div class="container">
        <h2>Отправьте резюме и портфолио, и мы свяжемся с вами!</h2>
    </div>
    <div class="vacancy_contact_back">
        <div class="service_form service_form_create resume_form">
            <form action="" class="form_service form_resume form m-t-60">
                <div class="form__container">
                    <div class="form__row">
                        <div class="form__wrapper col-xxl-3 col-md-4 col-12">
                            <div class="form__inp-wrap form__inp-wrap--name">
                                <select name="PROPERTY_VALUES[NAME]" class="form__input" id="property_41_36_ruxh" value="">
                                    <option value="">Выберите вакансию</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <!--                                <label for="property_41_36_ruxh" class="form__label">Выберите вакансию</label>-->
                            </div>
                            <div class="form__inp-wrap form__inp-wrap--name">
                                <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="property_41_35_ruxh" value="">
                                <label for="property_41_35_ruxh" class="form__label">
                                    Ваше имя<span class="form__required">*</span>
                                </label>
                            </div>
                            <div class="form__inp-wrap form__inp-wrap--name">
                                <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="property_41_37_ruxh" value="">
                                <label for="property_41_37_ruxh" class="form__label">
                                    Телефон<span class="form__required">*</span>
                                </label>
                            </div>
                            <div class="form__inp-wrap form__inp-wrap--name">
                                <input type="text" name="PROPERTY_VALUES[NAME]" class="form__input" id="property_41_38_ruxh" value="">
                                <label for="property_41_38_ruxh" class="form__label">Ваш email</label>
                            </div>
                        </div>
                        <div class="form__wrapper col-xxl-6 col-md-4 col-12">
                            <div class="form__inp-wrap form__inp-wrap--text col-12">
                                <textarea name="PROPERTY_VALUES[PHONE]" class="form__input" id="text" value="" inputmode="text"></textarea>
                                <label for="text" class="form__label">
                                    Немного о себе:
                                </label>
                            </div>
                        </div>
                        <div class="form__wrapper col-xxl-3 col-md-4 col-12 form__img_none">
                            <picture><img src="/local/templates/.default/assets/img/content/vacancy_cont.png" alt="vacancy_cont" width="100%" height="290px" class="cont_img"></picture>
                        </div>
                        <div class="form__wrapper col-xxl-9 col-12">
                            <div class="form__inp-wrap form__inp-wrap--file col-xl-6 col-12">
                                <label class="input-file">
                                    <input type="file" name="file">
                                    <span>Прикрепить резюме</span>
                                </label>
                            </div>
                            <div class="form__inp-wrap form__inp-wrap--info-file col-xl-6 col-12">
                                <p>Файл размером не больше 5 Мб.<br>Разрешённые к загрузке форматы: doc, docx, txt, pdf, jpg, png.</p>
                            </div>
                        </div>
                        <div class="form__button col-xxl-3 col-12">
                            <div class="privacy">
                                <div class="privacy__wrapper">
                                    <input type="checkbox" name="privacy-policy-ban" id="privacy-policy-ban" class="privacy-policy-checkbox" onchange="document.getElementById('mc-embedded-subscribe').disabled = !this.checked" checked="">
                                    <label for="privacy-policy-ban"> Нажимая на кнопку, вы соглашаетесь с <a href="">Политикой конфиденциальности</a>
                                    </label>
                                </div>
                            </div>
                            <input type="submit" value="Оставить заявку" class="btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="contact contact_vacancy">
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

<div class="map map_vacancy">
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
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
