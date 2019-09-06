var map;
var myPos;
var local = 'night_club';

$(document).ready(function() {
    geoLocationInit();
  });
  
  $("#locais").change(function(){
    local = $("#locais").val();
    initMap();
    console.clear()
    $('#places').text('');    
    $.getJSON('https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+ myPosUrl +'&radius=3000&type='+ local +'&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg', function(data) {
        console.log(data.results)
    });
})


//Pegar localização
function geoLocationInit() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
    } else {
        alert("Navegador não suportado :(.");
    }
}

function success(position) {
    // console.log(position);
    var latval = position.coords.latitude;
    var lngval = position.coords.longitude;
    myPosUrl = latval + ',' + lngval
    myPos = new google.maps.LatLng(latval, lngval);
    var i;
    initMap();
    // var url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+ myPosUrl +'&radius=1500&type=restaurant&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg'
    // $(location).attr('href',url);
    $.getJSON('https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+ myPosUrl +'&radius=3000&type='+ local +'&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg', function(data) {
        console.log(data.results)
    });
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
      $.getJSON('https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+ myPosUrl +'&radius=3000&type='+ local +'&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg', function(data) {
          console.log(data.results)
      });
    };

    // Realizar pesquisa dos locais.
    service.nearbySearch(
        // types: restaurant, bar, meal_delivery, cafe, night_club, shopping_mall, liquor_store
        {location: myPos, radius: 3000, type: [local]},
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

      var imagemRequest = place.photos[0].getUrl();
      var div = document.createElement('div');
      var nomeLocal = document.createElement('p');
      var notaLocal = document.createElement('p');
      var avaliacoes = document.createElement('p');
      var endereco = document.createElement('p');
      var fotoLocal = document.createElement('img');
      nomeLocal.textContent = 'Nome do local: ' + place.name
      notaLocal.textContent =  'Nota: ' + parseInt(place.rating);
      avaliacoes.textContent =  'Avaliações: ' + parseInt(place.user_ratings_total);
      endereco.textContent =  'Endereço: ' + place.vicinity;
      fotoLocal.setAttribute('src', imagemRequest);
      fotoLocal.setAttribute('width', '50%');
      div.appendChild(nomeLocal);
      div.appendChild(notaLocal);
      div.appendChild(avaliacoes);
      div.appendChild(endereco);
      div.appendChild(fotoLocal);
      div.className = "box-locais"
      placesList.appendChild(div); 

      bounds.extend(place.geometry.location);
    }
    map.fitBounds(bounds);
  }
 