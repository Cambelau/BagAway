let map;

function initMap() {
  const myPos = {lat:48.851503,lng:2.287552};
  const carPos1 = {lat:48.849610,lng:2.286243};
  const carPos2 = {lat:48.854315,lng:2.292233};
  const carpng ="src/car.png"
  const perso ="src/perso.png"
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 48.851473230054346, lng:  2.2867429166512805 },
    zoom: 16,
  });

  new google.maps.Marker({
    position: myPos,
    map,
    title: "Your Position!",
    icon: perso,
  });

  new google.maps.Marker({
    position: carPos1,
    map,
    title: "Car positon",
    icon: carpng,

  });

  new google.maps.Marker({
    position: carPos2,
    map,
    title: "car positon",
    icon: carpng,
  });
}
