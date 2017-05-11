<!DOCTYPE html>
<html>
<head>
	<title>
<script src="https://maps.googleapis.com/maps/api/js"></script>

	</title>
</head>
<body>
<select id="end" onchange="calcRoute()"  name="select-native-2" id="select-native-2"  data-mini="true">
            <option value="" data-placeholder="true">Pilih Tujuan </option>
            <option value="-6.168374,106.7586">Test1</option>
            <option value="-6.168374,106.7586">Test2</option>
</select>
<div id="direction-panel"></div>
<div id="map" style="height: 600px; width: 800px"></div>


<script type="text/javascript">




var map;

function initialize() {
	 // Instantiate a directions service.
        var directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapstart = new google.maps.LatLng(-6.842778,108.309444);
    var mapOptions = {
      zoom:9,
      mapTypeId: google.maps.MapTypeId.ROAD,
      center: mapstart
    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
   //Jangan lupa ini untuk memunculkan garis rute pada map
   directionsDisplay.setMap(map);

 }

   function calcRoute() {
   //Membuat marker untuk koordinat lokasi device tersebut untuk mendapatkan nilai koordinat untuk variabel start
   navigator.geolocation.getCurrentPosition(function(position) {
      var latitude  = position.coords.latitude;
      var longitude = position.coords.longitude;
      var latlng    = new google.maps.LatLng(latitude, longitude);
      var start = latitude+','+longitude;
      var end = document.getElementById('end').value;
      //Memulai konfigurasi untuk gps, type map, dari dan kemana tujuannya akhirnya.
      var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.DirectionsTravelMode.WALKING
      };
      //Menjalankan konfigurasi gps diatas
      var directionsService = new google.maps.DirectionsService;
      directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        }
      });
      //Munculkan panel kalkulasi rute pada tag div yang beratribut id = direction-panel
      directionsDisplay.setPanel(document.getElementById('directions-panel'));
   });
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-1Hz75qNfD5pggoNIV-1u3HubAI-3MN4&callback=initialize"
    async defer></script>

</body>
</html>