
import "https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js";
const mapbox_token="pk.eyJ1IjoiZXlrZjE5OTciLCJhIjoiY2twcDBzemF5MzRuMjJwcDNyOXIxMGNlcCJ9.yPOq4IrZ1I7Mdbffob6I6g";


mapboxgl.accessToken = mapbox_token;
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/mapbox/dark-v10",
  zoom: 1.5,
  center: [0, 20]
});
var marker = new mapboxgl.Marker({
    draggable: true
    })
    .setLngLat([0, 0])
    .addTo(map);

// const getColorFromCount = count => {
//   if (count >= 100) {
//     return "red";
//   }
//   if (count >= 10) {
//     return "blue";
//   }
//   return "gray";
// };

// fetch("/get-latest.json")
//   .then(response => response.json())
//   .then(data => {
//     // const places = data.places;
//     // const reports = data.reports;
//     const { places, reports } = data;

//     reports
//       .filter(report => !report.hide)
//       .forEach(report => {
//         const { infected, placeId } = report;
//         const currentPlace = places.find(place => place.id === placeId);
//         console.log(infected, currentPlace);
//         new mapboxgl.Marker({
//           color: getColorFromCount(infected)
//         })
//           .setLngLat([currentPlace.longitude, currentPlace.latitude])
//           .addTo(map);
//       });
//   });