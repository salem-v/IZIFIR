import './style/style.scss'
import 'main.core'

export class PageMap
{
	constructor (params = {})
	{
		this.lat = params.lat || null
		this.long = params.long || null
		this.zoom = params.zoom || 10
		this.address = params.address || null
		this.phone = params.phone || null

		if (this.lat && this.long) {
			ymaps.ready(this.initMap.bind(this))
		}
	}

	initMap ()
	{
		this.map = new ymaps.Map("map", {
			center: [this.lat, this.long],
			zoom: this.zoom,
			controls: []
		})

		this.map.controls.add('zoomControl', {
			float: 'right',
			position: {
				right: 10,
				top: 108
			}
		})

		this.map.behaviors.disable('scrollZoom');

		var objectManager = new ymaps.ObjectManager({
			// Чтобы метки начали кластеризоваться, выставляем опцию.
			clusterize: true,
			// ObjectManager принимает те же опции, что и кластеризатор.
			gridSize: 32,
			clusterDisableClickZoom: true
		});

		objectManager.objects.options.set('preset', 'islands#blueDotIcon');
		objectManager.clusters.options.set('preset', 'islands#blueClusterIcons');
		this.map.geoObjects.add(objectManager);

		const coord = {
			"type": "FeatureCollection",
			"features": []
		}

		coord.features.push(
			{
				"type": "Feature",
				"id": 1,
				"geometry": {
					"type": "Point",
					"coordinates": [
						this.lat,
						this.long
					]
				},
				"properties": {
					/* TODO: Настройки точек карты */
					// "balloonContentHeader": "<font size=3><span>Наш офис</span></font>",
					"balloonContentBody": "" +
						"<p>Адрес: " + this.address + "</p>" +
						"<a href='tel:" + this.phone + "' class='mgo-number'>Телефон: " + this.phone + "</a>",
				}
			},
		);

		objectManager.add(coord);
	}
}