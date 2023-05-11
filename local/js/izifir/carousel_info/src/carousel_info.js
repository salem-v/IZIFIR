import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class CarouselInfo
{
	constructor()
	{
		this.swiper = Swiper.init('.swiper_carousel_info', {
			slidesPerView: 1.2,
			spaceBetween: 30,
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1.2,
				},
				// when window width is >= 640px
				768: {
					slidesPerView: 2.2,
					// spaceBetween: 30
				},
				1000: {
					slidesPerView: 3.2,
					// spaceBetween: 30
				},
				1200: {
					slidesPerView: 4,
					// spaceBetween: 30
				}
			}
		});
	}
}