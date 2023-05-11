import './style/style.scss'
import 'main.core'

export class Rating
{
	constructor(options = {name: 'Rating'})
	{
		this.init()

		var rating = document.querySelector('.rating'),
			ratingItem = document.querySelectorAll('.rating-item'),
			staticRating = document.querySelector('input[name="staticRating"]');

		if (!staticRating) {
			rating.onclick = function(e){
				var target = e.target;
				if(target.classList.contains('rating-item')){
					removeClass(ratingItem,'current-active')
					target.classList.add('active','current-active');

					document.querySelector('input[name="rating"]').value = target.getAttribute('data-rate');
				}
			}

			rating.onmouseover = function(e) {
				var target = e.target;
				if(target.classList.contains('rating-item')){
					removeClass(ratingItem,'active')
					target.classList.add('active');
					mouseOverActiveClass(ratingItem)
				}
			}
			rating.onmouseout = function(){
				addClass(ratingItem,'active');
				mouseOutActiveClas(ratingItem);
			}

			function removeClass(arr) {
				for(var i = 0, iLen = arr.length; i <iLen; i ++) {
					for(var j = 1; j < arguments.length; j ++) {
						ratingItem[i].classList.remove(arguments[j]);
					}
				}
			}
			function addClass(arr) {
				for(var i = 0, iLen = arr.length; i <iLen; i ++) {
					for(var j = 1; j < arguments.length; j ++) {
						ratingItem[i].classList.add(arguments[j]);
					}
				}
			}

			function mouseOverActiveClass(arr){
				for(var i = 0, iLen = arr.length; i < iLen; i++) {
					if(arr[i].classList.contains('active')){
						break;
					}else {
						arr[i].classList.add('active');
					}
				}
			}

			function mouseOutActiveClas(arr){
				for(var i = arr.length-1; i >=1; i--) {
					if(arr[i].classList.contains('current-active')){
						break;
					}else {
						arr[i].classList.remove('active');
					}
				}
			}
		}
	}

	init ()
	{
		this.form = document.querySelector('[data-rating-form]')

		if (this.form) {
			this.submitBtn = this.form.querySelector('[type="submit"]')
			this.form.addEventListener('submit', this.submitFormHandler.bind(this))
		}
	}

	submitFormHandler (evt = new Event('submit'))
	{
		evt.preventDefault()

		const formData = new FormData(this.form)
		const bxFormData = new BX.ajax.FormData()
		const url = new URL("local/ajax/modal/blog_rating.php", location.origin)


		for (let [name, value] of formData) {
			bxFormData.append(name, value)
		}

		url.searchParams.set('action', 'setRating')
		bxFormData.send(
			url.href,
			response => {
				if (window.Fancybox) {
					const instance = window.Fancybox.getInstance()
					if (instance) {
						instance.close()
					}
				}

				Fancybox.show([
					{
						type: 'html',
						src: response
					}
				])

			}
		)
	}
}