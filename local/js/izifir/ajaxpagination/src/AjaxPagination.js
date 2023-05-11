import './style/style.scss'
import 'main.core'

export class AjaxPagination
{
    constructor (id)
    {
        this.id = id
        this.init()
    }

    init()
    {
        this.link = document.querySelector('[data-pagination-link=' + this.id + ']')
        if (this.link) {
            this.container = null
            this.target = null
            this.pagination = null

            this.container = this.link.closest('[data-container]')
            this.link.removeEventListener('click', this.linkClickHandler.bind(this))
            this.link.addEventListener('click', this.linkClickHandler.bind(this))

            if (this.container) {
                this.target = this.container.querySelector('[data-target]')
                this.pagination = this.container.querySelector('[data-pagination]')
            }
        }
    }

    linkClickHandler(evt = new Event('click'))
    {
        evt.preventDefault()
        const self = this
        const link = evt.currentTarget || evt.target
        const url = link.href

        if (!link.classList.contains('is-loading')) {
            link.classList.add('is-loading')

            BX.ajax({
                url: url,
                method: 'GET',
                dataType: 'html',
                scriptsRunFirst: false,
                emulateOnload: false,
                cache: false,
                processData: false,
                onsuccess (data)
                {
                    const fragment = document.createElement('span')
                    fragment.insertAdjacentHTML('afterbegin', data)
                    const container = fragment.querySelector('[data-container="' + self.container.dataset.container + '"]')
                    const newTarget = container.querySelector('[data-target="' + self.target.dataset.target + '"]')
                    const newPagination = container.querySelector('[data-pagination]')

                    if (newTarget) {
                        self.target.insertAdjacentHTML('beforeend', newTarget.innerHTML)
                    }

                    if (newPagination) {
                        self.pagination.innerHTML = newPagination.innerHTML
                        self.init()
                    } else {
                        self.pagination.remove()
                    }

                    const event = new CustomEvent('ajax.pagination.loaded')
                    document.dispatchEvent(event)

                    link.classList.remove('is-loading')
                }
            })
        }
    }
}