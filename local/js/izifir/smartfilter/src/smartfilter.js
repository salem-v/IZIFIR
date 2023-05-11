import './style/style.scss'
import 'main.core'

export class Smartfilter
{
	constructor (selector)
	{
		this.root = document.querySelector(selector);
		this.sortItems = document.querySelectorAll('.smart-filter__sort');

		this.container = document.querySelector('[data-container]')
		this.target = this.container.querySelector('[data-target]')
		this.pagination = this.container.querySelector('[data-pagination]')
		this.filter = document.querySelector('[data-filter]');

		if (this.root) {
			this.initFilter()
		}

		if (this.sortItems.length !== 0) {
			this.initSort()
		}

	}

	initSort()
	{
		this.sorts = document.querySelectorAll('.smart-filter__sort')

		if (this.sorts.length) {
			[].forEach.call(this.sorts, (sort) => {
				sort.addEventListener('change', this.changeSortItem.bind(this))
			})
		}

		this.clearSortItem();
	}

	changeSortItem(evt = new Event('change'))
	{
		const item = evt.target || evt.currentTarget
		const self = this;

		let params = new URLSearchParams(window.location.search);
		let sort_by = params.get('sort_by');
		let sort_order = params.get('sort_order');
		let order = "desc";

		this.clearSortItem();

		if (!sort_by) {
			item.checked = true;
		}

		if (sort_order === "desc") {
			order = "asc";
		}

		let getData = "?sort_by=" + item.name + "&sort_order=" + order

		BX.ajax({
			url: getData,
			method: 'GET',
			dataType: 'html',
			scriptsRunFirst: false,
			emulateOnload: false,
			cache: false,
			processData: false,
			onsuccess (data)
			{
				let fragment = document.createElement('span')
				fragment.insertAdjacentHTML('afterbegin', data)
				let newTarget = fragment.querySelector('#blog-card')
				let old = document.querySelector('#blog-card');

				if (newTarget) {
					old.innerHTML = newTarget.innerHTML;
				}

				const container = fragment.querySelector('[data-container="blog-list"]')
				const pagination = container.querySelector('[data-pagination]');

				if (pagination && self.pagination) {
					self.pagination.innerHTML = pagination.innerHTML;
				} else if (pagination && !self.pagination && self.target) {
					self.target.after(pagination);
				} else if (!pagination && this.pagination) {
					self.pagination.remove();
				}

				if (window.AjaxPagination && window.AjaxPagination.length) {
					window.AjaxPagination.forEach((pager) => {
						if (pager.target && pager.target.id === 'blog-card') {
							pager.init();
						}
					})
				}

				history.pushState({}, '', getData);
			}
		})

		this.clearSortItem(item.name, order);

	}

	clearSortItem(getName = null, order = null)
	{
		let params = new URLSearchParams(window.location.search);
		let sort_by = params.get('sort_by');
		let sort_order = params.get('sort_order');
		let sortButton = document.querySelectorAll('.smart-filter__sort');

		if (order) {
			sort_order = order;
		}

		if (getName) {
			sort_by = getName;
		}

		if (!sort_by) {
			sort_by = sortButton[0].name;
			sortButton[0].closest(".smart-filter__item").querySelector('.smart-filter__label_sort').classList.add('sort-up');
		}

		sortButton.forEach(element => {
			let span = element.closest(".smart-filter__item").querySelector('.smart-filter__label_sort');
			if (element.name === sort_by) {
				element.checked = true;
				if (sort_order === "asc") {
					span.classList.add('sort-up');
					span.classList.remove('sort-down');
				}
				if (sort_order === "desc") {
					span.classList.add('sort-down');
					span.classList.remove('sort-up');
				}
			} else {
				element.checked = false;
				span.classList.remove('sort-up');
				span.classList.remove('sort-down');
			}
		});
	}

	initFilter()
	{
		this.items = this.root.querySelectorAll('[data-filter-item]')
		this.clears = this.root.querySelectorAll('[data-filter-clear]')

		if (this.items.length) {
			[].forEach.call(this.items, (item) => {
				item.addEventListener('change', this.changeFilterItem.bind(this))
			})
		}

		if (this.clears.length) {
			[].forEach.call(this.clears, (clear) => {
				clear.addEventListener('change', this.clearClickHandler.bind(this))
			})
		}
	}

	clearClickHandler (evt)
	{
		const btn = evt.target || evt.currentTarget
		const id = btn.dataset.filterClear
		if (btn.type === 'checkbox')
			btn.checked = true

		const items = [];
		[].forEach.call(this.items, (item) => {
			if (item.dataset.filterItem === id) {
				items.push(item)
			}
		});

		[].forEach.call(items, (item) => {
			item.checked = false
		})

		this.changeFilterItem()
	}

	changeFilterItem (evt = new Event('change'))
	{
		this.dispatchStartEvent()
		const item = evt.target || evt.currentTarget
		const formData = new BX.ajax.FormData()
		formData.append('ajax', 'y');
		[].forEach.call(this.items, (item, key) => {
			switch (item.type) {
				case 'checkbox':
					if (item.checked) {
						formData.append(item.name, item.value)
					}
					break
				default:
					if (item.value.length > 0) {
						formData.append(item.name, item.value)
					}
					break
			}
		})

		if (item) {
			const id = item.dataset.filterItem
			const clear = this.root.querySelector('[data-filter-clear="' + id + '"]')
			clear.checked = false
		}

		formData.send(window.location.href, response => {
			this.dispatchEndEvent(JSON.parse(response))
		})
	}

	dispatchStartEvent ()
	{
		const event = new CustomEvent('before.smart.filter')
		document.dispatchEvent(event)
	}

	dispatchEndEvent (result)
	{
		const event = new CustomEvent('after.smart.filter', {detail: result})
		document.dispatchEvent(event)
	}

}