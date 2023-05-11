import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class Blockcomand
{
	constructor()
	{
		this.carousel = $('.swiper-comand').slick({
			slidesToShow: 5,
			rows: 2,
			loop: true,
			spaceBetween: 30,
			appendArrows: $('.comand__button'),
			prevArrow: '<button id="prev" type="button" class="btn btn__arrow"><img src="/local/templates/.default/assets/img/icons/arrow-prev.svg" alt="arrow" width="8px" height="17px"></button>',
			nextArrow: '<button id="next" type="button" class="btn btn__arrow"><img src="/local/templates/.default/assets/img/icons/arrow-next.svg" alt="arrow" width="8px" height="17px"></button>',
			responsive:[
				{
					breakpoint: 1260,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 360,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}
}