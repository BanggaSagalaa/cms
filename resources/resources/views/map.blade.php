<!DOCTYPE html>
<html>

<head>
    @include('layouts/header')

</head>


<style>
#map {
    width: calc(100%);
    height: calc(100%);
}

.mapbox-directions-instructions {
    overflow: auto !important;
}

div#geocoder-search {
    width: 25em;
}

.marker {
    font-size: 3em;
    color: #bb0000;
    cursor: pointer;
}

.mapboxgl-popup {
    max-width: 200px;
}

.mapboxgl-popup-content {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
}
</style>

<body>
    <div class="wrapper">
      <div id="sidebar">
            @include('layouts.sidebar')
        </div>
        <div id='map'></div>
    </div>
</body>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ29kZWdrb2xhIiwiYSI6ImNsb2EwaWVzcTBmdHAycXFicTlsMmxyeXYifQ.wEYJUoOoqnFzHFURicvCgQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        zoom: 12,
        center: [{{$church->first()->longitude}}, {{$church->first()->latitude}}]
    });

        var marker = new mapboxgl.Marker()
            .setLngLat([{{$church->first()->longitude}}, {{$church->first()->latitude}}])
            .addTo(map);

</script>

</html>
