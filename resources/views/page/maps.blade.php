@extends('template/index')

@section('content')
<section class="content-header">
    <!DOCTYPE html>
    <html>
      <head>
        <style>
           #map {
            height: 400px;
            width: 100%;
           }
        </style>
      </head>
      <body>
        <h3>Tampilkan Pada Peta</h3>
        <div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat:  -6.5581195, lng: 106.73113310000001};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArceS0bITdCKMoo1K9E19gxjW8jh67Vjs&callback=initMap">
        </script>
        <p>Click the button to get your coordinates.</p>

        <button onclick="getLocation()">Try It</button>
        
        <p id="demo"></p>
        
        <script>
        var x = document.getElementById("demo");
        
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }
        
        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude + 
            "<br>Longitude: " + position.coords.longitude;
        }
        </script>
      </body>
    </html>
@endsection