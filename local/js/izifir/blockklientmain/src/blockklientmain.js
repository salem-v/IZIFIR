import './style/style.scss'
import {Swiper} from "izifir.swiper"

export class Blockklientmain
{
	constructor()
	{
		this.swiper = Swiper.init('.swiper-container', {
			slidesPerView: 2,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 1,
				disableOnInteraction: true
			},
			freeMode: true,
			speed: 5000,
			freeModeMomentum: false,
			breakpoints: {
				320: {
					slidesPerView: 2,
				},
				480: {
					slidesPerView: 3,
				},
				768: {
					slidesPerView: 5,
				},
				1000: {
					slidesPerView: 7,
				}
			}
		});
		if (this.swiper[1])
			this.swiper[1].changeLanguageDirection('rtl')
	}
}