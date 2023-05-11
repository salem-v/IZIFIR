import './style/style.scss'

export class InfoService {
    constructor() {
        this.init();
    }

    init() {
        this.infoButton = document.querySelector('.info__button')

        this.infoButton.addEventListener('click', this.clickHandler.bind(this))
    }

    clickHandler(evt = new Event('click')) {
		const buttonText = evt.target || evt.currentTarget
		const blockText = buttonText.previousElementSibling

		if (blockText.classList.contains("active")) {
			blockText.classList.remove('active');
			buttonText.innerHTML = "Развернуть";
		} else {
			blockText.classList.add('active');
			buttonText.innerHTML = "Свернуть";
		}
    }
}