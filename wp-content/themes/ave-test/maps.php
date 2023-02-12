<?php
/*
 * Template Name: Mapa
 */

get_header(); ?>

<div id="map" style="height: calc(100vh - 66px); width: 100%;"></div>

<script>
  function initMap() {
    var myLatLng = {lat: -25.363, lng: 131.044};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
  }
</script>


<?php get_footer(); ?>
