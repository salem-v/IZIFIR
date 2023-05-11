<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.carousel_info', 'izifir.info_about', 'izifir.principles', 'izifir.blockuslug', 'izifir.blockklientmain', 'izifir.blockcomand', 'izifir.review', 'izifir.blockinfomain', 'izifir.form_service']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CarouselInfo()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.InfoAbout()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Principles()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockuslug()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockklientmain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockcomand()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockinfomain()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Review()
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
        <h1>Давайте знакомиться</h1>
    </div>
</div>

<div class="carousel_info">
    <div class="container">
        <h2>О компании в цифрах</h2>
        <div class="swiper swiper_carousel_info m-t-60">
            <div class="swiper-wrapper">
                <div class="swiper-slide card_wraper">
                    <div class="card card__hover">
                        <picture><img src="/local/templates/.default/assets/img/content/ab_1.png" alt="carousel_info_img" class="card__img"></picture>
                        <div class="card__text">
                            <h4>6 лет на рынке интернет-услуг</h4>
                            <p>С 2015 года создаем продукты в сфере digital: от продающих лендингов до сложных веб-сервисов и интернет-магазинов. Оптимизированные процессы гарантируют выполнение проекта в точно обозначенное время.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card_wraper">
                    <div class="card card__hover">
                        <picture><img src="/local/templates/.default/assets/img/content/ab_2.png" alt="carousel_info_img" class="card__img"></picture>
                        <div class="card__text">
                            <h4>6 лет на рынке интернет-услуг</h4>
                            <p>С 2015 года создаем продукты в сфере digital: от продающих лендингов до сложных веб-сервисов и интернет-магазинов. Оптимизированные процессы гарантируют выполнение проекта в точно обозначенное время.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card_wraper">
                    <div class="card card__hover">
                        <picture><img src="/local/templates/.default/assets/img/content/ab_3.png" alt="carousel_info_img" class="card__img"></picture>
                        <div class="card__text">
                            <h4>6 лет на рынке интернет-услуг</h4>
                            <p>С 2015 года создаем продукты в сфере digital: от продающих лендингов до сложных веб-сервисов и интернет-магазинов. Оптимизированные процессы гарантируют выполнение проекта в точно обозначенное время.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide card_wraper">
                    <div class="card card__hover">
                        <picture><img src="/local/templates/.default/assets/img/content/ab_4.png" alt="carousel_info_img" class="card__img"></picture>
                        <div class="card__text">
                            <h4>6 лет на рынке интернет-услуг</h4>
                            <p>С 2015 года создаем продукты в сфере digital: от продающих лендингов до сложных веб-сервисов и интернет-магазинов. Оптимизированные процессы гарантируют выполнение проекта в точно обозначенное время.</p>
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

<div class="info_about block-indent">
    <div class="container">
        <h2>Наша философия</h2>
        <div class="row m-t-60">
            <div class="col-xxl-6 col-md-6 info_about__text">
                <p>Мы в числе тех, кто использует Scrum и Cynefin для разработки сайтов и приложений. Это передовые фреймворки управления разработкой digital-проектов. Всегда оставляем приоритет на главном: самые важные и нужные функции для вашего бизнеса будут запущены в первую очередь. В своей работе придерживаемся принципов бережливой разработки и драйва.</p>
            </div>
            <div class="col-xxl-6 col-md-6  info_about__img">
                <picture><img src="/local/templates/.default/assets/img/content/about_info.png" alt="info_about_img" width="550px" height="310px"></picture>
            </div>
        </div>
    </div>
</div>

<div class="principles block-indent">
    <div class="container">
        <h2>Принципы бережливой разработки</h2>
        <div class="card_wraper m-t-60">
            <div class="card card__static">
                <div class="swiper principles_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card_wraper">
                            <div class="card card__static">
                                <div class="card__img">
                                    <picture><img src="\local\templates\.default\assets\img\icons\res-it-1.svg" alt="principles" width="30px" height="30px"></picture>
                                </div>
                                <div class="card__text">
                                    <p>напрасные затраты финансов, времени, труда и бюрократия — это не про нас.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card_wraper">
                            <div class="card card__static">
                                <div class="card__img ">
                                    <picture><img src="\local\templates\.default\assets\img\icons\res-it-2.svg" alt="principles" width="30px" height="30px"></picture>
                                </div>
                                <div class="card__text">
                                    <p>напрасные затраты финансов, времени, труда и бюрократия — это не про нас.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card_wraper">
                            <div class="card card__static">
                                <div class="card__img">
                                    <picture><img src="\local\templates\.default\assets\img\icons\res-it-1.svg" alt="principles" width="30px" height="30px"></picture>
                                </div>
                                <div class="card__text">
                                    <p>напрасные затраты финансов, времени, труда и бюрократия — это не про нас.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card_wraper">
                            <div class="card card__static">
                                <div class="card__img">
                                    <picture><img src="\local\templates\.default\assets\img\icons\res-it-3.svg" alt="principles" width="30px" height="30px"></picture>
                                </div>
                                <div class="card__text">
                                    <p>напрасные затраты финансов, времени, труда и бюрократия — это не про нас.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button">
                    <div class="button__arrow">
                        <div class="btn btn__arrow swiper-but-prev">
                            <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                        </div>
                        <div class="btn btn__arrow swiper-but-next">
                            <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                        </div>
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

<div class="uslugi service_back">
    <div class="container">
        <h2 class="uslugi__title">Цены</h2>
        <p class="uslugi__text">Создаем сайты с качественной адаптивной версткой и авторским дизайном, которые легко ранжируются поисковиком и увеличивают конверсию.</p>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                    </div>
                    <div class="card card_back">
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
                    </div>
                </div>
            </div>
            <div class="uslugi__button">
                <a href=""><span>Показать все</span></a>
            </div>
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

<div class="comand service_back">
    <div class="container">
        <h2 class="comand__title">Команда</h2>
        <div class="row">
            <div class="col-xl-8 col-12">
                <!--<div class="swiper swiper-comand">
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
                </div>-->
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
        <div class="swiper-button">
            <div class="button__arrow">
                <div class="btn btn__arrow swiper-com-prev">
                    <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                </div>
                <div class="btn btn__arrow swiper-com-next">
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

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
