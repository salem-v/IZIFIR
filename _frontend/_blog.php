<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.smartfilter', 'izifir.blockblog', 'izifir.case_all']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Breadcrumb()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Smartfilter()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.CaseAll()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockblog()
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
        <h1>Блог</h1>
    </div>
</div>

<div class="case_all">
    <div class="container">
        <div class="filters">
            <h3>Фильтр:</h3>
            <div class="smart-filter" data-filter="case_type">
                <div class="smart-filter__container">
                    <label class="smart-filter__item">
                        <input type="checkbox" value="clear" class="smart-filter__checkbox" data-filter-clear="90">
                        <span class="smart-filter__label btn">Все виды работ</span>
                    </label>
                    <label class="smart-filter__item">
                        <input type="checkbox" name="testimonialsFilter_90_1" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label btn">Только сайты</span>
                    </label>
                    <label class="smart-filter__item">
                        <input type="checkbox" name="testimonialsFilter_90_2" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                        <span class="smart-filter__label btn">Landing Page</span>
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
            <h3>Сортировать по:</h3>
            <div class="smart-filter__container">
                <label class="smart-filter__item btn">
                    <input type="checkbox" value="clear" class="smart-filter__checkbox" data-filter-clear="90">
                    <span class="smart-filter__label smart-filter__label_sort">Дате</span>
                </label>
                <label class="smart-filter__item btn">
                    <input type="checkbox" name="testimonialsFilter_90_1" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                    <span class="smart-filter__label smart-filter__label_sort">Просмотрам</span>
                </label>
                <label class="smart-filter__item btn">
                    <input type="checkbox" name="testimonialsFilter_90_2" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                    <span class="smart-filter__label smart-filter__label_sort">Популярности</span>
                </label>
                <label class="smart-filter__item btn">
                    <input type="checkbox" name="testimonialsFilter_90_3" value="Y" data-filter-item="90" class="smart-filter__checkbox">
                    <span class="smart-filter__label smart-filter__label_sort">Рейтингу</span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="blog blog_all">
    <div class="container">
        <div class="row">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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
                        <div class="col-sm-8 col-7">01.01.2022</div>
                        <div class="col-sm-4 col-5 item__likes">
                            <img src="\local\templates\.default\assets\img\icons\like.svg" alt="like">
                            <p>999</p>
                            <img src="\local\templates\.default\assets\img\icons\dislike.svg" alt="like">
                            <p>999</p>
                        </div>
                        <div class="col-12">
                            <h3 class="item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <div class="item__personal">
                                <div class="col-sm-2 col-3">
                                    <picture><img src="\local\templates\.default\assets\img\content\comand\comand1.png" alt="blog-img" class="personal_photo" width="60px" height="60px"></picture>
                                </div>
                                <div class="col-sm-10 col-9">
                                    <h4 class="item__name">Кирриллов Константин</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-md-6 col-6 item__view">
                            <img src="\local\templates\.default\assets\img\icons\whatch.svg" alt="like">
                            <p>99</p>
                            <img src="\local\templates\.default\assets\img\icons\read.svg" alt="like">
                            <p>60 мин</p>
                        </div>
                        <div class="col-6 item__button">
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