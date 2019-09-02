var map;
var myPos;
var locais;

$(document).ready(function() {
    geoLocationInit();
});


//Pegar localização
function geoLocationInit() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
    } else {
        alert("Navegador não suportado :(.");
    }
}

function success(position) {
    console.log(position);
    var latval = position.coords.latitude;
    var lngval = position.coords.longitude;
    myPos = new google.maps.LatLng(latval, lngval);
    initMap();
}

function fail() {
    alert("Erro!");
}

function initMap() {
    // Criar o mapa.
    map = new google.maps.Map(document.getElementById('map'), {
      center: myPos,
      zoom: 16
    });
    
    var marker = new google.maps.Marker({
        position: myPos,
        map: map
    });

    // Criar lista dos locais
    var service = new google.maps.places.PlacesService(map);
    var getNextPage = null;
    var moreButton = document.getElementById('more');
    moreButton.onclick = function() {
      moreButton.disabled = true;
      if (getNextPage) getNextPage();
    };

    // Realizar pesquisa dos locais.
    service.nearbySearch(
        // types: restaurant, bar
        {location: myPos, radius: 3000, type: ['meal_takeaway']},
        function(results, status, pagination) {
          if (status !== 'OK') return;

          createMarkers(results);
          moreButton.disabled = !pagination.hasNextPage;
          getNextPage = pagination.hasNextPage && function() {
            pagination.nextPage();
          };
        });
        


    var searchBox = new google.maps.places.SearchBox(document.getElementById('search'));

    google.maps.event.addDomListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
    
            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(16);
        })
  }

  // Criar os marcadores nos locais
  function createMarkers(places) {
    var bounds = new google.maps.LatLngBounds();
    var placesList = document.getElementById('places');

    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      var li = document.createElement('li');
      li.textContent = place.name;
      placesList.appendChild(li);

      bounds.extend(place.geometry.location);
    }
    map.fitBounds(bounds);
  }
 