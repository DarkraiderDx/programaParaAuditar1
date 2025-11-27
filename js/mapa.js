// JavaScript Document
google.maps.event.addDomListener(window,'load',drawMap);
function drawMap(){
	var mapa;
	var opcionesMapa = {
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		//mapTypeId:google.maps.MapTypeId.SATELLITE
	}
	mapa = new google.maps.Map(document.getElementById('google_canvas'),opcionesMapa);
	navigator.geolocation.getCurrentPosition(function(posicion){
	var geolocalizacion = new google.maps.LatLng(-19.5891475,-65.7536453);
		var marcador = new google.maps.Marker({
			map: mapa,
			
			draggable: true,
			position:geolocalizacion,
			visible: false
		});
		
		mapa.setCenter(geolocalizacion);
		calcRoute(geolocalizacion,mapa);
	});
}


function calcRoute(inicioRuta,mapa){
	var directionsService = new google.maps.DirectionsService();
	var directionsRenderer = new google.maps.DirectionsRenderer();
	directionsRenderer.setMap(mapa);
	var posicioncde_i = new google.maps.LatLng(-19.5857284,-65.7498526);
	var marcador = new google.maps.Marker({
		map: mapa,
		title:'hola',
		draggable: false,
		position:posicioncde_i,
		visible: false
	});
	
	var request = {
		origin: inicioRuta,
		destination: posicioncde_i,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	}
	directionsService.route(request,function(response, status){
		if(status == google.maps.DirectionsStatus.OK){
			directionsRenderer.setDirections(response);
		}
	});
}