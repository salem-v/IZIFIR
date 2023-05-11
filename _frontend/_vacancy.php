<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.mainstages', 'izifir.text_banner', 'izifir.form', 'izifir.map', 'izifir.blockstepwork', 'izifir.vacancy', 'izifir.steps_apply', 'izifir.form_service', 'izifir.vacancy_contact', 'izifir.map', 'izifir.contact']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Form()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.TextBanner()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockstepwork()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Vacancy()
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
        new BX.Izifir.MainStages()
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
        <h1>Вакансии</h1>
    </div>
</div>

<div class="text_banner text_banner_overflow">
    <div class="container">
        <div class="col-xxl-8 col-12 text_banner__text">
            <p>Даже в самое непростое время мы растем и развиваемся, постоянно ищем новых ребят с крутыми скиллами. Нам нужны креативные дизайнеры, умеющие думать программисты, дотошливые тестировщики, а также руководители проектов. И еще много интересных людей.</p>
        </div>
    </div>
</div>

<div class="main-stages block-indent">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <h2 class="main-stages__title">
                    Этапы работы                        </h2>
                <div class="main-stages__content">
                    <div class="main__stages__text">
                        <b>Обсуждение проекта</b>
                        <br>
                        <br>
                        <p>Погрузимся в специфику бизнеса вашей компании и выясним предназначение сайта. Проведем анализ конкурентов, целевой аудитории, особенностей услуг. Определим цели и задачи проекта. </p>                            </div>

                    <picture class="main-stages__pic">
                        <source type="image/webp" srcset="/upload/resize_cache/iblock/1ee/518_415_2/l4yffkws0vj1uu5s3fao1jfm97sp3jq9.webp">
                        <img src="/upload/resize_cache/iblock/1ee/518_415_2/l4yffkws0vj1uu5s3fao1jfm97sp3jq9.png" alt="" width="518" height="415" class="main-stages__img" loading="lazy">
                    </picture>
                </div>
            </div>
            <div class="col-lg col-12">
                <div class="main-stages__schema">
                    <div class="main-stages__container">
                        <svg width="1263" height="974" viewBox="0 0 1263 974" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M170.89 318.216C144.46 327.007 120.179 329.15 88.7833 310.234C55.9845 289.23 32.96 237.618 65.7575 187.858C94.6538 146.899 150.495 141.011 183.604 163.781C213.767 184.526 221.879 207.56 224.758 234.973C226.811 254.521 270.634 288.844 302.103 276.179C303.318 275.69 304.215 275.261 305.424 274.784C318.266 268.27 332.192 264.179 346.449 262.668C367.573 259.415 389.371 261.93 414.154 275.832C416.894 277.296 419.599 278.876 422.26 280.58C476.71 315.448 492.435 387.625 457.384 441.791C434.379 477.34 395.22 496.297 355.628 495.27C334.709 494.819 314.186 489.068 295.303 476.976C294.257 476.306 288.739 472.329 287.545 471.413C254.586 446.144 240.713 411.691 241.22 373.958C241.239 372.55 241.162 370.353 241.162 370.353C237.176 322.013 196.657 307.958 170.89 318.216Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter1_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M441.452 347.19C449.473 373.74 450.881 397.949 430.911 428.585C408.8 460.553 356.235 481.862 307.246 447.723C266.978 417.734 262.776 362.029 286.672 329.807C308.441 300.452 331.834 293.093 359.466 291.072C379.17 289.631 415.002 247.11 403.243 215.431C402.789 214.209 402.385 213.304 401.944 212.087C395.792 199.118 392.11 185.145 391.029 170.922C388.41 149.818 391.605 128.221 406.335 104.006C407.89 101.326 409.56 98.6846 411.354 96.0913C448.06 43.0216 521.063 29.6015 574.411 66.1167C609.423 90.082 627.268 129.601 625.021 168.937C623.926 189.723 617.517 209.953 604.787 228.358C604.082 229.377 599.917 234.741 598.96 235.901C572.559 267.897 537.515 280.633 499.618 278.971C498.204 278.909 495.994 278.918 495.994 278.918C447.302 281.397 431.936 321.254 441.452 347.19Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter2_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M532.938 244.868C505.901 251.587 481.525 251.845 451.704 230.557C420.647 207.079 401.727 153.842 438.316 106.771C470.327 68.1711 526.46 66.6212 557.688 91.8844C586.138 114.9 592.424 138.492 593.151 166.045C593.67 185.692 634.676 223.302 667.04 213.11C668.289 212.717 669.217 212.359 670.46 211.977C683.772 206.476 697.976 203.475 712.309 203.072C733.623 201.463 755.158 205.657 778.778 221.435C781.396 223.106 783.97 224.89 786.489 226.795C838.048 265.771 848.082 338.946 808.902 390.235C783.188 423.897 742.665 439.766 703.273 435.679C682.453 433.612 662.441 426.29 644.561 412.773C643.571 412.025 638.381 407.632 637.262 406.627C606.378 378.884 595.241 343.462 598.697 305.883C598.826 304.48 598.921 302.284 598.921 302.284C598.726 253.782 559.429 236.634 532.938 244.868Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter3_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M635.353 356.955C625.87 330.886 623.119 306.792 641.356 275.104C661.658 241.97 712.959 217.804 763.77 249.198C805.641 276.928 812.931 332.317 790.862 365.803C770.757 396.31 747.809 404.943 720.331 408.48C700.737 411.002 667.322 455.427 680.823 486.412C681.344 487.608 681.797 488.489 682.306 489.68C689.168 502.291 693.621 516.04 695.49 530.182C699.278 551.109 697.287 572.849 683.925 597.837C682.521 600.598 681.001 603.327 679.354 606.015C645.651 661.022 573.505 678.434 518.211 644.908C481.92 622.904 461.908 584.426 461.967 545.027C461.905 524.212 467.18 503.66 478.868 484.584C479.515 483.528 483.377 477.943 484.268 476.733C508.851 443.334 543.134 428.691 581.065 428.267C582.48 428.252 584.686 428.121 584.686 428.121C633.167 422.969 646.295 382.328 635.353 356.955Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter4_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M491.504 544.02C494.026 516.41 501.805 493.428 531.828 472.423C564.336 450.977 621.098 450.73 653.735 500.594C679.837 543.369 662.831 596.607 628.571 617.626C597.36 636.774 572.897 634.914 546.504 626.527C527.683 620.547 478.486 646.687 477.507 680.442C477.469 681.745 477.504 682.735 477.457 684.028C478.296 698.344 476.469 712.674 472.135 726.27C466.645 746.821 455.576 765.67 432.824 782.664C430.376 784.573 427.835 786.403 425.198 788.143C371.23 823.745 298.468 809.084 262.68 755.397C239.192 720.162 237.468 676.873 254.314 641.215C263.13 622.338 276.667 605.95 295.383 593.604C296.42 592.92 302.297 589.491 303.62 588.77C340.12 568.892 377.409 570.09 411.942 585.706C413.231 586.289 415.284 587.101 415.284 587.101C461.387 602.884 490.599 571.614 491.504 544.02Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter5_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M401.077 772.512C375.537 783.604 351.543 787.885 318.582 771.819C284.037 753.798 256.493 704.425 284.716 651.963C309.839 608.611 364.933 597.81 399.945 617.563C431.842 635.559 441.979 657.785 447.296 684.836C451.087 704.125 497.802 734.438 528.015 719.041C529.182 718.447 530.037 717.94 531.198 717.359C543.408 709.735 556.914 704.429 570.98 701.663C591.729 696.556 613.666 697.134 639.592 708.791C642.453 710.007 645.288 711.34 648.091 712.802C705.439 742.72 727.55 813.221 697.476 870.271C677.738 907.713 640.427 930.056 600.9 932.534C580.024 933.934 559.067 930.02 539.179 919.645C538.078 919.07 532.227 915.597 530.955 914.79C495.869 892.535 478.974 859.444 476.108 821.816C476.001 820.412 475.728 818.23 475.728 818.23C467.439 770.433 425.825 760.016 401.077 772.512Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter6_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M677.221 840.549C668.241 866.793 655.247 887.31 621.099 900.701C584.432 913.939 529.204 900.898 509.274 844.796C494.018 797.113 523.134 749.348 561.402 736.935C596.266 725.627 619.602 733.16 643.272 747.487C660.151 757.703 714.149 743.808 723.082 711.229C723.426 709.971 723.626 709.001 723.978 707.756C726.546 693.645 731.711 680.144 739.138 667.944C749.333 649.254 764.549 633.524 790.68 622.33C793.511 621.048 796.413 619.863 799.388 618.789C860.259 596.814 927.513 628.089 949.603 688.644C964.101 728.386 955.542 770.864 930.737 801.58C917.705 817.864 900.673 830.625 879.563 838.245C878.394 838.667 871.87 840.625 870.414 841.016C830.238 851.797 794.278 841.906 764.407 818.648C763.292 817.78 761.488 816.51 761.488 816.51C720.41 790.383 684.624 813.94 677.221 840.549Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter7_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M928.184 714.784C929.905 742.454 925.725 766.344 899.256 791.641C870.398 817.749 814.332 826.568 774.463 782.212C742.134 743.875 750.816 688.685 781.47 662.736C809.397 639.095 833.861 637.238 861.228 641.541C880.743 644.609 925.38 611.341 921.195 577.829C921.034 576.535 920.848 575.562 920.698 574.277C917.682 560.254 917.301 545.814 919.51 531.721C921.799 510.579 929.863 490.277 949.757 470.043C951.885 467.786 954.117 465.594 956.458 463.476C1004.37 420.135 1078.52 423.635 1122.09 471.293C1150.68 502.572 1159 545.098 1147.79 582.887C1141.95 602.877 1131.08 621.12 1114.46 636.15C1113.54 636.982 1108.26 641.26 1107.06 642.172C1074.02 667.333 1036.98 671.781 1000.46 661.563C999.097 661.182 996.944 660.689 996.944 660.689C948.966 652.053 924.866 687.373 928.184 714.784Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter8_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1093.93 487.926C1113.16 507.984 1125.44 528.933 1121.58 565.245C1116.42 603.708 1079.26 646.389 1020.04 638.023C970.487 629.426 941.38 581.655 948.015 542.161C954.06 506.182 971.566 489.082 995.282 474.831C1012.19 464.668 1024.78 410.615 999.875 387.669C998.914 386.783 998.142 386.158 997.194 385.272C985.806 376.481 976.161 365.682 968.722 353.489C956.779 335.853 949.796 315.158 951.905 286.933C952.071 283.843 952.357 280.736 952.776 277.615C961.341 213.763 1020.32 168.908 1084.51 177.429C1126.63 183.021 1160.53 210.215 1176.44 246.298C1184.92 265.324 1188.42 286.248 1185.45 308.392C1185.29 309.618 1184.01 316.277 1183.69 317.742C1174.72 358.164 1149.27 385.307 1114.73 400.898C1113.44 401.48 1111.47 402.484 1111.47 402.484C1069.19 426.632 1073.63 469.09 1093.93 487.926Z" fill="#FFFDFB"></path>
                            </g>
                            <g filter="url(#filter9_ddddd_2601_35372)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1150.5 335.147C1136.52 359.131 1119.74 376.715 1083.61 383.186C1045.05 389.015 993.465 365.455 984.978 306.555C979.416 256.822 1017.38 215.663 1057.35 210.955C1093.77 206.667 1115.17 218.604 1135.55 237.27C1150.09 250.58 1205.78 247.487 1220.96 217.282C1221.55 216.116 1221.93 215.204 1222.52 214.051C1227.82 200.715 1235.55 188.484 1245.24 177.969C1258.92 161.63 1276.94 149.173 1304.77 143.293C1307.8 142.588 1310.88 141.992 1314 141.52C1378.03 131.844 1437.81 175.629 1447.54 239.317C1453.92 281.116 1437.16 321.1 1406.78 346.381C1390.79 359.808 1371.57 368.999 1349.37 372.354C1348.14 372.54 1341.36 373.188 1339.85 373.287C1298.33 376.022 1265.02 359.31 1240.31 330.677C1239.39 329.608 1237.87 328.011 1237.87 328.011C1202.74 294.379 1163.01 310.499 1150.5 335.147Z" fill="#FFFDFB"></path>
                            </g>
                            <defs>
                                <filter id="filter0_ddddd_2601_35372" x="28.8535" y="129.59" width="485.205" height="403.721" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter1_ddddd_2601_35372" x="250.994" y="24.5566" width="412.215" height="478.568" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter2_ddddd_2601_35372" x="397.264" y="53.9805" width="473.541" height="420.328" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter3_ddddd_2601_35372" x="440.967" y="213.594" width="400.072" height="486.373" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter4_ddddd_2601_35372" x="222.135" y="437.713" width="482.291" height="407.875" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter5_ddddd_2601_35372" x="252.043" y="587.053" width="496.869" height="383.756" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter6_ddddd_2601_35372" x="484.139" y="590.762" width="510.529" height="352.701" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter7_ddddd_2601_35372" x="732.986" y="412.127" width="457.609" height="439.225" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter8_ddddd_2601_35372" x="926.078" y="155.391" width="298.414" height="521.693" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                                <filter id="filter9_ddddd_2601_35372" x="963.434" y="119.18" width="523.449" height="302.867" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="12" dy="12"></feOffset>
                                    <feGaussianBlur stdDeviation="13"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="3" dy="3"></feOffset>
                                    <feGaussianBlur stdDeviation="3"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect1_dropShadow_2601_35372" result="effect2_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="0.5" dy="0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="3.75"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect2_dropShadow_2601_35372" result="effect3_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-2" dy="-2"></feOffset>
                                    <feGaussianBlur stdDeviation="9.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect3_dropShadow_2601_35372" result="effect4_dropShadow_2601_35372"></feBlend>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dx="-0.5" dy="-0.5"></feOffset>
                                    <feGaussianBlur stdDeviation="0.5"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="effect4_dropShadow_2601_35372" result="effect5_dropShadow_2601_35372"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2601_35372" result="shape"></feBlend>
                                </filter>
                            </defs>
                        </svg>

                        <div class="main-stages__point main-stages__point--ft">
                            <div class="main-stages__num">
                                <span class="main-stages__index">1</span>
                                <span class="main-stages__name">Обсуждение проекта</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Погрузимся в специфику бизнеса вашей компании и выясним предназначение сайта. Проведем анализ конкурентов, целевой аудитории, особенностей услуг. Определим цели и задачи проекта.                                             </div>
                            </div>
                        </div>
                        <div class="main-stages__point main-stages__point--sc">
                            <div class="main-stages__num">
                                <span class="main-stages__index">2</span>
                                <span class="main-stages__name">Проектирование </span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Составляем ТЗ и разрабатываем проектную документацию для сайта: определяем функциональность ресурса, алгоритмы работы, технические особенности с учетом пожеланий клиента.                                             </div>
                            </div>
                        </div>
                        <div class="main-stages__dot main-stages__dot--th"></div>
                        <div class="main-stages__point main-stages__point--fo">
                            <div class="main-stages__num">
                                <span class="main-stages__index">3</span>
                                <span class="main-stages__name">Этап 3</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Nibh nulla enim dapibus nisl primis cras ante bibendum sagittis, et interdum hendrerit class mollis ullamcorper tempus quisque, rhoncus viverra commodo                                            </div>
                            </div>
                        </div>
                        <div class="main-stages__point main-stages__point--fv">
                            <div class="main-stages__num">
                                <span class="main-stages__index">4</span>
                                <span class="main-stages__name">Этап 4</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit nostra cursus, lacinia et luctus elementum per orci urna senectus facilisis, quam eu gravida fermentum varius condimentum inceptos ad                                            </div>
                            </div>
                        </div>
                        <div class="main-stages__dot main-stages__dot--sx"></div>
                        <div class="main-stages__point main-stages__point--sv">
                            <div class="main-stages__num">
                                <span class="main-stages__index">5</span>
                                <span class="main-stages__name">Этап 5</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis proin, cursus felis molestie sed nulla quisque tincidunt accumsan facilisi faucibus, quam sollicitudin id nostra phasellus curabitur varius ac lacinia                                            </div>
                            </div>
                        </div>
                        <div class="main-stages__point main-stages__point--et">
                            <div class="main-stages__num">
                                <span class="main-stages__index">6</span>
                                <span class="main-stages__name">Этап 6</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque, diam dictumst cubilia hendrerit magnis aenean suscipit porta, lacus vestibulum praesent ultrices nisl nibh ultricies. Libero pretium nec habitant hac taciti purus tempor parturient commodo augue inceptos dui malesuada nisi, egestas elementum fermentum dictum mauris sem fames at ac vestibulum porta lacinia. Ad nam cubilia sem etiam aliquet nisl, vitae sollicitudin donec vehicula iaculis potenti, in duis sed imperdiet consequat.                                            </div>
                            </div>
                        </div>
                        <div class="main-stages__dot main-stages__dot--ni"></div>
                        <div class="main-stages__point main-stages__point--tn">
                            <div class="main-stages__num">
                                <span class="main-stages__index">7</span>
                                <span class="main-stages__name">Этап 7</span>
                            </div>

                            <div class="main-stages__popup">
                                <div class="main-stages__popup-inner">
                                    Habitant sociosqu fames metus nascetur magnis sapien porttitor vitae gravida nisl, magna elementum netus aptent a conubia iaculis vestibulum pretium                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="step_work">
    <h2>Комфортная работа с нами</h2>
    <div class="row">
        <div class="col-xl-3 col-12">
            <p class="step_work__text">Мы знаем, что хороший специалист стоит дорого и платим за умение круто решать поставленные задачи. Чем больше опыта, тем выше зарплата. Отпуска, больничные и официальное трудоустройство.</p>
            <picture>
                <img src="/local/templates/.default/assets/img/content/steps.png" alt="steps-img" width="520px" height="415px" class="step_work__img">
            </picture>
        </div>
        <div class="col-xl-9 col-12 step_work__shema">
            <div class="count" id="f">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">1</button>
                <div class="dropdown-menu">
                    <p>Продумываем все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Как говорится, тестов много не бывает.</p>
                </div>
            </div>
            <div class="count" id="s">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">2</button>
                <div class="dropdown-menu">
                    <p>Создаем дизайн, который нравится посетителям. Ведь у вас есть всего 5 секунд, чтобы удержать клиента на сайте.</p>
                </div>
            </div>
            <div class="count" id="t">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">3</button>
                <div class="dropdown-menu">
                    <p>Грамотно верстаем, программируем и наполняем смыслом до мелочей. Каждое решение подходит для ваших бизнес-задач, сайты красивые, а приложения удобные.</p>
                </div>
            </div>
            <div class="count" id="fo">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">4</button>
                <div class="dropdown-menu">
                    <p>Продумываем все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Как говорится, тестов много не бывает.</p>
                </div>
            </div>
            <div class="count" id="fi">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">5</button>
                <div class="dropdown-menu">
                    <p>Продумываем все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Как говорится, тестов много не бывает.</p>
                </div>
            </div>
            <div class="count" id="si">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">6</button>
                <div class="dropdown-menu">
                    <p>Продумываем все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Как говорится, тестов много не бывает.</p>
                </div>
            </div>
            <div class="count" id="se">
                <button class="numd" type="button" data-bs-toggle="dropdown" aria-expanded="false">7</button>
                <div class="dropdown-menu">
                    <p>Продумываем все до мелочей: от идеи до реализации. Обязательно все тестируем, смотрим и еще раз тестируем. Как говорится, тестов много не бывает.</p>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="vacancy block-indent">
    <div class="container">
        <h2>Актуальные вакансии</h2>
        <div class="row m-t-60">
            <div class="card_wraper col-xxl-4 col-md-6 col-12">
                <div class="card card__static">
                    <div class="card__title">
                        <h3>Junior front-end разработчик</h3>
                    </div>
                    <div class="row">
                        <div class="card__time">
                            <p>Полный рабочий день</p>
                        </div>
                        <div class="card__time">
                            <p>Можно удалённо</p>
                        </div>
                    </div>
                    <div class="card__request">
                        <h4 class="card__request_title">Требования:</h4>
                        <div class="card__request_item">
                            <p>Владение базовыми языками программирования (CSS, HTML)</p>
                        </div>
                        <div class="card__request_item">
                            <p>Навыки JS, создания сайтов</p>
                        </div>
                        <div class="card__request_item">
                            <p>Знание английского для чтения документации</p>
                        </div>
                        <div class="card__request_item">
                            <p>Базовые знания редакторов графики: Figma, Adobe Photoshop</p>
                        </div>
                    </div>
                    <div class="card__data">
                        <p>01.01.2022</p>
                    </div>
                    <div class="card__button">
                        <a href="" class="btn"><span>Подробнее</span></a>
                    </div>
                </div>
            </div>
            <div class="card_wraper col-xxl-4 col-md-6 col-12">
                <div class="card card__static">
                    <div class="card__title">
                        <h3>Junior front-end разработчик</h3>
                    </div>
                    <div class="row">
                        <div class="card__time">
                            <p>Полный рабочий день</p>
                        </div>
                        <div class="card__time">
                            <p>Можно удалённо</p>
                        </div>
                    </div>
                    <div class="card__request">
                        <h4 class="card__request_title">Требования:</h4>
                        <div class="card__request_item">
                            <p>Владение базовыми языками программирования (CSS, HTML)</p>
                        </div>
                        <div class="card__request_item">
                            <p>Навыки JS, создания сайтов</p>
                        </div>
                        <div class="card__request_item">
                            <p>Знание английского для чтения документации</p>
                        </div>
                        <div class="card__request_item">
                            <p>Базовые знания редакторов графики: Figma, Adobe Photoshop</p>
                        </div>
                    </div>
                    <div class="card__data">
                        <p>01.01.2022</p>
                    </div>
                    <div class="card__button">
                        <a href="" class="btn"><span>Подробнее</span></a>
                    </div>
                </div>
            </div>
            <div class="card_wraper col-xxl-4 col-md-6 col-12">
                <div class="card card__static">
                    <div class="card__title">
                        <h3>Junior front-end разработчик</h3>
                    </div>
                    <div class="row">
                        <div class="card__time">
                            <p>Полный рабочий день</p>
                        </div>
                        <div class="card__time">
                            <p>Можно удалённо</p>
                        </div>
                    </div>
                    <div class="card__request">
                        <h4 class="card__request_title">Требования:</h4>
                        <div class="card__request_item">
                            <p>Владение базовыми языками программирования (CSS, HTML)</p>
                        </div>
                        <div class="card__request_item">
                            <p>Навыки JS, создания сайтов</p>
                        </div>
                        <div class="card__request_item">
                            <p>Знание английского для чтения документации</p>
                        </div>
                    </div>
                    <div class="card__data">
                        <p>01.01.2022</p>
                    </div>
                    <div class="card__button">
                        <a href="" class="btn"><span>Подробнее</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="button_all">
            <button id="btn" class="btn btn_but">
                <span>Показать ещё</span>
            </button>
        </div>
    </div>
</div>

<div class="step_apply">
    <div class="container">
        <h2>Как к нам устроиться</h2>
        <div class="row m-t-60">
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_1.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 1</h4>
                    <div class="card__text">
                        <p>Ознакомиться с вакансией</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_2.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 2</h4>
                    <div class="card__text">
                        <p>Отправить резюме</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
                <div class="card card__static">
                    <picture><img src="/local/templates/.default/assets/img/content/apply_3.png" alt="aplly_for_job" width="100%" height="155px" class="card__img"></picture>
                    <h4 class="card__title">Шаг 3</h4>
                    <div class="card__text">
                        <p>Пройти этапы отбора</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-12 card_wraper">
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
    </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
