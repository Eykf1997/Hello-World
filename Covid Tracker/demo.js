function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param {H.Map} map A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();
  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group


  addMarkerToGroup(group, {lat: 53.439, lng: -2.221},
    '<div><a href="https://www.mcfc.co.uk">Manchester City</a></div>' +
    '<div>City of Manchester Stadium<br />Capacity: 55,097</div>');

  addMarkerToGroup(group, {lat: 53.430, lng: -2.961},
    '<div><a href="https://www.liverpoolfc.tv">Liverpool</a></div>' +
    '<div>Anfield<br />Capacity: 54,074</div>');
}


function moveMapToBerlin(map){
  map.setCenter({lat:52.5159, lng:13.3777});
  map.setZoom(1);
}

/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
  apikey: 'YlRPDGfEu1laPA1OKRPOzYnBQP6te4YYKayVwl0sHGc'
});
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lat:50, lng:5},
  zoom: 4,
  pixelRatio: window.devicePixelRatio || 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
window.onload = function () {
  moveMapToBerlin(map);
  addInfoBubble(map);
  console.log('hello')
}