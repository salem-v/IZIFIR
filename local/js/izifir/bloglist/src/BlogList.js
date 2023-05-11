import {Blockblog} from 'izifir.blockblog';
import {CaseAll} from 'izifir.case_all';
import './style/style.scss';
import {Smartfilter} from "izifir.smartfilter";

export class BlogList
{
    constructor ()
    {
        this.container = document.querySelector('[data-container="blog-list"]');
        this.target = this.container.querySelector('[data-target]');
        this.pagination = this.container.querySelector('[data-pagination]');
        this.filter = document.querySelector('.smart-filter');

        document.addEventListener('before.smart.filter', this.beforeSmartFilterHandler.bind(this));
        document.addEventListener('after.smart.filter', this.afterSmartFilterHandler.bind(this));
        window.addEventListener('popstate', this.onPopState.bind(this));
    }

    beforeSmartFilterHandler ()
    {
        this.container.classList.add('f-loading');
        this.filter.closest('[data-filter]').classList.add('f-loading');
    }

    afterSmartFilterHandler (evt = new CustomEvent('after.smart.filter'))
    {
        const url = evt.detail.FILTER_AJAX_URL + window.location.search;
        BX.ajax({
            url: url,
            dataType: 'html',
            onsuccess: (response) => {

                if (!evt.detail.step) {
                    history.pushState({}, '', url);
                }

                const fragment = document.implementation.createHTMLDocument();
                if (response.toLowerCase().indexOf('<!doctype') > -1) {
                    fragment.documentElement.innerHTML = response;
                } else {
                    fragment.body.innerHTML = response;
                }

                const container = fragment.querySelector('[data-container="blog-list"]');

                const filter = fragment.querySelector('.smart-filter__container');
                document.querySelector('.smart-filter__container').innerHTML = filter.innerHTML;

                if (container) {
                    const target = container.querySelector('[data-target]');
                    this.target.innerHTML = target.innerHTML;

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
                        window.Smartfilter.clearSortItem();
                    }

                    if (window.AjaxPagination && window.AjaxPagination.length) {
                        window.AjaxPagination.forEach((pager) => {
                            if (pager.target && pager.target.id === 'blog-card') {
                                pager.init();
                            }
                        })
                    }
                }

                this.container.classList.remove('f-loading', 'is-visible');
                this.filter.closest('[data-filter]').classList.remove('f-loading', 'is-visible');
            }
        });
    }

    onPopState (event)
    {
        this.afterSmartFilterHandler(new CustomEvent('after.smart.filter', {
            detail: {
                'FILTER_AJAX_URL': document.location.href,
                'step': true
            }
        }));
    }
}