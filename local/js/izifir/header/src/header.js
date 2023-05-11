import './style/style.scss';

export class Header
{
	constructor ()
	{
		this.header = document.querySelector('.header')

		document.addEventListener('scroll', this.headerScroll.bind(this))

		let modalButtons = document.querySelectorAll('.js-open-menu'),
			overlay = document.querySelector('.js-overlay-modal'),
			closeButtons = document.querySelectorAll('.js-menu-close');

		modalButtons.forEach(function (item) {
			item.addEventListener('click', function (e) {
				e.preventDefault();
				let modalId = this.getAttribute('data-menu'),
					modalElem = document.querySelector('.menu_collapse[data-menu="' + modalId + '"]');

				if (modalElem.classList.contains('active')) {
					modalElem.classList.remove('active');
					overlay.classList.remove('active');
				} else {
					modalElem.classList.add('active');
					overlay.classList.add('active');
				}
			}); // end click
		}); // end foreach

		closeButtons.forEach(function(item){
			item.addEventListener('click', function(e) {
				let parentModal = this.closest('.menu_collapse');

				parentModal.classList.remove('active');
				overlay.classList.remove('active');
			});
		}); // end foreach
		document.body.addEventListener('keyup', function (e) {
			let key = e.keyCode;

			if (key === 27) {
			document.querySelector('.menu_collapse.active').classList.remove('active');
			document.querySelector('.overlay').classList.remove('active');
			}
		}, false);

		overlay.addEventListener('click', function() {
			document.querySelector('.menu_collapse.active').classList.remove('active');
			overlay.classList.remove('active');
		});

		document.addEventListener('click', this.bodyClickHandler.bind(this))
	}

	bodyClickHandler(evt = new Event('click'))
	{
		const el = evt.target
		if (el && !el.closest('.menu_collapse') && !el.closest('.js-open-menu')) {
			document.querySelector('.menu_collapse').classList.remove('active');
		}
	}

	headerScroll (evt = new Event('scroll')) {
		const header = document.querySelector('.header');
		const first = document.querySelector('.first');
		const headerHeight = header.offsetHeight;

		let scrollDistance = window.scrollY;

		if (scrollDistance >= 165) {
			header.classList.add('header--fixed');
			first.style.marginTop = `${headerHeight}px`;
		} else {
			header.classList.remove('header--fixed');
			first.style.marginTop = null;
		}
	}
}