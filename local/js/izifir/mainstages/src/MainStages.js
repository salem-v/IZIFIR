import './style/style.scss'

export class MainStages
{
	constructor ()
	{
		this.points = document.querySelectorAll('.main-stages__point')
		if (this.points.length) {
			[].forEach.call(this.points, point => {
				point.addEventListener('click', this.pointClickHandler.bind(this))
			})

			document.addEventListener('click', this.bodyClickHandler.bind(this))
		}
	}

	pointClickHandler(evt = new Event('click'))
	{
		const el = evt.currentTarget || evt.target
		if (el) {
			const isOpen = el.classList.contains('is-active')
			this.closeAllPoints()

			if (!isOpen) {
				const popup = el.querySelector('.main-stages__popup')
				const num = el.querySelector('.main-stages__num')

				el.classList.add('is-active')

				if (popup) {
					const documentWidth = document.body.clientWidth || document.documentElement.clientWidth
					const windowHeight = window.innerHeight
					const popupBox = popup.getBoundingClientRect();

					const pullRight = popupBox.right > documentWidth
					const pullBottom = popupBox.bottom > windowHeight

					if (pullRight) {
						popup.classList.add('pull-right')
					}

					if (pullBottom) {
						popup.classList.add('pull-bottom')
					}

					popup.classList.add('is-open')
				}

				if (num)
					num.classList.add('is-active')
			}
		}
	}

	closeAllPoints()
	{
		[].forEach.call(this.points, point => {
			const popup = point.querySelector('.main-stages__popup')
			const num = point.querySelector('.main-stages__num')

			if (popup) {
				popup.classList.remove('is-open')
				popup.classList.remove('pull-right')
				popup.classList.remove('pull-bottom')
			}

			if (num) {
				num.classList.remove('is-active')
			}

			point.classList.remove('is-active')
		})
	}

	bodyClickHandler(evt = new Event('click'))
	{
		const el = evt.target
		if (el && !el.closest('.main-stages__point')) {
			this.closeAllPoints()
		}
	}
}