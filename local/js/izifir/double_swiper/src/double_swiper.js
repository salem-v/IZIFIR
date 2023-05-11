import './style/style.scss'
import 'main.core'
import {Swiper} from "izifir.swiper"

export class DoubleSwiper
{
	constructor()
	{
		this.sliderRow = document.querySelectorAll('.swiper-goal-case');

		if (this.sliderRow.length) {
			[].forEach.call(this.sliderRow, (slider, key) => {
				slider.id = 'slider_' + key;
				const arrowsRoot = slider.parentNode.querySelector('.double_swiper__button');
				const arrows = {
					prev: arrowsRoot.querySelector('.swiper-button-prev'),
					next: arrowsRoot.querySelector('.swiper-button-next'),
				}
				this.swiperFirst('#' + slider.id, arrows);
			})
		}

		this.sliderColumn = document.querySelectorAll('.swiper-goal-case-text')

		if (this.sliderColumn.length) {
			[].forEach.call(this.sliderColumn, (slides, key) => {
				slides.id = 'slides_' + key;
				const arrowsRoot = slides.parentNode.querySelector('.double_swiper__button_vertikal');
				const arrows = {
					prev: arrowsRoot.querySelector('.swiper-button-prev_vert'),
					next: arrowsRoot.querySelector('.swiper-button-next_vert'),
				}
				this.swiperSecond('#' + slides.id, arrows);
			})
		}
	}

	swiperFirst(slider ,arrows)
	{
		this.swiper = Swiper.init(slider, {
			slidesPerView: 1,
			loop: true,
			navigation: {
				nextEl: arrows.next,
				prevEl: arrows.prev,
			},
		});
	}

	swiperSecond (slides, arrows)
	{
		this.swiper = Swiper.init(slides, {
			slidesPerView: 3,
			direction: "vertical",
			loop: true,
			navigation: {
				nextEl: arrows.next,
				prevEl: arrows.prev,
			},
			breakpoints: {
				1: {
					slidesPerView: 1,
					direction: "horizontal"
				},
				400: {
					slidesPerView: 1,
					direction: "horizontal"
				},
				768: {
					slidesPerView: 3,
					direction: "vertical"
				},
				1200: {
					slidesPerView: 3,
					direction: "vertical"
				}
			}
		});
	}
}