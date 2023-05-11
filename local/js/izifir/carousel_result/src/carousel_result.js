import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper";

export class CarouselResult
{
	constructor()
	{
		this.swiper = Swiper.init('.swiper_result', {
			slidesPerView: 2,
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 1,
				},
				1230: {
					slidesPerView: 2,
					spaceBetween: 30
				}
			}
		});
	}
}