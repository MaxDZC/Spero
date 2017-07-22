<html>
	<head>
		<?php include("include/externals.php");?>
		<style>
	      /* Always set the map height explicitly to define the size of the div
	       * element that contains the map. */
	      #map {
	        height: 70%;
	      }
	      /* Optional: Makes the sample page fill the window. */
	      html, body {
	        height: 100%;
	        margin: 0;
	        padding: 0;
	      }
	      </style>
	</head>
	<body class="pale">	
		<?php include("include/navbar.php");?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
				<div id="map"></div>
				    <script>
				      var map;
				      var hasMarker = false;
				      var markers = [];

				      var contentString =  '<div id="content">'+
				      '<div id="siteNotice" >'+
				      '</div>'+
				      '<div id="bodyContent">'+
				      '<table>'+
				      '<tr>'+
				      '<td>Activity</td><td>11 hrs</td>'+
				      '</tr>'+
				      '<tr>'+
				      '<td>Average Population Count</td><td>1284</td>'+
				      '</tr>'+
				      '<tr>'+
				      '<td>Traffic</td><td style="color: red">High</td>'+
				      '</tr>'+
				      '<td>Establishments Nearby</td><td>'+
				      '<table>'+
				      '<tr>'+
				      '<td>Jollibee</td>'+
				      '</tr>'+
				      '<tr>'+
				      '<td>Chowking</td>'+
				      '</tr>'+
				      '</table>'+
				      '</td>'+
				      '</tr>'+
				      '</tr>'+
				      '</table>'+
				      '</div>'+
				      '</div>';

				      function initMap() {
				        map = new google.maps.Map(document.getElementById('map'), {
				          center: {lat: 10.329425009035305, lng: 123.90738227186375},
				          zoom: 15,
				          //mapTypeId: google.maps.MapTypeId.ROADMAP
				        });
				        map.addListener('click',function(event){
				          addMarker(event.latLng);
				        });
				      }


				      function addMarker(location){
				        if(!hasMarker){
				            var infoWindow = new google.maps.InfoWindow({
				              content: contentString
				            });
				            var marker = new google.maps.Marker({
				              position: location,
				              zoom: 20,
				              map: map
				           });
				           marker.addListener('click',function(){
				             infoWindow.open(map,marker);
				           })
				          markers.push(marker);
				          document.getElementById('btnSim').style.display = 'block';
				          hasMarker = true;
				        }
				      }

						function clearMarker(){
							markers[0].setMap(null);
							markers = [];
							hasMarker = false;
						}
				    </script>
				    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwrixp5vQ8ORM5xtxX50Lma7OL--bHDTk&callback=initMap"
				    async defer></script>
				    </div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-offset-3">
						<br>
						<button id = 'btnReset' class="btn" onclick="clearMarker()">R E S E T</button>
						<form method = 'post' action="simulateDetails.php">
							<input name = 'activity' value = '11' hidden>
							<input name = 'traffic' value = 'High' hidden>
							<input name = 'avePopulation' value = '1284' hidden>
							<input name = 'est1' value = 'jolibee' hidden>
							<input name = 'est2' value = 'chowking' hidden>
							<br>
							<button type="submit" id = 'btnSim' class="btn">S I M U L A T E</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>