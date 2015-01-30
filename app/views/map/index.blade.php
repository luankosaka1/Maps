@extends('layout/map')

@section('content')
	
	<div id="map_canvas" style="width: 100%; height: 100%;"></div>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>	
	<script>
		var latLng = new google.maps.LatLng(-23.7396273, -46.7010799);
		var mapOptions = {
			center: latLng,
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		var marker = new google.maps.Marker({
		    position: latLng,
		    title:"Geolocalização"
		});

		var contentString = '<h3>Informações</h3>' +
			'Transportadora: ABCDE <br/>' +
			'Destino: ABCDE <br/>' +
			'Data: 00/00/0000 <br/>' +
			'Horário: 00:00:00';
		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 300
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);

		// https://developers.google.com/maps/documentation/javascript/layers
	</script>

@stop

@section('style')
<style type="text/css">
	html { height: 100% }
	body { height: 100%; margin: 0; padding: 0 }
	#map_canvas { margin-top: 10px; height: 100%; }
</style>
@stop