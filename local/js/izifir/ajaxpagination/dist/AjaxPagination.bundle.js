this.BX=this.BX||{},function(t){"use strict";var i=function(){function t(t){this.id=t,this.init()}var i=t.prototype;return i.init=function(){this.link=document.querySelector("[data-pagination-link="+this.id+"]"),this.link&&(this.container=null,this.target=null,this.pagination=null,this.container=this.link.closest("[data-container]"),this.link.removeEventListener("click",this.linkClickHandler.bind(this)),this.link.addEventListener("click",this.linkClickHandler.bind(this)),this.container&&(this.target=this.container.querySelector("[data-target]"),this.pagination=this.container.querySelector("[data-pagination]")))},i.linkClickHandler=function(t){void 0===t&&(t=new Event("click")),t.preventDefault();var i=this,n=t.currentTarget||t.target,e=n.href;n.classList.contains("is-loading")||(n.classList.add("is-loading"),BX.ajax({url:e,method:"GET",dataType:"html",scriptsRunFirst:!1,emulateOnload:!1,cache:!1,processData:!1,onsuccess:function(t){var e=document.createElement("span");e.insertAdjacentHTML("afterbegin",t);var a=e.querySelector('[data-container="'+i.container.dataset.container+'"]'),r=a.querySelector('[data-target="'+i.target.dataset.target+'"]'),s=a.querySelector("[data-pagination]");r&&i.target.insertAdjacentHTML("beforeend",r.innerHTML),s?(i.pagination.innerHTML=s.innerHTML,i.init()):i.pagination.remove();var o=new CustomEvent("ajax.pagination.loaded");document.dispatchEvent(o),n.classList.remove("is-loading")}}))},t}();t.AjaxPagination=i}(this.BX.Izifir=this.BX.Izifir||{});
//# sourceMappingURL=AjaxPagination.bundle.js.map