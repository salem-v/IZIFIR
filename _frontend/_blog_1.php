<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.text_banner', 'izifir.smartfilter', 'izifir.blockblog', 'izifir.article', 'izifir.form', 'izifir.form_review']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.TextBanner()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Smartfilter()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Article()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockblog()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.FormReview()
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

<div class="text_banner text_banner_article">
    <div class="container">
        <div class="row">
            <div class="title title_after_dis col-xxl-7 col-12">
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <div class="text_banner__text">
                    <div class="item__personal">
                        <div class="col-xl-1 col-12">
                            <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                        </div>
                        <div class="col-xl-11 col-12">
                            <h4 class="item__name">Кирриллов Константин</h4>
                        </div>
                    </div>
                    <div class="blog__rating">
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.07668 1.21993C6.41827 0.398637 7.58173 0.398636 7.92332 1.21993L8.88146 3.52358C9.02547 3.86981 9.35108 4.10638 9.72487 4.13635L12.2119 4.33573C13.0985 4.40681 13.458 5.51332 12.7825 6.09199L10.8877 7.7151C10.6029 7.95905 10.4785 8.34183 10.5655 8.70659L11.1444 11.1335C11.3508 11.9987 10.4096 12.6825 9.65046 12.2189L7.52125 10.9184C7.20124 10.7229 6.79876 10.7229 6.47875 10.9184L4.34954 12.2189C3.59044 12.6825 2.64919 11.9987 2.85558 11.1335L3.43448 8.70659C3.52148 8.34183 3.39711 7.95905 3.11232 7.7151L1.2175 6.09199C0.541968 5.51332 0.901493 4.40681 1.78815 4.33573L4.27513 4.13635C4.64892 4.10638 4.97453 3.86981 5.11854 3.52358L6.07668 1.21993Z" fill="url(#paint0_linear_2006_9912)"/>
                            <defs>
                                <linearGradient id="paint0_linear_2006_9912" x1="7" y1="-1" x2="7" y2="15" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F56FB3"/>
                                    <stop offset="1" stop-color="#FF9A5C"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        5.0
                    </div>
                    <div class="item__likes">
                        <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                        <p>999</p>
                    </div>
                    <div class="item__view">
                        <div>
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                        </div>
                        <div>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                    </div>
                    <div class="text_banner_date">
                        <p>01.01.2022</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-12">
                <div class="text_banner__img">
                    <picture><img src="/local/templates/.default/assets/img/content/banner_img.png" alt="" width="450px" height="400px"></picture>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="article">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-12">
                <div class="article__chapter">
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                </div>
                <div class="article__chapter">
                    <h3>Заголовок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                    <div class="article__quote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                    </div>
                </div>
                <div class="article__chapter">
                    <h3>Заголовок</h3>
                    <ul class="article__list_dot">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                    </ul>
                    <picture><img src="/local/templates/.default/assets/img/content/article_img.png" alt="article_img" width="100%" height="100%" class="article__img"></picture>
                </div>
                <div class="article__chapter">
                    <h3>Заголовок</h3>
                    <ol class="article__list_numb">
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-xxl-4 col-12 card_wraper">
                <div class="content card card__static">
                    <a href="#"><p>Суть профессии</p></a>
                    <a href="#"><p>Суть профессии</p></a>
                    <a href="#"><p>Суть профессии</p></a>
                    <a href="#"><p>Суть профессии</p></a>
                    <a href="#"><p>Суть профессии</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form_review block-indent">
    <div class="container">
        <h2>Оставьте отзыв</h2>
        <div class="share m-t-60 col-xxl-8 col-12">
            <div class="share__item">
                <button class="btn">
                    <span><img src="/local/templates/.default/assets/img/icons/star_comment.svg" alt="star" width="37px" height="37px"></span>
                </button>
            </div>
            <div class="share__item">
                <button class="btn like">
                    <img src="/local/templates/.default/assets/img/icons/like_gradient.svg" alt="like">
                    <p>999</p>
                </button>
            </div>
            <div class="share__item">
                <button class="btn like like_no">
                    <img src="/local/templates/.default/assets/img/icons/like_gradient.svg" alt="like">
                    <p>999</p>
                </button>
            </div>
            <div class="share__item">
                <div class="btn share__button">
                    <p>Поделиться</p>
                    <img src="/local/templates/.default/assets/img/icons/share.svg" alt="like" id="share__img" onclick="(document.getElementById('social').style.display='flex');document.getElementById('share__img').style.display='none'">
                    <div class="share__item_social" id="social" style="display:none;">
                        <a href="" class="social_link btn btn__arrow">
                            <picture><img src="\local\templates\.default\assets\img\icons\teleg.svg" alt="teleg" width="24px" height="19px"></picture>
                        </a>
                        <a href="" class="social_link btn btn__arrow">
                            <picture><img src="\local\templates\.default\assets\img\icons\vk-f.svg" alt="vk" width="24px" height="19px"></picture>
                        </a>
                        <a href="" class="social_link btn btn__arrow">
                            <picture><img src="\local\templates\.default\assets\img\icons\whatsapp-f.svg" alt="whatsapp" width="24px" height="19px"></picture>
                        </a>
                        <a href="" class="social_link btn btn__arrow">
                            <picture><img src="\local\templates\.default\assets\img\icons\odnoklasniki.svg" alt="odnoklasniki" width="24px" height="19px"></picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <form action="" class="form_comment form m-t-60 col-xxl-8 col-12">
            <div class="form_comment__title">
                <h3>23 Комментариев</h3>
            </div>
            <div class="add_mark">
                <p>Добавить в закладки</p>
                <img src="/local/templates/.default/assets/img/icons/info.svg" alt="info" class="add_mark__img" width="20px" height="20px">
                <div class="add_info">
                    <p>Ctrl + D</p>
                </div>
            </div>
            <div class="form__wrapper col-12">
                <div class="form__inp-wrap form__inp-wrap--text col-12">
                    <textarea name="PROPERTY_VALUES[PHONE]" class="form__input" id="text" value="" inputmode="text"></textarea>
                    <label for="text" class="form__label">
                        Написать комментарий
                    </label>
                </div>
                <div class="button">
                    <button class="btn btn_form"><span>Отправить</span></button>
                </div>
            </div>
        </form>
        <div class="col-xxl-8 col-12 comments">
            <div class="comments__item">
                <div class="item__person">
                    <div class="item__person_img">
                        <picture><img src="/local/templates/.default/assets/img/content/comand/comand1.png" alt="photo" width="50px" height="50px"></picture>
                    </div>
                    <div class="item__person_info">
                        <h4>Имя пользователя</h4>
                        <p>01.01.2022</p>
                    </div>
                </div>
                <div class="item__text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo leo scelerisque et pretium fermentum. Quis viverra et, nisi vitae consectetur. Massa nunc faucibus fermentum in nibh mauris consectetur. Pharetra pharetra molestie facilisis massa euismod. Ultrices a a gravida ut augue ipsum, id in.</p>
                </div>
            </div>
            <div class="button_all">
                <button id="btn" class="btn btn_form">Показать ещё</button>
            </div>
        </div>
    </div>
</div>

<div class="blog blog_all">
    <div class="container">
        <h2>Другие статьи</h2>
        <div class="row m-t-60">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 card_wraper">
                <div class="blog__item card card__hover">
                    <div class="blog__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                        </picture>
                        <div class="blog__rating">
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.07668 1.21993C6.41827 0.398637 7.58173 0.398636 7.92332 1.21993L8.88146 3.52358C9.02547 3.86981 9.35108 4.10638 9.72487 4.13635L12.2119 4.33573C13.0985 4.40681 13.458 5.51332 12.7825 6.09199L10.8877 7.7151C10.6029 7.95905 10.4785 8.34183 10.5655 8.70659L11.1444 11.1335C11.3508 11.9987 10.4096 12.6825 9.65046 12.2189L7.52125 10.9184C7.20124 10.7229 6.79876 10.7229 6.47875 10.9184L4.34954 12.2189C3.59044 12.6825 2.64919 11.9987 2.85558 11.1335L3.43448 8.70659C3.52148 8.34183 3.39711 7.95905 3.11232 7.7151L1.2175 6.09199C0.541968 5.51332 0.901493 4.40681 1.78815 4.33573L4.27513 4.13635C4.64892 4.10638 4.97453 3.86981 5.11854 3.52358L6.07668 1.21993Z" fill="url(#paint0_linear_2006_9912)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2006_9912" x1="7" y1="-1" x2="7" y2="15" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F56FB3"/>
                                        <stop offset="1" stop-color="#FF9A5C"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            5.0
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-12">01.01.2022</div>
                        <div class="col-xl-4 col-12 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-xl-2 col-12">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-xl-10 col-12">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-xl-6 col-12 item__button">
                            <a href="" class="btn"><span>Читать статью</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 card_wraper">
                <div class="blog__item card card__hover">
                    <div class="blog__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                        </picture>
                        <div class="blog__rating">
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.07668 1.21993C6.41827 0.398637 7.58173 0.398636 7.92332 1.21993L8.88146 3.52358C9.02547 3.86981 9.35108 4.10638 9.72487 4.13635L12.2119 4.33573C13.0985 4.40681 13.458 5.51332 12.7825 6.09199L10.8877 7.7151C10.6029 7.95905 10.4785 8.34183 10.5655 8.70659L11.1444 11.1335C11.3508 11.9987 10.4096 12.6825 9.65046 12.2189L7.52125 10.9184C7.20124 10.7229 6.79876 10.7229 6.47875 10.9184L4.34954 12.2189C3.59044 12.6825 2.64919 11.9987 2.85558 11.1335L3.43448 8.70659C3.52148 8.34183 3.39711 7.95905 3.11232 7.7151L1.2175 6.09199C0.541968 5.51332 0.901493 4.40681 1.78815 4.33573L4.27513 4.13635C4.64892 4.10638 4.97453 3.86981 5.11854 3.52358L6.07668 1.21993Z" fill="url(#paint0_linear_2006_9912)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2006_9912" x1="7" y1="-1" x2="7" y2="15" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F56FB3"/>
                                        <stop offset="1" stop-color="#FF9A5C"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            5.0
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-12">01.01.2022</div>
                        <div class="col-xl-4 col-12 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-xl-2 col-12">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-xl-10 col-12">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-xl-6 col-12 item__button">
                            <a href="" class="btn"><span>Читать статью</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 card_wraper">
                <div class="blog__item card card__hover">
                    <div class="blog__img">
                        <picture>
                            <img src="\local\templates\.default\assets\img\content\blog-img-1.png" alt="blog-img" width="480px" height="270px" class="card__img ">
                        </picture>
                        <div class="blog__rating">
                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.07668 1.21993C6.41827 0.398637 7.58173 0.398636 7.92332 1.21993L8.88146 3.52358C9.02547 3.86981 9.35108 4.10638 9.72487 4.13635L12.2119 4.33573C13.0985 4.40681 13.458 5.51332 12.7825 6.09199L10.8877 7.7151C10.6029 7.95905 10.4785 8.34183 10.5655 8.70659L11.1444 11.1335C11.3508 11.9987 10.4096 12.6825 9.65046 12.2189L7.52125 10.9184C7.20124 10.7229 6.79876 10.7229 6.47875 10.9184L4.34954 12.2189C3.59044 12.6825 2.64919 11.9987 2.85558 11.1335L3.43448 8.70659C3.52148 8.34183 3.39711 7.95905 3.11232 7.7151L1.2175 6.09199C0.541968 5.51332 0.901493 4.40681 1.78815 4.33573L4.27513 4.13635C4.64892 4.10638 4.97453 3.86981 5.11854 3.52358L6.07668 1.21993Z" fill="url(#paint0_linear_2006_9912)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2006_9912" x1="7" y1="-1" x2="7" y2="15" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F56FB3"/>
                                        <stop offset="1" stop-color="#FF9A5C"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            5.0
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-12">01.01.2022</div>
                        <div class="col-xl-4 col-12 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-xl-2 col-12">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-xl-10 col-12">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-xl-6 col-12 item__button">
                            <a href="" class="btn"><span>Читать статью</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button_all">
            <button id="btn" class="btn btn_but">Показать ещё</button>
        </div>
    </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>