<?php $this->setLayout(false); ?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        #mapid {
            height: 100%;
        }
    </style>
</head>
<body>
<div id="mapid"></div>
<script>
  var mymap = L.map('mapid').setView([36.75, 137.1], 12);
  L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://maps.gsi.go.jp/development/ichiran.html">国土地理院</a>,
    maxZoom: 18,
    id: 'mapbox.streets'
  }).addTo(mymap);
  <?php foreach ($stops as $stop):?>
  L.marker([<?=$stop->stop_lat?>, <?=$stop->stop_lon?>]).addTo(mymap);
  <?php endforeach; ?>
  // var circle = L.circle([36.7, 137], {
  //   color: 'red',
  //   fillColor: '#f03',
  //   fillOpacity: 0.5,
  //   radius: 500
  // }).addTo(mymap);
  // var polygon = L.polygon([
  //   [36.509, 136.8],
  //   [36.503, 136.9],
  //   [36.51, 137]
  // ]).addTo(mymap);
  var popup = L.popup();

  function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
  }
  mymap.on('click', onMapClick);
</script>
</body>
</html>