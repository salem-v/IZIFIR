import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class Principles
{
	constructor()
	{
		this.swiper = Swiper.init('.principles_swiper', {
			slidesPerView: 4,
			spaceBetween: 30,
			loop: true,
			navigation: {
				nextEl: ".swiper-but-next",
				prevEl: ".swiper-but-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1.3,
					navigation: false,
				},
				// when window width is >= 640px
				768: {
					slidesPerView: 2.5,
					navigation: false,
				},
				1000: {
					slidesPerView: 3.5,
					navigation: false,
				},
				1200: {
					slidesPerView: 4,
					// spaceBetween: 30
				}
			}
		});
	}
}