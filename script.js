let data = [];
const southWest = L.latLng(-89.98155760646617, -180),
	northEast = L.latLng(89.99346179538875, 180);
const bounds = L.latLngBounds(southWest, northEast);

var mymap = L.map('map').setView(bounds.getCenter(), 2);
mymap.on('drag', () => {
	mymap.panInsideBounds(bounds, { animate: true });
});

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	preferCanvas: true,
	bounds: bounds,
	updateWhenZooming: false,
	detectRetina: true,
	minZoom: 2,
	maxZoom: 6,
	maxBounds: bounds,
	attribution:
		'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

var heat = L.heatLayer(data, {
	radius: 12,
	blur: 20,
	maxZoom: 15,
	minOpacity: 0.25
}).addTo(mymap);

