<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.blockinfomain', 'izifir.blockformmain', 'izifir.what_want',  'izifir.command', 'izifir.text_banner', 'izifir.form', 'izifir.requisites', 'izifir.form_service']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FormService()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.TextBanner()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.WhatWant()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Command()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockinfomain()
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
<div class="title title_after_dis">
    <div class="container">
        <h1>Команда</h1>
    </div>
</div>

<div class="text_banner">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-md-4 col-12 text_banner__title">
                <h3>Кто мы?</h3>
            </div>
            <div class="col-xxl-8 col-md-8 col-12 text_banner__text">
                <p>Опытная и умеющая думать команда, сфокусированная на крупных и масштабных веб-проектах и молодых стартапах. Мы одинаково хорошо ориентируемся в медицине, строительстве, недвижимости и еще 47 разных направлениях, потому что тщательно изучаем информацию об отрасли и конкретном бизнесе. Настолько гордимся своими проектами, что их не стыдно добавить не только в портфолио, но и показать маме.</p>
            </div>
        </div>
    </div>
</div>

<div class="what_want block-indent">
    <div class="container">
        <h2>Чего мы хотим?</h2>
        <div class="what_want__text m-t-60">
            <p>Конечно, наша команда работает над захватом планеты, а затем и Вселенной. Хотим наводнить интернет быстрыми, адаптивными, красивыми и продающими сайтами. И чтобы они надолго оставались в топ-10 поисковых систем по SEO.</p>
        </div>
        <div class="card_wraper">
            <div class="card card__static card_first_level">
                <div class="card__main_text">
                    <p>Думаете, это утопия? Мы доказываем, что нет. Наши специалисты разрабатывают сайты, которые могут:</p>
                </div>
                <div class="row card_wraper">
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                    <div class="card card__static card_sec_level">
                        <div class="card__img ">
                            <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="want" width="30px" height="30px"></picture>
                        </div>
                        <div class="card__text">
                            <p>Открываться за 5 секунд даже с анимацией</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="command block-indent">
    <div class="container">
        <h2>Команда</h2>
        <div class="row m-t-60">
            <div class="col-xxl-6 col-12">
                <p>Сейчас, сегодня и всегда. Для этого мы упорно работаем, подбираем в команду только лучших потому, что уверены: работа одного человека влияет на работу всех. У нас есть опыт, знания, компетенции и мы точно знаем, сколько они стоят. Никогда не будем делать некрасивый или нелепый сайт. Бережем свою репутацию и осознаем ответственность перед клиентом.</p>
            </div>
            <div class="col-xxl-6 col-12">
                <picture><img src="/local/templates/.default/assets/img/content/comand_main.png" alt="command_img" width="850px" height="480px"></picture>
            </div>
        </div>
        <div class="command__container">
            <div class="command__item">
                <div class="row">
                    <div class="col-xxl-5 col-md-6 col-12">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand2.png" alt="command_ph" width="520px" height="415px"></picture>
                    </div>
                    <div class="col-xxl-7 col-md-6 col-12">
                        <h3>Тляшева Людмила Андреевна</h3>
                        <h4>Руководитель студии </h4>
                        <p>Наш сенсей, которая успела поработать в 10 разных сферах: строительство, оптовые продажи, недвижимость, проектная деятельность, HR-направление и другие. Она знает все о проблемах бизнеса и поможет подобрать оптимальное IT-решение для вашей сферы после анализа текущих бизнес-процессов.</p>
                    </div>
                </div>
            </div>
            <div class="command__item command__item_revers">
                <div class="row">
                    <div class="col-xxl-5 col-md-6 col-12">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="command_ph" width="520px" height="415px"></picture>
                    </div>
                    <div class="col-xxl-7 col-md-6 col-12">
                        <h3>Тляшева Людмила Андреевна</h3>
                        <h4>Руководитель студии </h4>
                        <p>Наш сенсей, которая успела поработать в 10 разных сферах: строительство, оптовые продажи, недвижимость, проектная деятельность, HR-направление и другие. Она знает все о проблемах бизнеса и поможет подобрать оптимальное IT-решение для вашей сферы после анализа текущих бизнес-процессов.</p>
                    </div>
                </div>
            </div>
            <div class="command__item">
                <div class="row">
                    <div class="col-xxl-5 col-md-6 col-12">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand3.png" alt="command_ph" width="520px" height="415px"></picture>
                    </div>
                    <div class="col-xxl-7 col-md-6 col-12">
                        <h3>Тляшева Людмила Андреевна</h3>
                        <h4>Руководитель студии </h4>
                        <p>Наш сенсей, которая успела поработать в 10 разных сферах: строительство, оптовые продажи, недвижимость, проектная деятельность, HR-направление и другие. Она знает все о проблемах бизнеса и поможет подобрать оптимальное IT-решение для вашей сферы после анализа текущих бизнес-процессов.</p>
                    </div>
                </div>
            </div>
            <div class="card_wraper">
                <div class="card card__static card_text">
                    <p>А все вместе мы, как Чип и Дейл приходим на помощь и спасаем digital Вселенную от скучных шаблонных сайтов за 15 000 рублей, а бизнес от потери прибыли и рутинных задач. Несем качество, правильный код и стиль в массы.</p>
                </div>
            </div>
            <div class="swiper command_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand3.png" alt="command_ph" width="100%" height="305px" class="slide__img"></picture>
                        <div class="slide__text">
                            <h3>Семён</h3>
                            <h4>Проджект-менеджер</h4>
                            <p>Настолько прокачал свои управленческие навыки, что без проблем потушит пожар, запустит приложение и зарядит команду позитивом.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand3.png" alt="command_ph" width="100%" height="305px" class="slide__img"></picture>
                        <div class="slide__text">
                            <h3>Семён</h3>
                            <h4>Проджект-менеджер</h4>
                            <p>Настолько прокачал свои управленческие навыки, что без проблем потушит пожар, запустит приложение и зарядит команду позитивом.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand3.png" alt="command_ph" width="100%" height="305px" class="slide__img"></picture>
                        <div class="slide__text">
                            <h3>Семён</h3>
                            <h4>Проджект-менеджер</h4>
                            <p>Настолько прокачал свои управленческие навыки, что без проблем потушит пожар, запустит приложение и зарядит команду позитивом.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button">
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

<div class="info block-indent">
    <div class="container">
        <h2 class="info__title">Работа у нас</h2>
        <div class="row m-t-60">
            <div class="col-xl-7 col-12">
                <div class="info__text">
                    <p>Даже в самое непростое время мы растем и развиваемся, постоянно ищем новых ребят с крутыми скиллами. Нам нужны креативные дизайнеры, умеющие думать программисты, дотошливые тестировщики, а также руководители проектов. И еще много интересных людей.
                        Если нашли подходящую вакансию, звоните или оставляйте заявку! Наши HR-специалисты очень общительные и позитивные.</p>
                    <br>
                    <p>Даже в самое непростое время мы растем и развиваемся, постоянно ищем новых ребят с крутыми скиллами. Нам нужны креативные дизайнеры, умеющие думать программисты, дотошливые тестировщики, а также руководители проектов. </p>
                </div>
            </div>
            <div class="col-xl-5 col-12 info__vacancy">
                <div class="info__item">
                    <div class="row">
                        <div class="col-xl-3 col-12">
                            <picture>
                                <img src="\local\templates\.default\assets\img\icons\info-icons-1.svg" alt="" width="77px" height="77px" class="info__icon">
                            </picture>
                        </div>
                        <div class="col-xl-9 col-12">
                            <p><a href="" class="info__link">Менеджер по продажам (Битрикс24) </a></p>
                            <p><a href="" class="info__link">Менеджер по продажам (Битрикс24) </a></p>
                        </div>
                    </div>
                </div>
                <div class="info__item">
                    <div class="row">
                        <div class="col-xl-3 col-12">
                            <picture>
                                <img src="\local\templates\.default\assets\img\icons\info-icons-2.svg" alt="" width="77px" height="77px" class="info__icon">
                            </picture>
                        </div>
                        <div class="col-xl-9 col-12">
                            <p><a href="" class="info__link">Front-end разработчик (junior)</a></p>
                        </div>
                    </div>
                </div>
                <div class="info__item">
                    <div class="row">
                        <div class="col-xl-3 col-12">
                            <picture>
                                <img src="\local\templates\.default\assets\img\icons\info-icons-3.svg" alt="" width="77px" height="77px" class="info__icon">
                            </picture>
                        </div>
                        <div class="col-xl-9 col-12">
                            <p><a href="" class="info__link">Менеджер для внешних проектов</a></p>
                        </div>
                    </div>
                </div>
                <div class="info__button">
                    <a href="" class="btn">
                        <span>Другие вакансии</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="full_width_img block-indent">
    <div class="container">
        <picture><img src="/local/templates/.default/assets/img/content/command.png" alt="full_width_img" width="100%" height="695px"></picture>
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
