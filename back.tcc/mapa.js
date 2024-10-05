const map = L.map('map').setView([-24.10508, -46.650696], 11);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 50,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	const marker = L.marker([-24.122063, -46.678583]).addTo(map)
		.bindPopup('<b>Aoooba!</b><br />Melhor Ensino Técnico da Baixada Santista.').openPopup();

	const circle = L.circle([-24.126075, -46.695542], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map).bindPopup('Balneário Itaguaí.');

	const polygon = L.polygon([
		[-24.147067, -46.691551],
		[-24.127955, -46.62632],
		[-24.153959, -46.6325]
	]).addTo(map).bindPopup('Ihh rapaiz ta cheio de agua.');


	const popup = L.popup()
		.setLatLng([-24.095953, -46.633701])
		.setContent('Cresceu um mato aqui.')
		.openOn(map);

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent(`You clicked the map at ${e.latlng.toString()}`)
			.openOn(map);
		let lat = e.latlng.toString().slice(7, 17);
		let lon = e.latlng.toString().slice(19, 29);

		let link = location.href = "insert.php?lat="+lat+'&'+'lon='+lon;

	};


map.on('click', function (e) {
    var latitude = e.latlng.lat;
    var longitude = e.latlng.lng;

    window.location.href = `sinalizacao.html?latitude=${latitude}&longitude=${longitude}`;
});