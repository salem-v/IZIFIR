import './style/style.scss'
import 'main.core'

export class CaseAll
{
	constructor ()
	{
		this.container = document.querySelector('[data-container="testimonials"]')
		this.target = this.container.querySelector('[data-target]')
		this.pagination = this.container.querySelector('[data-pagination]')
		this.filter = document.querySelector('[data-filter]');

		document.addEventListener('before.smart.filter', this.beforeSmartFilter.bind(this))
		document.addEventListener('after.smart.filter', this.afterSmartFilter.bind(this))
	}

	beforeSmartFilter()
	{
		this.container.classList.add('f-loading');
		this.filter.classList.add('f-loading');
	}

	afterSmartFilter(evt = new CustomEvent('after.smart.filter'))
	{
		const url = evt.detail.FILTER_AJAX_URL.replaceAll('&amp;', '&')
		BX.ajax({
			url: url,
			dataType: 'html',
			onsuccess: (response) => {
				const fragment = document.implementation.createHTMLDocument();
				if (response.toLowerCase().indexOf('<!doctype') > -1) {
					fragment.documentElement.innerHTML = response;
				} else {
					fragment.body.innerHTML = response;
				}

				const container = fragment.querySelector('[data-container="testimonials"]')
				const filter = fragment.querySelector('[data-filter]');
				document.querySelector('[data-filter]').innerHTML = filter.innerHTML;

				if (container) {
					const target = container.querySelector('[data-target]')
					this.target.innerHTML = target.innerHTML

					const pagination = container.querySelector('[data-pagination]');
					if (pagination && this.pagination) {
						this.pagination.innerHTML = pagination.innerHTML;
					} else if (pagination && !this.pagination && this.target) {
						this.target.after(pagination);
					} else if (!pagination && this.pagination) {
						this.pagination.remove();
					}

					if (window.Smartfilter) {
						window.Smartfilter.initFilter();
					}

					if (window.AjaxPagination && window.AjaxPagination.length) {
						window.AjaxPagination.forEach((pager) => {
							if (pager.target && pager.target.id === 'block-content') {
								pager.init();
							}
						})
					}
				}

				this.container.classList.remove('f-loading', 'is-visible');
				this.filter.classList.remove('f-loading', 'is-visible');
			}
		})
	}
}