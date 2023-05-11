import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class AddCase
{
	constructor()
	{
		this.swiper = Swiper.init('.add_case_swiper', {
			slidesPerView: 1,
			loop: true,
			navigation: {
				nextEl: ".swiper-case-next",
				prevEl: ".swiper-case-prev",
			},
		});
	}
}