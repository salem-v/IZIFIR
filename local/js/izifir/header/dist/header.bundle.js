this.BX=this.BX||{},function(e){"use strict";var t=function(){function e(){this.header=document.querySelector(".header"),document.addEventListener("scroll",this.headerScroll.bind(this));var e=document.querySelectorAll(".js-open-menu"),t=document.querySelector(".js-overlay-modal"),c=document.querySelectorAll(".js-menu-close");e.forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault();var c=this.getAttribute("data-menu"),s=document.querySelector('.menu_collapse[data-menu="'+c+'"]');s.classList.contains("active")?(s.classList.remove("active"),t.classList.remove("active")):(s.classList.add("active"),t.classList.add("active"))}))})),c.forEach((function(e){e.addEventListener("click",(function(e){this.closest(".menu_collapse").classList.remove("active"),t.classList.remove("active")}))})),document.body.addEventListener("keyup",(function(e){27===e.keyCode&&(document.querySelector(".menu_collapse.active").classList.remove("active"),document.querySelector(".overlay").classList.remove("active"))}),!1),t.addEventListener("click",(function(){document.querySelector(".menu_collapse.active").classList.remove("active"),t.classList.remove("active")})),document.addEventListener("click",this.bodyClickHandler.bind(this))}var t=e.prototype;return t.bodyClickHandler=function(e){void 0===e&&(e=new Event("click"));var t=e.target;!t||t.closest(".menu_collapse")||t.closest(".js-open-menu")||document.querySelector(".menu_collapse").classList.remove("active")},t.headerScroll=function(e){void 0===e&&(e=new Event("scroll"));var t=document.querySelector(".header"),c=document.querySelector(".first"),s=t.offsetHeight;window.scrollY>=165?(t.classList.add("header--fixed"),c.style.marginTop=s+"px"):(t.classList.remove("header--fixed"),c.style.marginTop=null)},e}();e.Header=t}(this.BX.Izifir=this.BX.Izifir||{});
//# sourceMappingURL=header.bundle.js.map
