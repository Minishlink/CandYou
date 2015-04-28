<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize() 
{
	var map_canvas = document.getElementById('map_canvas');
	var map_options = {
		center: new google.maps.LatLng(44.803952, -0.602341),
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(map_canvas, map_options)
	
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(44.803952, -0.602341),
		map: map,
		title: "Esplanade des Arts et Métiers, 33400 Talence"
	});
	
	var infowindow = new google.maps.InfoWindow({
		content: "<b>C&You 2014</b><br />Esplanade des Arts et Métiers<br />33400 Talence"
	});

	google.maps.event.addListener(marker, 'click', function() {
		window.open("https://goo.gl/maps/kf9xy");
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<section id="acces" class="acces-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Accès</h1>
				
				<p><a href="https://goo.gl/maps/kf9xy" title="Lien vers Google Maps" target="_blank">Esplanade des Arts et Métiers<br>
				33400 Talence</a><p/>
				<div id="map_canvas"></div>			
				<br>
				<p><b>Route</b> : sortie n°16 de la rocade<br>
				<b>Tramway</b> : arrêt <i>Arts et Métiers</i> de la ligne B<br>
				<b>Bus</b> : arrêt <i>Arts et Métiers</i> de la ligne 34 </p>				
			</div>
		</div>
	</div>
</section>

