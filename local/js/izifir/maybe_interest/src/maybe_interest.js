import './style/style.scss';
import {Swiper} from "izifir.swiper"

export class MaybeInterest
{
	constructor()
	{
		this.swiper = Swiper.init('.swiper-maybe', {
			slidesPerView: 3,
			// spaceBetween: 10,
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1.2,
				},
				768: {
					slidesPerView: 2.2,
					spaceBetween: 10
				},
				1200: {
					slidesPerView: 3,
					spaceBetween: 10
				}
			}
		});
	}
}