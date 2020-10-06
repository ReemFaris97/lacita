var locations = [
    ['29P4+GV Mansoura, Mansoura Qism 2, Mansoura', 31.036364, 31.357195, 4],
    ['United Kingdom', 55.283399, -3.372798, 5],
    ['United States Of America', 39.670096, -100.484368, 3],
    ['India', 23.596949, 78.989691, 2],
    ['japan', 36.759541, 138.451267, 1]
  ];

// Setup the different icons and shadows
//var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';

var icons = [
          './website/dist/img/markers/egypt.png',
          './website/dist/img/markers/uk.png',
          './website/dist/img/markers/usa.png',
          './website/dist/img/markers/india.png',
          './website/dist/img/markers/japan.png'
  
  
//      iconURLPrefix + 'green-dot.png',
//      iconURLPrefix + 'blue-dot.png',
//      iconURLPrefix + 'orange-dot.png',
//      iconURLPrefix + 'purple-dot.png',
//      iconURLPrefix + 'pink-dot.png',
//      iconURLPrefix + 'yellow-dot.png'
  ]
var iconsLength = icons.length;

function initMap() {
  var map = new google.maps.Map(document.getElementById('map_search'), {
      zoom: 10,
      styles: [
          {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{
                  color: '#a8f6a3'
              }]
          },
          {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{
                  color: '#a8f6a3'
              }]
          },
          {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{
                  color: '#ffffff'
              }]
          },
          {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{
                  color: '#ffffff'
              }]
          },
          {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{
                  color: '#a8f6a3'
              }]
          },
          {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{
                  color: '#a8f6a3'
              }]
          },
          {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{
                  color: '#a8f6a3'
              }]
          },
          {
              featureType: "all",
              elementType: "all",
              stylers: [
                  {
                      hue: "#a8f6a3",
                  }
  ]
}
],
      /* center: {
           lat: 4.166309685627166,
           lng: 3.174026000000026
       }*/
      center: new google.maps.LatLng(-33.91722, 151.23064),
  });
  //    var image =
  //        '../img/house.png';


  var markers = new Array();

  var iconCounter = 0;

  var infowindow = new google.maps.InfoWindow();
  var markerMap, i;
  for (i = 0; i < locations.length; i++) {
      markerMap = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          animation: google.maps.Animation.DROP,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          icon: icons[iconCounter]

      });
      
    markers.push(markerMap);

      
      google.maps.event.addListener(markerMap, 'click', (function (markerMap, i) {
          return function () {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, markerMap);
          }
      })(markerMap, i));
      
      iconCounter++;
    // We only have a limited number of possible icon colors, so we may have to restart the counter
    if(iconCounter >= iconsLength) {
      iconCounter = 0;
    }
      
  }
  
 function autoCenter() {
    //  Create a new viewpoint bound
    var bounds = new google.maps.LatLngBounds();
    //  Go through each...
    for (var i = 0; i < markers.length; i++) {  
              bounds.extend(markers[i].position);
    }
    //  Fit these bounds to the map
    map.fitBounds(bounds);
  }
  autoCenter();
  
}
