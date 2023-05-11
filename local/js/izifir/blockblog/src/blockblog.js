import './style/style.scss';
import 'local/js/izifir/card/src/style/style.scss';
import {Swiper} from "izifir.swiper"

export class Blockblog
{
	constructor(options = {name: 'Blockblog'})
	{
		this.swiper = Swiper.init('.swiper-blog', {
			slidesPerView: 5,
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
				// when window width is >= 640px
				768: {
					slidesPerView: 2,
					// spaceBetween: 30
				},
				1000: {
					slidesPerView: 3,
					// spaceBetween: 30
				},
				1200: {
					slidesPerView: 3,
					// spaceBetween: 30
				}
			}
		});
	}
}
