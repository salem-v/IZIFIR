import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class Command
{
	constructor()
	{
		this.swiper = Swiper.init('.command_swiper', {
			slidesPerView: 3,
			spaceBetween: 30,
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
					slidesPerView: 2,
					spaceBetween: 30
				},
				920: {
					slidesPerView: 3,
					spaceBetween: 30
				}
			}
		});
	}
}