this.BX=this.BX||{},function(t){"use strict";var a=function(){function t(t){this.id=t,this.root=document.querySelector('[data-tabs="'+t+'"]'),this.activeClass="active",this.root&&this.init()}var a=t.prototype;return a.init=function(){var t=this;this.tabs=this.root.querySelectorAll("[data-tab]"),this.pages=this.root.querySelectorAll("[data-page]"),this.tabs.length&&this.pages.length&&(this.tabs[0].classList.add(this.activeClass),this.pages[0].classList.add(this.activeClass),Array.prototype.forEach.call(this.tabs,(function(a){a.addEventListener("click",t.tabClickHandler.bind(t))})))},a.tabClickHandler=function(t){var a=this;void 0===t&&(t=new Event("click")),t.preventDefault();var s=t.currentTarget||t.target;if(s&&!s.classList.contains(this.activeClass)){var i=s.dataset.tab;Array.prototype.forEach.call(this.tabs,(function(t){t.dataset.tab===i?t.classList.add(a.activeClass):t.classList.remove(a.activeClass)})),Array.prototype.forEach.call(this.pages,(function(t){t.dataset.page===i?t.classList.add(a.activeClass):t.classList.remove(a.activeClass)}))}},t}();t.ProgramConditions=a}(this.BX.Izifir=this.BX.Izifir||{});
//# sourceMappingURL=programconditions.bundle.js.map
