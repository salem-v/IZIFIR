import './style/style.scss';
import {Swiper} from "izifir.swiper"
export class Advantage
{
	constructor()
	{
		this.swiper = Swiper.init('.advantage-swiper', {
			slidesPerView: 3,
			loop: false,
			navigation: {
				nextEl: ".adv-button-next",
				prevEl: ".adv-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1.2,
				},
				640: {
					slidesPerView: 1.5,
				},
				768: {
					slidesPerView: 2.2,
				},
				1200: {
					slidesPerView: 3.2,
				},
				1400: {
					slidesPerView: 4,
				}
			}
		});
	}
}