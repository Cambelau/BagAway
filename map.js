function initMap() {
  const myPos = { lat: 48.871826, lng: 2.200102 };
  const camPos = { lat:48.846867, lng: 2.345710 };
  const image = "car.png";
  var icons = {
  start: new google.maps.MarkerImage(
    // URL
    'car.png',
    // (width,height)
    new google.maps.Size( 44, 32 ),
    // The origin point (x,y)
    new google.maps.Point( 0, 0 ),
    // The anchor point (x,y)
    new google.maps.Point( 22, 32 )
  ),
  end: new google.maps.MarkerImage(
    'car.png',
    // (width,height)
    new google.maps.Size( 44, 32 ),
    // The origin point (x,y)
    new google.maps.Point( 0, 0 ),
    // The anchor point (x,y)
    new google.maps.Point( 22, 32 )
  )
};
  const directionsService = new google.maps.DirectionsService();
  const directionsRenderer = new google.maps.DirectionsRenderer();
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    center: { lat: 48.866667, lng: 2.333333 },

  });

  directionsRenderer.setMap(map);

  directionsService.route({
      origin: myPos,
      destination: camPos,
      travelMode: google.maps.TravelMode.DRIVING,
      suppressMarkers: true

    })
    .then((response) => {

      directionsRenderer.setDirections(response);
    })
    .catch((e) => window.alert("Directions request failed due to " + status));
}
