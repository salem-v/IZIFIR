<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.banner_case', 'izifir.maininfo_case', 'izifir.double_swiper', 'izifir.goal_case', 'izifir.result_case', 'izifir.add_case', 'izifir.optimization_case', 'izifir.adaptation_case', 'izifir.promotion_case', 'izifir.banner_request', 'izifir.blockformmain']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.BannerCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.MaininfoCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.DoubleSwiper()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.AddCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.OptimizationCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.AdaptationCase()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.PromotionCase()
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

<div class="double_swiper block-indent">
    <div class="container">
        <h2>Цель работ</h2>
        <div class="row m-t-60">
            <div class="col-xxl-5 col-md-6 col-12">
                <div class="swiper swiper-goal-case">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/goal-case.png" alt="goal_img" width="100%" height="1020px">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/goal-case.png" alt="goal_img" width="100%" height="1020px">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="double_swiper__button">
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
            <div class="col-xxl-7 col-md-6 col-12">
                <div class="swiper swiper-goal-case-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">1</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">2</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">3</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">4</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">5</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="double_swiper__button double_swiper__button_vertikal">
                    <div class="button__arrow">
                        <div class="btn btn__arrow swiper-button-prev_vert">
                            <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                        </div>
                        <div class="btn btn__arrow swiper-button-next_vert">
                            <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="double_swiper block-indent">
    <div class="container">
        <h2>Результат работ</h2>
        <div class="row m-t-60">
            <div class="col-xxl-7 col-md-6 col-12">
                <div class="swiper swiper-goal-case-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">1</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">2</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">3</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">4</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__hover">
                                    <div class="item__count">5</div>
                                    <div class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="double_swiper__button double_swiper__button_vertikal">
                    <div class="button__arrow">
                        <div class="btn btn__arrow swiper-button-prev_vert">
                            <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                        </div>
                        <div class="btn btn__arrow swiper-button-next_vert">
                            <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-md-6 col-12">
                <div class="swiper swiper-goal-case">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/goal-case.png" alt="goal_img" width="100%" height="1020px">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="double_swiper__button">
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
    </div>
</div>

<div class="add_case block-indent">
    <div class="container">
        <h2>Дополнительно</h2>
        <div class="row m-t-60">
            <div class="col-xxl-4 col-md-6 col-12 check_list">
                <div class="check_list__item">
                    <p>Разработали отдельно прототип и макет дизайна</p>
                </div>
                <div class="check_list__item">
                    <p>Разработали отдельно прототип и макет дизайна</p>
                </div>
                <div class="check_list__item">
                    <p>Разработали отдельно прототип и макет дизайна</p>
                </div>
                <div class="check_list__item">
                    <p>Разработали отдельно прототип и макет дизайна</p>
                </div>
                <div class="check_list__button">
                    <a href="#" class="btn btn_form"><span>Просмотр материала</span></a>
                </div>
            </div>
            <div class="col-xxl-8 col-md-6 col-12">
                <div class="swiper add_case_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide_img">
                                <picture><img src="/local/templates/.default/assets/img/content/add_case.png" alt="add_case_img"></picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add_case__button">
                    <div class="button__arrow">
                        <div class="btn btn__arrow swiper-case-prev">
                            <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                        </div>
                        <div class="btn btn__arrow swiper-case-next">
                            <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="optimization_case block-indent">
    <div class="container">
        <h2>Техническая оптимизация сайта</h2>
        <div class="card_wraper m-t-60">
            <div class="card card__static">
                <div class="swiper optimization_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__static">
                                    <div class="item__img"><img src="/local/templates/.default/assets/img/content/opti_img.png" alt="opti_img" width="100%" height="200px" class="card__img"></div>
                                    <div class="item__text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__static">
                                    <div class="item__img"><img src="/local/templates/.default/assets/img/content/opti_img.png" alt="opti_img" width="100%" height="200px" class="card__img"></div>
                                    <div class="item__text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_wraper">
                                <div class="card card__static">
                                    <div class="item__img"><img src="/local/templates/.default/assets/img/content/opti_img.png" alt="opti_img" width="100%" height="200px" class="card__img"></div>
                                    <div class="item__text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="opti__button">
            <div class="button__arrow">
                <div class="btn btn__arrow swiper-opti-prev">
                    <img src="\local\templates\.default\assets\img\icons\arrow-prev.svg" alt="arrow" width="8px" height="17px">
                </div>
                <div class="btn btn__arrow swiper-opti-next">
                    <img src="\local\templates\.default\assets\img\icons\arrow-next.svg" alt="arrow" width="8px" height="17px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="adaptive block-indent">
    <div class="container">
        <h2>Адаптировали сайт под любые разрешения экранов устройств</h2>
        <div class="m-t-60">
            <picture><img src="/local/templates/.default/assets/img/content/adaptive.png" width="100%" height="715px" alt="adaptive_img"></picture>
        </div>
    </div>
</div>

<div class="promotion block-indent">
    <div class="container">
        <h2>Продвижение</h2>
        <div class="promotion__text m-t-60">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur.</p>
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