
var lati = parseFloat($('#latitude').val());
var long = parseFloat($('#longitude').val());
var myLatLng = {lat: lati, lng: long};

var map = new google.maps.Map(document.getElementById('peta'), {
  zoom: 17,
  center: myLatLng
});

var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  title: 'Here!'
});   