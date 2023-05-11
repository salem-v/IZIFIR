<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();
?>

<?php
/*Удалить позже*/
?>
<style>
    .breadcrumb, .title {
        display: none;
    }
</style>

<!--region Banner-->
<?php
Extension::load(['izifir.bannerprogram']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new BX.Izifir.BannerProgram()
    })
</script>

<div class="banner_program">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <div class="banner_program__row">
                    <div class="col-xl-6 col-md-12">
                        <h1 class="banner_program__title title_program">Программа для настоящих <span>Партнёров</span></h1>
                        <div class="banner_program__text">Получайте вознаграждение с каждого приведённого клиента в
                            маркетинговое агентство IZIFIR
                        </div>
                        <button class="btn btn_form banner_program__btn" data-fancybox="" data-type="ajax"
                                data-src="/local/ajax/modal/form.php?form=87"><span>Стать партнёром</span></button>
                    </div>
                    <div class="col-xl-6 col-md-12 banner_program__picture">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/_partner_program/banner_girl.png"
                                 alt="icon" width="655" height="728" class="banner_program__img">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<!--region Program info-->
<?php
Extension::load(['izifir.programinfo']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new BX.Izifir.ProgramInfo()
    })
</script>

<div class="benefit">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <h2 class="title_program">Win-win — выгода для <span>всех!</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="benefit__item card card__static">
                            <div class="benefit__item__icon">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/benefit_icon_1.svg"
                                         alt="icon" width="33" height="33">
                                </picture>
                            </div>
                            <div class="benefit__item__text">Вы передаёте заказчика нам и получаете вознаграждение</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit__item card card__static">
                            <div class="benefit__item__icon">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/benefit_icon_2.svg"
                                         alt="icon" width="33" height="33">
                                </picture>
                            </div>
                            <div class="benefit__item__text">Мы передаём нашего заказчика вам на определённых условиях
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="income">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <div class="income__row">
                    <div class="col-md-6">
                        <h2 class="title_program">Сколько можно <span>заработать?</span></h2>
                        <div class="income__text">Наши партнеры совокупно заработали более 180 000 рублей в этом году.
                            Потолка нет. Чем больше клиентов или чек, тем больше ваше вознаграждение.
                        </div>
                    </div>
                    <div class="col-md-6 income__picture">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/_partner_program/income_img.png"
                                    alt="img" width="610" height="610" class="income__img">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
Extension::load(['izifir.programconditions']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new BX.Izifir.ProgramConditions('conditions')
    })
</script>

<div class="conditions">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <h2 class="title_program">Что нужно сделать, чтобы начать зарабатывать с нами?</h2>
                <div class="conditions__tabs" data-tabs="conditions">
                    <div class="row conditions__tabs_row">
                        <div class="col-auto">
                            <div class="conditions__btn" data-tab="1"><span>Вы приводите заказчика</span></div>
                        </div>
                        <div class="col-auto">
                            <div class="conditions__btn" data-tab="2"><span>Мы приводим заказчика</span></div>
                        </div>
                    </div>
                    <div class="conditions__list" data-page="1">
                        <div class="conditions__item card card__static">
                            <div class="conditions__item__count">1</div>
                            <h4 class="conditions__item__title">Заключить партнёрский договор с нами</h4>
                            <div class="conditions__item__text">Свяжитесь любым удобным способом, мы вам перезвоним и пригласим на встречу для заключения договора.</div>
                            <div class="conditions__item__picture">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/conditions__list_1.png" alt="img" width="422" height="330" class="conditions__image">
                                </picture>
                            </div>
                        </div>
                        <div class="conditions__item card card__static">
                            <div class="conditions__item__count">2</div>
                            <h4 class="conditions__item__title">Найти заказчика</h4>
                            <div class="conditions__item__text">Порекомендуйте заказчику наши услуги, расскажите обо всех выгодах и преимуществах при сделке с нами.</div>
                            <div class="conditions__item__picture">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/conditions__list_2.png" alt="img" width="422" height="330" class="conditions__image">
                                </picture>
                            </div>
                        </div>
                        <div class="conditions__item card card__static">
                            <div class="conditions__item__count">3</div>
                            <h4 class="conditions__item__title">Передать заказчика нам</h4>
                            <div class="conditions__item__text">Оставьте контакты, готового к сотрудничеству, заказчика нашему проектному менеджеру.</div>
                            <div class="conditions__item__picture">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/conditions__list_3.png" alt="img" width="422" height="330" class="conditions__image">
                                </picture>
                            </div>
                        </div>
                        <div class="conditions__item card card__static">
                            <div class="conditions__item__count">4</div>
                            <h4 class="conditions__item__title">Получить вознаграждение</h4>
                            <div class="conditions__item__text">Заберите свой бонус, когда ваш заказчик заключит с нами договор на услуги.</div>
                            <div class="conditions__item__picture">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/conditions__list_4.png" alt="img" width="422" height="330" class="conditions__image">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="conditions__list" data-page="2">
                        <div class="conditions__item card card__static">
                            <div class="conditions__item__count">1</div>
                            <h4 class="conditions__item__title">Найти заказчика</h4>
                            <div class="conditions__item__text">Порекомендуйте заказчику наши услуги, расскажите обо всех выгодах и преимуществах при сделке с нами.</div>
                            <div class="conditions__item__picture">
                                <picture>
                                    <img src="/local/templates/.default/assets/img/content/_partner_program/conditions__list_1.png" alt="img" width="422" height="330" class="conditions__image">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="program_info">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <div class="program_info__row">
                    <div class="col-xl-6 col-md-12">
                        <h2 class="title_program">Используйте любой <span>удобный способ</span></h2>
                        <div class="program_info__text">Привлекайте клиентов по любым доступным вам каналам: Интернет,
                            соцсети, личные связи и т.п.
                        </div>
                        <div class="program_info__add_text">Наша с вами цель — зарабатывать вместе!</div>
                    </div>
                    <div class="col-xl-6 col-md-12 program_info__picture">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/_partner_program/program_info_img.png"
                                 alt="img" class="program_info__img" width="840" height="655">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<!--region Contact-->
<?php
Extension::load(['izifir.programcontact']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new BX.Izifir.ProgramContact()
    })
</script>

<div class="program_contact">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-xxl-10">
                <div class="program_contact__row">
                    <div class="col-xl-6 col-md-12 program_contact__picture">
                        <picture>
                            <img src="/local/templates/.default/assets/img/content/_partner_program/contact_img.png"
                                 alt="img" class="program_contact__img" width="542" height="677">
                        </picture>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <h2 class="title_program"><span>Один шаг,</span> чтобы стать нашим партнёром</h2>
                        <div class="program_contact__text">Просто выберите удобный способ для связи:</div>
                        <div class="program_contact__buttons">
                            <button class="btn btn_form"><span>Оставить заявку</span></button>
                            <a href="/" class="btn btn_wa">WhatsApp</a>
                            <a href="/" class="btn btn_tg">Telegram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--endregion-->

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>

