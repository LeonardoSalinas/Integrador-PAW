// Funciones para Google Maps
function myMap() {
  var coord = document.getElementById('coord').innerHTML;
  var myCenter = new google.maps.LatLng(coord);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}