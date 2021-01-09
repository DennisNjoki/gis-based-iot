<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MY MAP</title>
		<link rel="stylesheet" type="text/css" href="js/leaflet/leaflet.css">
		<script src="js/leaflet.js"></script>
	

		
<style type="text/css">
		#map{
			height: 400px;
			width: 100%;
			border: 1px solid blue;
		}
		.location{
			font-style: initial;
			font-family: "Trebuchet MS", Verdana, sans-serif;
		}
	</style>

</head>
<body>

    <div id = "map" class="map">
	 <script type="text/javascript">
				var map = L.map('map', {
			center: [-0.416665, 36.9499962],
			zoom: 13
		});
	var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright"></a> IoT and GIS'
}).addTo(map);


L.marker([-0.416665, 36.9499962]).addTo(map)
    .bindPopup('Nyeri.<br> Kenya.')
	.openPopup();
	L.tileLayer.provider('Stamen.Watercolor').addTo(map);
	
	</script>

	</div>
	<center><a href="dashboard.php">Back to Dashboard</a></center>

</body>

</html>
