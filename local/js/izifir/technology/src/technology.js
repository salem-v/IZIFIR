import './style/style.scss'

export class Technology
{
	constructor(id)
	{
		this.id = id
		this.root = document.querySelector('[data-tabs="' + id + '"]')

		this.activeClass = 'is-active'

		if (this.root) {
			this.init()
		}
	}

	init()
	{
		this.tabs = this.root.querySelectorAll('[data-tab]')
		this.pages = this.root.querySelectorAll('[data-page]')

		if (this.tabs.length && this.pages.length) {
			this.tabs[0].classList.add(this.activeClass)
			this.pages[0].classList.add(this.activeClass)

			Array.prototype.forEach.call(this.tabs, tab => {
				tab.addEventListener('click', this.tabClickHandler.bind(this))
			})
		}
	}

	tabClickHandler(evt = new Event('click'))
	{
		evt.preventDefault()
		const tab = evt.currentTarget || evt.target

		if (tab && !tab.classList.contains(this.activeClass)) {
			const id = tab.dataset.tab;
			Array.prototype.forEach.call(this.tabs, t => {
				if (t.dataset.tab === id) {
					t.classList.add(this.activeClass)
				} else {
					t.classList.remove(this.activeClass)
				}
			})

			Array.prototype.forEach.call(this.pages, p => {
				if (p.dataset.page === id) {
					p.classList.add(this.activeClass)
				} else {
					p.classList.remove(this.activeClass)
				}
			})
		}
	}
}