import './style/style.scss'
import {Swiper} from "izifir.swiper"

export class Review
{
	constructor()
	{
		this.swiper = Swiper.init('.swiper-review', {
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1.15,
					spaceBetween: 20
				},
				// when window width is >= 640px
				768: {
					slidesPerView: 1.2,
					spaceBetween: 20
				},
				1000: {
					slidesPerView: 1,
					// spaceBetween: 30
				},
			}
		});
	}
}