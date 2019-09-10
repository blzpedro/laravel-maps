var map;
var myPos;
var local = 'restaurant';
var website;

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
        alert("Navegador não suportado, tente em outro!");
    }
}

function success(position) {
    // console.log(position);
    var latval = position.coords.latitude;
    var lngval = position.coords.longitude;
    myPosUrl = latval + ',' + lngval
    myPos = new google.maps.LatLng(latval, lngval);
    initMap();    
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
      zoom: 14
    });
    
    var marker = new google.maps.Marker({
        position: myPos,
        map: map
    });

    // Realizar a busca de mais locais
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
  }

  // Criar a lista dos locais
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

      
      var getImagem = place.photos[0].getUrl();
      var div = document.createElement('div');
      var nomeLocal = document.createElement('p');
      var notaLocal = document.createElement('p');
      var avaliacoes = document.createElement('p');
      var endereco = document.createElement('p');
      var irParaLocal = document.createElement('a');
      var placeID = document.createElement('a');
      // var maisInfos = document.createElement('button');
      var br = document.createElement('br');
      var fotoLocal = document.createElement('img');
      nomeLocal.textContent = 'Nome do local: ' + place.name
      notaLocal.textContent =  'Nota: ' + parseInt(place.rating);
      avaliacoes.textContent =  'Avaliações: ' + parseInt(place.user_ratings_total);
      placeID.textContent =  place.place_id;
      endereco.textContent =  'Endereço: ' + place.vicinity;
      irParaLocal.textContent =  'Ir até o local';
      // maisInfos.textContent = 'Mais infos';
      // https://www.google.com/maps/dir/Rua+Isabel+Schmidt,+369+-+Santo+Amaro,+S%C3%A3o+Paulo+-+SP,+04735-000,+Brasil/Av.+Mal.+Deodoro,+136+-+Gonzaga,+Santos+-+SP,+11060-401,+Brasil
      irParaLocal.setAttribute('href', 'https://www.google.com/maps/dir/'+ myPosUrl +'/'+ place.vicinity +'/');
      irParaLocal.setAttribute('target', '_blank');
      placeID.setAttribute('href', 'https://maps.googleapis.com/maps/api/place/details/json?placeid='+ place.place_id +'&fields=name,opening_hours,website,rating,formatted_phone_number&key=AIzaSyA-5eVqeQ5c9jyCmS5k1V4NYVKDGYPacVg');
      placeID.setAttribute('target', '_blank');
      placeID.setAttribute('class', 'infos');
      // maisInfos.setAttribute('id', 'btnInfo');
      // maisInfos.setAttribute('data-toggle', 'modal')
      // maisInfos.setAttribute('data-target', '#modalExemplo')      
      // console.log(i)
      // maisInfos.classList.add(place.place_id);   
      placeID.setAttribute('style', 'display: block;');
      fotoLocal.setAttribute('src', getImagem);
      fotoLocal.setAttribute('width', '50%');
      div.appendChild(nomeLocal);
      div.appendChild(notaLocal);
      div.appendChild(avaliacoes);
      div.appendChild(endereco);
      div.appendChild(placeID);
      div.appendChild(irParaLocal);
      // div.appendChild(maisInfos);
      div.appendChild(br);
      div.appendChild(fotoLocal);
      div.className = "box-locais"
      placesList.appendChild(div); 
      
      bounds.extend(place.geometry.location);
    }
    map.fitBounds(bounds);
  }


  