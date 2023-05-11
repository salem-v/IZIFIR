<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.rating']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Rating()
    })
</script>

<div class="modal modal-rating" style="visibility: unset">
    <div class="modal__button-close" onclick="document.getElementsByClassName('carousel__button is-close')[0].click();">
        <svg class="modal__cross js-modal-close" width="17" height="17" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.598918 0.598429C0.715262 0.481791 0.853474 0.389251 1.00564 0.32611C1.1578 0.262969 1.32093 0.230469 1.48567 0.230469C1.65041 0.230469 1.81354 0.262969 1.9657 0.32611C2.11787 0.389251 2.25608 0.481791 2.37242 0.598429L9.00052 7.22903L15.6286 0.598429C15.7451 0.48198 15.8833 0.389606 16.0355 0.326584C16.1876 0.263562 16.3507 0.231125 16.5154 0.231125C16.68 0.231125 16.8431 0.263562 16.9953 0.326584C17.1474 0.389606 17.2857 0.48198 17.4021 0.598429C17.5186 0.714879 17.6109 0.853125 17.674 1.00527C17.737 1.15742 17.7694 1.3205 17.7694 1.48518C17.7694 1.64987 17.737 1.81294 17.674 1.96509C17.6109 2.11724 17.5186 2.25548 17.4021 2.37193L10.7715 9.00003L17.4021 15.6281C17.5186 15.7446 17.6109 15.8828 17.674 16.035C17.737 16.1871 17.7694 16.3502 17.7694 16.5149C17.7694 16.6796 17.737 16.8426 17.674 16.9948C17.6109 17.1469 17.5186 17.2852 17.4021 17.4016C17.2857 17.5181 17.1474 17.6105 16.9953 17.6735C16.8431 17.7365 16.68 17.7689 16.5154 17.7689C16.3507 17.7689 16.1876 17.7365 16.0355 17.6735C15.8833 17.6105 15.7451 17.5181 15.6286 17.4016L9.00052 10.771L2.37242 17.4016C2.25597 17.5181 2.11773 17.6105 1.96558 17.6735C1.81343 17.7365 1.65035 17.7689 1.48567 17.7689C1.32098 17.7689 1.15791 17.7365 1.00576 17.6735C0.853613 17.6105 0.715368 17.5181 0.598918 17.4016C0.482468 17.2852 0.390094 17.1469 0.327072 16.9948C0.26405 16.8426 0.231613 16.6796 0.231613 16.5149C0.231613 16.3502 0.26405 16.1871 0.327072 16.035C0.390094 15.8828 0.482468 15.7446 0.598918 15.6281L7.22952 9.00003L0.598918 2.37193C0.482279 2.25559 0.389739 2.11738 0.326598 1.96521C0.263457 1.81305 0.230957 1.64993 0.230957 1.48518C0.230957 1.32044 0.263457 1.15731 0.326598 1.00515C0.389739 0.852986 0.482279 0.714774 0.598918 0.598429Z" fill="#959595"></path>
        </svg>
        <img src="/local/templates/.default/assets/img/icons/cross-hover.svg" alt="cross" width="17" height="17" class="modal__cross modal__cross-hover js-modal-close">
    </div>

    <h3 class="modal-rating__title">Оценка статьи</h3>

    <div class="rating">
        <div class="rating-item active" data-rate="1"></div>
        <div class="rating-item" data-rate="2"></div>
        <div class="rating-item" data-rate="3"></div>
        <div class="rating-item" data-rate="4"></div>
        <div class="rating-item" data-rate="5"></div>
    </div>

    <div class="rating__button">
        <button class="btn btn_form"><span>Потвердить</span></button>
    </div>

</div>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
