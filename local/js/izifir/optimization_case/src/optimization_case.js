import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class OptimizationCase
{
	constructor()
	{
		this.swiper = Swiper.init('.optimization_swiper', {
			slidesPerView: 3,
			spaceBetween: 30,
			loop: true,
			navigation: {
				nextEl: ".swiper-opti-next",
				prevEl: ".swiper-opti-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1
				},
				600: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30
				}
			}
		});
	}
}