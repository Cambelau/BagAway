var config = {
  MY_API_TOKEN : '12345',
  SECRET_API_KEY : 'AIzaSyC2dm869yOJpPPLNSOZeirYr06nlb_IgO4',
}

var token = config.MY_API_TOKEN;
var key = config.SECRET_API_KEY;

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3' +
      '&key=AIzaSyC2dm869yOJpPPLNSOZeirYr06nlb_IgO4&callback=initMap';
  document.body.appendChild(script);
}

window.onload = loadScript;   