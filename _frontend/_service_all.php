<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.service_all','izifir.breadcrumb']);
?>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            new BX.Izifir.ServiceAll()
        })

        document.addEventListener('DOMContentLoaded', function(){
            new BX.Izifir.Breadcrumb()
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
            <h1>Все услуги</h1>
        </div>
    </div>

    <div class="service_all">
        <div class="container">
            <div class="row m-t-60">
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-md-6 col-12 card_wraper">
                    <div class="card card__static service_all__item">
                        <div class="item__img">
                            <picture><img src="/local/templates/.default/assets/close/content/us1.png" alt="service_all__img" width="295px" height="175px" class="card__img"></picture>
                        </div>
                        <div class="item__text">
                            <h4>Политика в отношении обработки персональных данных Политика в отношении обработки персональных данных</h4>
                            <div class="item__link">
                                <a href="" class="btn"><span>Подробнее</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_all">
                <button id="btn" class="btn"><span>Показать ещё</span></button>
            </div>

            <script>
                window.onload = function () {
                    var box=document.getElementsByClassName('card_wraper');
                    var btn=document.getElementById('btn');
                    for (let i=6;i<box.length;i++) {
                        box[i].style.display = "none";
                    }
                    var countD = 6;
                    btn.addEventListener("click", function() {
                        var box=document.getElementsByClassName('card_wraper');
                        countD += 6;
                        if (countD <= box.length){
                            for(let i=0;i<countD;i++){
                                box[i].style.display = "block";
                            }
                        }

                    })
                }
            </script>
        </div>
    </div>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>