<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');

use Bitrix\Main\UI\Extension;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

Extension::load(['izifir.main', 'izifir.page404', 'izifir.blockuslug', 'izifir.blockkeisi']);
?>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Page404()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockuslug()
    })

    document.addEventListener('DOMContentLoaded', function(){
        new BX.Izifir.Blockkeisi()
    })
</script>

<div class="error_page">
    <div class="container">
        <div class="row">
            <p class="numb">4</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="210" height="212" viewBox="0 0 210 212" fill="none">
                <g filter="url(#filter0_ii_2801_37147)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82688 141.201C37.2524 152.638 65.2042 156.022 99.3149 153.383C156.64 149.187 114.814 219.371 88.6892 210.166C52.2774 198.999 22.7689 185.599 3.27713 158.256C-1.52815 151.353 1.72049 139.238 8.82688 141.201Z" fill="url(#paint0_linear_2801_37147)"/>
                </g>
                <g filter="url(#filter1_ii_2801_37147)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M56.0479 102.669C60.2839 102.669 88.1887 97.0514 102.644 102.666C124.708 101.245 152.573 122.677 149.324 136.551C145.872 155.366 138.589 164.539 127.896 167.517C124.376 152.627 108.101 154.874 85.4964 156.363C59.3043 158.122 33.7639 150.804 9.46685 140.787C7.16573 125.898 14.5381 101.799 30.6318 102.669H56.0479Z" fill="url(#paint1_linear_2801_37147)"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M56.0479 102.669C60.2839 102.669 88.1887 97.0514 102.644 102.666C124.708 101.245 152.573 122.677 149.324 136.551C145.872 155.366 138.589 164.539 127.896 167.517C124.376 152.627 108.101 154.874 85.4964 156.363C59.3043 158.122 33.7639 150.804 9.46685 140.787C7.16573 125.898 14.5381 101.799 30.6318 102.669H56.0479Z" stroke="#6B133B" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M56.0479 102.669C60.2839 102.669 88.1887 97.0514 102.644 102.666C124.708 101.245 152.573 122.677 149.324 136.551C145.872 155.366 138.589 164.539 127.896 167.517C124.376 152.627 108.101 154.874 85.4964 156.363C59.3043 158.122 33.7639 150.804 9.46685 140.787C7.16573 125.898 14.5381 101.799 30.6319 102.669H56.0479Z" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <g filter="url(#filter2_ddddd_2801_37147)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M52.0781 68.7868C102.635 55.9276 142.295 60.1914 169.097 87.6695C180.332 95.7234 152.65 137.143 149.199 131.594C144.732 118.193 129.369 105.131 96.4085 102.356C72.9235 100.393 50.5892 103.1 29.473 102.085C25.1699 92.9461 39.9634 72.1031 52.0781 68.7191V68.7868Z" fill="url(#paint2_linear_2801_37147)"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M52.0781 68.7868C102.635 55.9276 142.295 60.1914 169.097 87.6695C180.332 95.7234 152.65 137.143 149.199 131.594C144.732 118.193 129.369 105.131 96.4085 102.356C72.9235 100.393 50.5892 103.1 29.473 102.085C25.1699 92.9461 39.9634 72.1031 52.0781 68.7191V68.7868Z" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                </g>
                <g filter="url(#filter3_ii_2801_37147)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7968 38.9416C118.053 16.8102 154.803 22.6984 185.191 42.1902C196.223 49.2289 196.764 58.7718 193.786 66.6903C186.883 85.1669 179.235 91.1904 171.249 92.4087C148.576 58.2303 104.449 56.4706 51.1172 68.7884C52.6738 56.1999 57.4791 45.3711 69.7968 38.9416Z" fill="url(#paint3_linear_2801_37147)"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7968 38.9416C118.053 16.8102 154.803 22.6984 185.191 42.1902C196.223 49.2289 196.764 58.7718 193.786 66.6903C186.883 85.1669 179.235 91.1904 171.249 92.4087C148.576 58.2303 104.449 56.4706 51.1172 68.7884C52.6738 56.1999 57.4791 45.3711 69.7968 38.9416Z" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <g filter="url(#filter4_ii_2801_37147)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M104.506 1.51385C140.241 -2.07318 157.29 14.0156 178 37.5005C139 20.0005 112.5 21.5005 70 38.5004C75.0083 22.4603 79.6002 9.63544 104.506 1.44617V1.51385Z" fill="url(#paint4_linear_2801_37147)"/>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M104.506 1.51385C140.241 -2.07318 157.29 14.0156 178 37.5005C139 20.0005 112.5 21.5005 70 38.5004C75.0083 22.4603 79.6002 9.63544 104.506 1.44617V1.51385Z" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82688 141.201C37.2524 152.638 65.2042 156.022 99.3149 153.383C156.64 149.187 114.814 219.371 88.6892 210.166C52.2774 198.999 22.7689 185.599 3.27713 158.256C-1.52815 151.353 1.72049 139.238 8.82688 141.201V141.201Z" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5304 144.176C35.2476 153.651 68.5394 161.687 97 159.5C144.83 156.024 109.932 214.167 88.1343 206.542C57.7537 197.29 23.1632 180.957 6.89995 158.305C2.89061 152.586 5.60115 142.55 11.5304 144.176Z" fill="url(#paint5_linear_2801_37147)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M52.6666 108.055C56.152 108.055 70 105.945 91 107.001C110.5 107.001 150.173 124.584 147.5 136C144.66 151.481 138.667 159.029 129.869 161.479C126.973 149.228 101.6 150.275 83 151.5C61.4488 152.948 34.3311 147.661 14.3391 139.419C12.4457 127.168 18.5118 107.339 31.754 108.055H52.6666Z" fill="url(#paint6_linear_2801_37147)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M51.2266 71.7166C92.8254 61.1359 144.82 69.2484 166.872 91.8577C176.116 98.4845 153.34 132.565 150.5 127.999C146.825 116.973 127.12 102.282 100 99.999C80.6763 98.3841 50.0014 99.9503 32.6268 99.115C29.0862 91.5952 41.2585 74.4453 51.2266 71.6609V71.7166Z" fill="url(#paint7_linear_2801_37147)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.5027 41.147C111.208 22.9371 156.629 26.4494 181.633 42.4875C190.71 48.279 193.583 59.1899 191.133 65.7054C185.453 80.9082 179.16 85.8644 172.589 86.8668C153.933 58.7444 102.5 52.9995 56.1328 65.7053C57.4136 55.3474 61.3675 46.4373 71.5027 41.147Z" fill="url(#paint8_linear_2801_37147)" stroke="white" stroke-width="0.287591" stroke-miterlimit="22.9256"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M106.211 3.63279C135.614 0.68134 151.46 11.1761 168.5 30.4997C138.763 17.246 103.849 19.1261 74 33.605C78.1209 20.4069 82.0069 11.2378 102.5 4.49955L106.211 3.63279Z" fill="url(#paint9_linear_2801_37147)"/>
                <defs>
                    <filter id="filter0_ii_2801_37147" x="-2" y="137.988" width="134.047" height="77.0117" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="4" dy="4"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.752941 0 0 0 0 0.716235 0 0 0 0 0.682353 0 0 0 0.5 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-3" dy="-3"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect1_innerShadow_2801_37147" result="effect2_innerShadow_2801_37147"/>
                    </filter>
                    <filter id="filter1_ii_2801_37147" x="5.91406" y="97.0273" width="147.812" height="74.668" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="4" dy="4"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.752941 0 0 0 0 0.716235 0 0 0 0 0.682353 0 0 0 0.5 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-3" dy="-3"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect1_innerShadow_2801_37147" result="effect2_innerShadow_2801_37147"/>
                    </filter>
                    <filter id="filter2_ddddd_2801_37147" x="7.57031" y="40.6934" width="202.336" height="129.555" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="12" dy="12"/>
                        <feGaussianBlur stdDeviation="13"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.933333 0 0 0 0 0.905882 0 0 0 0 0.886275 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="3" dy="3"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.878431 0 0 0 0 0.854902 0 0 0 0 0.839216 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect1_dropShadow_2801_37147" result="effect2_dropShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="0.5" dy="0.5"/>
                        <feGaussianBlur stdDeviation="3.75"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.833333 0 0 0 0 0.780671 0 0 0 0 0.743056 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect2_dropShadow_2801_37147" result="effect3_dropShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-2" dy="-2"/>
                        <feGaussianBlur stdDeviation="9.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect3_dropShadow_2801_37147" result="effect4_dropShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-0.5" dy="-0.5"/>
                        <feGaussianBlur stdDeviation="0.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect4_dropShadow_2801_37147" result="effect5_dropShadow_2801_37147"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect5_dropShadow_2801_37147" result="shape"/>
                    </filter>
                    <filter id="filter3_ii_2801_37147" x="47.9531" y="21.627" width="151.523" height="74.9375" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="4" dy="4"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.752941 0 0 0 0 0.716235 0 0 0 0 0.682353 0 0 0 0.5 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-3" dy="-3"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect1_innerShadow_2801_37147" result="effect2_innerShadow_2801_37147"/>
                    </filter>
                    <filter id="filter4_ii_2801_37147" x="66.7734" y="-2.13086" width="115.773" height="44.877" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="4" dy="4"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.752941 0 0 0 0 0.716235 0 0 0 0 0.682353 0 0 0 0.5 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_2801_37147"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dx="-3" dy="-3"/>
                        <feGaussianBlur stdDeviation="3"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 0 0.979167 0 0 0 1 0"/>
                        <feBlend mode="normal" in2="effect1_innerShadow_2801_37147" result="effect2_innerShadow_2801_37147"/>
                    </filter>
                    <linearGradient id="paint0_linear_2801_37147" x1="63.8386" y1="139.871" x2="63.8386" y2="211" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFAF5"/>
                        <stop offset="0.260417" stop-color="#FFF6EF"/>
                        <stop offset="0.988213" stop-color="#FFFAF6"/>
                        <stop offset="1" stop-color="#F6EBE2"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_2801_37147" x1="78.5637" y1="99.0972" x2="78.5637" y2="167.517" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFAF5"/>
                        <stop offset="0.260417" stop-color="#FFF6EF"/>
                        <stop offset="0.988213" stop-color="#FFFAF6"/>
                        <stop offset="1" stop-color="#F6EBE2"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_2801_37147" x1="99.4681" y1="60.7166" x2="99.4681" y2="132.103" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFAF5"/>
                        <stop offset="0.260417" stop-color="#FFF6EF"/>
                        <stop offset="0.988213" stop-color="#FFFAF6"/>
                        <stop offset="1" stop-color="#F6EBE2"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_2801_37147" x1="122.451" y1="23.6922" x2="122.451" y2="92.4087" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFAF5"/>
                        <stop offset="0.260417" stop-color="#FFF6EF"/>
                        <stop offset="0.988213" stop-color="#FFFAF6"/>
                        <stop offset="1" stop-color="#F6EBE2"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear_2801_37147" x1="123.419" y1="0.41548" x2="123.419" y2="38.5004" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFAF5"/>
                        <stop offset="0.260417" stop-color="#FFF6EF"/>
                        <stop offset="0.988213" stop-color="#FFFAF6"/>
                        <stop offset="1" stop-color="#F6EBE2"/>
                    </linearGradient>
                    <linearGradient id="paint5_linear_2801_37147" x1="107.496" y1="196.471" x2="5.24558" y2="150.307" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E23585"/>
                        <stop offset="1" stop-color="#FF9A5C"/>
                    </linearGradient>
                    <linearGradient id="paint6_linear_2801_37147" x1="14.2798" y1="134.785" x2="132.227" y2="134.785" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFE8D3"/>
                        <stop offset="1" stop-color="#FF9861"/>
                    </linearGradient>
                    <linearGradient id="paint7_linear_2801_37147" x1="31.7685" y1="94.9067" x2="149.709" y2="94.9067" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF9A5C"/>
                        <stop offset="1" stop-color="#E02D88"/>
                    </linearGradient>
                    <linearGradient id="paint8_linear_2801_37147" x1="55" y1="57.864" x2="173.671" y2="57.864" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFE8D3"/>
                        <stop offset="1" stop-color="#FF9A5C"/>
                    </linearGradient>
                    <linearGradient id="paint9_linear_2801_37147" x1="74" y1="18.3021" x2="156.52" y2="27.3976" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF9A5C"/>
                        <stop offset="1" stop-color="#E33784"/>
                    </linearGradient>
                </defs>
            </svg>
            <p class="numb">4</p>
        </div>
        <p>Похоже, мы не можем найти нужную вам страницу.</p>
        <div class="error_page__button">
            <a href="/" class="btn"><span>На главную</span></a>
            <a href="" class="btn"><span>Контакты</span></a>
        </div>
    </div>
</div>

<div class="uslugi">
    <div class="container">
        <h2 class="uslugi__title">Цены</h2>
        <p class="uslugi__text">Создаем сайты с качественной адаптивной версткой и авторским дизайном, которые легко ранжируются поисковиком и увеличивают конверсию.</p>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_1">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_1').style.display='block';document.getElementById('card_1').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_1">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_1').style.display='none';
        document.getElementById('card_1').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_2">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_2').style.display='block';
        document.getElementById('card_2').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_2">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_2').style.display='none';
        document.getElementById('card_2').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_3">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_3').style.display='block';
        document.getElementById('card_3').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_3">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_3').style.display='none';
        document.getElementById('card_3').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_4">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_4').style.display='block';
        document.getElementById('card_4').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_4">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_4').style.display='none';
        document.getElementById('card_4').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_5">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_5').style.display='block';
        document.getElementById('card_5').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_5">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_5').style.display='none';
        document.getElementById('card_5').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="uslugi__item card_wraper">
                    <div class="card" id="card_6">
                        <img src="/local/templates/.default/assets/close/content/us1.png" width="465px" height="200" alt="usluga" class="card__img">
                        <h4 class="item__title">Сайт-визитка</h4>
                        <div class="item__time">срок от 30 рабочих дней</div>
                        <div class="item__price">от 156 000</div>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_back_6').style.display='block';
        document.getElementById('card_6').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_back_6">
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
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_back_6').style.display='none';
        document.getElementById('card_6').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_all uslugi__button">
                <button class="btn btn_but">
                    <span>Показать все</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="keisi">
    <div class="container">
        <h2 class="keisi__title">Кейсы</h2>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card" id="card_k_1">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_k_back_1').style.display='block';document.getElementById('card_k_1').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_k_back_1">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_k_back_1').style.display='none';
        document.getElementById('card_k_1').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper" id="card_k_2">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                        <div class="item__button item__button_open">
                            <button class="btn" onclick="document.getElementById('card_k_back_2').style.display='block';document.getElementById('card_k_2').style.display='none';"><span>Подробнее</span></button>
                        </div>
                    </div>
                    <div class="card card_back" id="card_k_back_2">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                        <div class="item__button item__button_close">
                            <button class="btn" onclick="document.getElementById('card_k_back_2').style.display='none';
        document.getElementById('card_k_2').style.display='block';">
                                <img src="/local/templates/.default/assets/img/icons/cross_qa.svg" alt="cross-close" width="17" height="17">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="keisi__item card_wraper">
                    <div class="card">
                        <img src="/local/templates/.default/assets/img/content/keis-1.png" width="465px" height="270" alt="keis" class="card__img">
                        <h4 class="item__title_preview">ВЕНТ365 Группа компаний занимается вентиляцией</h4>
                        <p class="item__text_preview">Композитные панели для вашего фавсада Композитные панели для вашего фавсада Композитные панели для вашего фавсада</p>
                    </div>
                    <div class="card card_back">
                        <h4 class="item__title">FASADUG</h4>
                        <p class="item__category">Создание сайта</p>
                        <div class="item__text">
                            <p>Разработка логотипа</p>
                            <p>Анализ конкурентной среды</p>
                            <p>Базовая SEO оптимизация</p>
                            <p>Настройка контекстной рекламы</p>
                            <p>Наполнение сайта (копирайтинг)</p>
                        </div>
                        <div class="item__buttons">
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Перейти к кейсу</span>
                                </a>
                            </div>
                            <div class="buttons__item">
                                <a href="" class="item__link">
                                    <span>Заказать</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_all">
                <button class="btn btn_but">
                    <span>Показать все</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
