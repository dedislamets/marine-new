            var map;
            var geocoder;
            var mapBooking;
            var default_latlng
            var latling;
            var pos;
            var marker;


            function initialize() {

                

                // map = new google.maps.Map(document.getElementById('map'), {

             //      center: new google.maps.LatLng(-6.2228421,107.0585572),

             //      zoom: 10,

             //      mapTypeId: google.maps.MapTypeId.ROADMAP

             //    });

                var infoWindow = new google.maps.InfoWindow({map: map});

                if (navigator.geolocation) {

                    navigator.geolocation.getCurrentPosition(function(position) {

                        var latitude = position.coords.latitude;

                        var longitude = position.coords.longitude;

                        pos = {

                          lat: position.coords.latitude,

                          lng: position.coords.longitude

                        };                          

                        latling = new google.maps.LatLng(latitude, longitude);

                        var myOptions = {

                            zoom: 17,

                            center: latling,

                            mapTypeId: google.maps.MapTypeId.ROADMAP

                        };

                        map = new google.maps.Map(document.getElementById("map"), myOptions);               

                        //map.setCenter(latling);

                        // infoWindow.setPosition(pos);

                        // infoWindow.setContent('Lokasi Anda.');

                        marker = new google.maps.Marker({

                            position: latling,

                            title:"You are here",

                            draggable:true,

                            animation: google.maps.Animation.DROP,



                        });                                         

                        marker.setMap(map);

                        $('#latitude').val(latitude);

                        $('#longtitude').val(longitude);

                        geocodePosition(latling);



                        google.maps.event.addListener(marker, 'dragend', function() {                                       

                            geocodePosition(marker.getPosition());

                        });

                    }, function() {

                        handleLocationError(true, infoWindow, map.getCenter());

                     });

                }else {               

                  handleLocationError(false, infoWindow, map.getCenter());

                }

                geocoder = new google.maps.Geocoder();

                //default_latlng = latling;                 

                var fromt = document.getElementById('cari');

                // map.controls[google.maps.ControlPosition.TOP_LEFT].push(fromt);

                // map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                

                var autocomplete = new google.maps.places.Autocomplete(fromt);

                //autocomplete.bindTo('bounds', map);



                var infowindow = new google.maps.InfoWindow();

                // var marker = new google.maps.Marker({

                //    position: default_latlng,

                   //    map: map,

                   //    draggable:true,

                   //    icon: '<?= base_url(); ?>assets/img/location.png',               

                //       animation: google.maps.Animation.DROP,

                   //    //anchorPoint: new google.maps.Point(0, -29)

                // });

                var curplace = autocomplete.getPlace();

                // infoWindow.setPosition(default_latlng);

          //    infoWindow.setContent('Lokasi Anda.');

                



                autocomplete.addListener('place_changed', function() {

                      infowindow.close();

                      marker.setVisible(false);

                      var place = autocomplete.getPlace();

                      if (!place.geometry) {                        

                        window.alert("No details available for input: '" + place.name + "'");

                        return;

                      }



                      if (place.geometry.viewport) {

                        map.fitBounds(place.geometry.viewport);

                      } else {

                        map.setCenter(place.geometry.location);

                        map.setZoom(17);  // Why 17? Because it looks good.

                      }

                      // marker.setIcon(/** @type {google.maps.Icon} */({

                      //   url: place.icon,

                      //   size: new google.maps.Size(71, 71),

                      //   origin: new google.maps.Point(0, 0),

                      //   anchor: new google.maps.Point(17, 34),

                      //   scaledSize: new google.maps.Size(35, 35)

                      // }));

                      marker.setPosition(place.geometry.location);

                      marker.setVisible(true);



                      var address = '';

                      if (place.address_components) {

                        address = [

                          (place.address_components[0] && place.address_components[0].short_name || ''),

                          (place.address_components[1] && place.address_components[1].short_name || ''),

                          (place.address_components[2] && place.address_components[2].short_name || '')

                        ].join(' ');

                      }



                      infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);

                      infowindow.open(map, marker);

                      updateMarkerAddress(place.name + "\n" + address);

                      $('#latitude').val(place.geometry.location.lat());

                      $('#longtitude').val(place.geometry.location.lng());

                });



                

                function setupClickListener(id, types) {

                  var radioButton = document.getElementById(id);

                  radioButton.addEventListener('click', function() {

                    autocomplete.setTypes(types);

                  });

                }



                setupClickListener('changetype-all', []);

                setupClickListener('changetype-address', ['address']);

                setupClickListener('changetype-establishment', ['establishment']);

                setupClickListener('changetype-geocode', ['geocode']);



                function handleLocationError(browserHasGeolocation, infoWindow, pos) {

                    infoWindow.setPosition(pos);

                    infoWindow.setContent(browserHasGeolocation ?

                                          'Error: The Geolocation service failed.' :

                                          'Error: Your browser doesn\'t support geolocation.');

                }

                function geocodePosition(pos) {

                    geocoder.geocode({

                        'latLng': pos

                    }, function (responses) {

                        if (responses && responses.length > 0) {

                            updateMarkerAddress(responses[0].formatted_address);

                        } else {

                            updateMarkerAddress('Cannot determine address at this location.');

                        }

                    });

                }

                function updateMarkerAddress(str) {

                    document.getElementById('AddWaypoint').innerHTML = str;                 

                }

                

                

            }           

            function initMap() {

                var mapCanvas = document.getElementById('map');

                var mapOptions = {

                  mapTypeId: google.maps.MapTypeId.ROADMAP,

                  zoom: 13

                } 



                // var map = new google.maps.Map(document.getElementById('map'), {

                //   center: {lat: -2.548926, lng: 118.0148634},

                //   zoom: 13

                // });

                var map = new google.maps.Map(mapCanvas, mapOptions);



         

                // Menggunakan fungsi HTML5 geolocation.

                if (navigator.geolocation) {

                  navigator.geolocation.getCurrentPosition(function(position) {             

                    var pos = {

                      lat: position.coords.latitude,

                      lng: position.coords.longitude

                    };

         

                    marker = new google.maps.Marker({

                      position: pos,

                      map: map,

                      icon: '<?= base_url(); ?>assets/img/location.png',

                      title: 'Posisi Kamu',

                      animation: google.maps.Animation.DROP,

                    });

         

                    map.setCenter(pos);

         

                    var user_location = position.coords.latitude+","+position.coords.longitude;

                    var url = "tampil.php";

                    var jarak = 1;

                    var info = [];

                    $.ajax({

                        url: url,

                        data: "position="+encodeURI(user_location)+"&jarak="+jarak,

                        dataType: 'json',

                        cache: true,

                        success: function(msg){

                          for(i=0; i < msg.data.kafe.length;i++){

                            var point = new google.maps.LatLng(parseFloat(msg.data.kafe[i].latitude),parseFloat(msg.data.kafe[i].longitude));

                            tanda = new google.maps.Marker({

                                position: point,

                                map: map,

                                icon: "<?= base_url(); ?>assets/img/place.png",

                                animation: google.maps.Animation.DROP,

                                title: msg.data.kafe[i].nama_kafe

                            });

                          }

                        }

                    });

         

                  }, function() {

                    handleLocationError(true, map.getCenter());

                  });

                } else {

                  handleLocationError(false, map.getCenter());

                }

            }

     

            function showPlaces() {

                var map = new google.maps.Map(document.getElementById('map'), {

                  center: {lat: -2.548926, lng: 118.0148634},

                  zoom: 13

                });

         

                // Menggunakan fungsi HTML5 geolocation.

                if (navigator.geolocation) {

                  navigator.geolocation.getCurrentPosition(function(position) {

                    var pos = {

                      lat: position.coords.latitude,

                      lng: position.coords.longitude

                    };

         

                    marker = new google.maps.Marker({

                      position: pos,

                      map: map,

                      icon: '<?= base_url(); ?>assets/img/location.png',

                      title: 'Posisi Kamu',

                      animation: google.maps.Animation.DROP,

                    });

         

                    map.setCenter(pos);

                    var user_location = position.coords.latitude+","+position.coords.longitude;

                    var url = "tampil.php";

                    var jarak = document.getElementById("jarak").value;

         

                    $.ajax({

                        url: url,

                        data: "position="+encodeURI(user_location)+"&jarak="+jarak,

                        dataType: 'json',

                        cache: true,

                        success: function(msg){

                          for(i=0; i < msg.data.kafe.length;i++){

                            var point = new google.maps.LatLng(parseFloat(msg.data.kafe[i].latitude),parseFloat(msg.data.kafe[i].longitude));

                            tanda = new google.maps.Marker({

                                position: point,

                                map: map,

                                icon: "<?= base_url(); ?>assets/img/place.png",

                                animation: google.maps.Animation.DROP,

                                title: msg.data.kafe[i].nama_kafe

                            });

                          }

                        }

                    });

         

                  }, function() {

                    handleLocationError(true, map.getCenter());

                  });

                } else {

                  handleLocationError(false, map.getCenter());

                }

            }

            function handleLocationError(browserHasGeolocation, pos) {

                var map = new google.maps.Map(document.getElementById('map'), {

                  center: {lat: -2.548926, lng: 118.0148634},

                  zoom: 13

                });

                var infoWindow = new google.maps.InfoWindow({map: map});

                infoWindow.setPosition(pos);

                infoWindow.setContent(browserHasGeolocation ?

                                      'Error: The Geolocation service failed.' :

                                      'Error: Your browser doesn\'t support geolocation.');

            }

            function geocodePosition(pos) {

                geocoder.geocode({

                    'latLng': pos

                }, function (responses) {

                    if (responses && responses.length > 0) {

                        updateMarkerAddress(responses[0].formatted_address);

                    } else {

                        updateMarkerAddress('Cannot determine address at this location.');

                    }

                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);

            