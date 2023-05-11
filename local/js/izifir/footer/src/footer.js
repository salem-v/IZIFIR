import './style/style.scss'
import './style/_mobile.scss'
import './style/_footer-mobile.scss'
import './style/_mobile-contacts.scss'

export class Footer
{
	constructor () {
		this.footer = document.querySelector('.footer__bottom')
		this.mobileMenu = document.querySelector('.footer-mobile')

		this.mobileContactsButton = document.querySelector('[data-mobile-contacts-toggle]')
		this.mobileContactsContainer = document.querySelector('[data-mobile-contacts]')

		if (this.mobileContactsButton) {
			this.mobileContactsButton.addEventListener('click', this.mobileContactsToggle.bind(this))
		}

		document.addEventListener('click', this.bodyClickHandler.bind(this))

		/*this.calculateMenu()
		window.addEventListener('scroll', this.calculateMenu.bind(this))*/
	}

	calculateMenu()
	{
		const footerClientRect = this.footer.getBoundingClientRect()
		const menuClientRect = this.mobileMenu.getBoundingClientRect()
		const currentScroll = window.pageYOffset + footerClientRect.top

		console.log(currentScroll)

		const menuBottom = menuClientRect.height + menuClientRect.top + window.pageYOffset

		if (menuBottom >= currentScroll) {
			this.mobileMenu.style.position = 'absolute'
			this.mobileMenu.style.bottom = currentScroll + 'px'
		} else {
			this.mobileMenu.style.position = 'fixed'
			this.mobileMenu.style.bottom = 0
		}
	}

	mobileContactsToggle(evt = new Event('click'))
	{
		evt.preventDefault()
		if (this.mobileContactsContainer) {
			if (this.mobileContactsContainer.classList.contains('is-open')) {
				this.mobileContactsContainer.classList.remove('is-open')
			} else {
				this.mobileContactsContainer.classList.add('is-open')
			}
		}
	}

	bodyClickHandler(evt = new Event('click'))
	{
		const el = evt.target || evt.currentTarget

		if (el && !el.closest('[data-mobile-contacts]') && !el.closest('[data-mobile-contacts-toggle]') && this.mobileContactsContainer.classList.contains('is-open')) {
			this.mobileContactsContainer.classList.remove('is-open')
		}
	}
}