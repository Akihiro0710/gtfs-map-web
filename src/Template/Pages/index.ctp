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
  var map = L.map('mapid').setView([36.75, 137.1], 12);
  L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/pale/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://maps.gsi.go.jp/development/ichiran.html">国土地理院</a>',
    maxZoom: 18,
    id: 'mapbox.streets'
  }).addTo(map);
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/api/stops');
  xhr.addEventListener('load', function (result) {
    console.log(result);
  });

  function getURL(URL) {
    return new Promise((resolve, reject) => {
      let req = new XMLHttpRequest();
      xhr.setRequestHeader('Content-Type', 'application/json');
      req.open('GET', URL, true);
      req.onload = function () {
        if (req.status === 200) {
          resolve(JSON.parse(req.responseText));
        } else {
          reject(new Error(req.statusText));
        }
      };
      req.onerror = function () {
        reject(new Error(req.statusText));
      };
      req.send();
    });
  }

  getURL('/api/stops')
      .then(stops => {
        const markers = stops.map(stop => L.marker([stop.stop_lat, stop.stop_lon]).addTo(map).bindPopup(stop.stop_name));
      }).catch(error => console.error(error));
  //const rowCounts = <?//= json_encode($rowCounts) ?>//;
  //const shapes = <?//= json_encode($shapes) ?>//;
  // const paths = {};
  // shapes.forEach(function (shape) {
  //   if (!paths[shape.shape_id]) {
  //     paths[shape.shape_id] = [];
  //   }
  //   paths[shape.shape_id].push(shape);
  // });
  // const lines = [];
  // Object.keys(paths).forEach(key => {
  //   lines.push(paths[key].sort((a, b) => a - b));
  // });
  // L.polyline(lines, {color: 'red'}).addTo(map);
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
        .openOn(map);
  }

  map.on('click', onMapClick);
</script>
</body>
</html>