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
<form action="">
    <?= $this->Form->select('route', $routes, ['id' => 'route']) ?>
</form>
<div id="mapid"></div>
<script>
  var map = L.map('mapid').setView([36.73, 137.1], 13);
  L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/pale/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://maps.gsi.go.jp/development/ichiran.html">国土地理院</a>',
    maxZoom: 18,
    id: 'mapbox.streets'
  }).addTo(map);

  function getURL(URL) {
    return new Promise((resolve, reject) => {
      let req = new XMLHttpRequest();
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

  var markers = [];
  var route;

  function select(params) {
    var trip_id = params.trip_id;
    var shape_id = params.shape_id;
    markers.forEach(marker => map.removeLayer(marker));
    markers = [];
    if (route) {
      map.removeLayer(route);
      route = null;
    }
    var stopIcon = L.icon({
      iconUrl: 'img/bus_stop.gif',
      iconSize: [50, 50],
      iconAnchor: [25, 50], // point of the icon which will correspond to marker's location
      popupAnchor: [0, -50] // point from which the popup should open relative to the iconAnchor
    });
    getURL(encodeURI('/api/stops/' + trip_id))
        .then(stops => stops.map(stop => markers.push(L.marker([stop.stop_lat, stop.stop_lon], {icon: stopIcon})
            .addTo(map)
            .bindPopup(stop.stop_name + '<br>' + stop.time))))
        .catch(error => console.error(error));
    getURL('/api/shapes/' + shape_id)
        .then(shapes => {
          const paths = shapes
              .sort((a, b) => a.shape_pt_sequence * 1 - b.shape_pt_sequence * 1)
              .map(shape => [shape.shape_pt_lat, shape.shape_pt_lon]);
          route = L.polyline(paths, {color: '#6666ff'}).addTo(map);
        })
        .catch(error => console.error(error));
  }

  var routeSelector = document.getElementById('route');
  routeSelector.addEventListener('change', function (ev) {
    getURL('/api/routes/' + routeSelector.value).then(select);
  });
  getURL('/api/routes/' + routeSelector.value).then(select);
</script>
</body>
</html>