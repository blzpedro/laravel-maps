var map;
var myPos;

$(document).ready(function() {
    geoLocationInit();
});

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
    createMap(myPos);
    nearbySearch(myPos);
}

function fail() {
    alert("Erro!");
}

//Criar mapa
function createMap(myPos) {
    map = new google.maps.Map(document.getElementById('map'), {
        center: myPos,
        zoom: 16
    });
    var marker = new google.maps.Marker({
        position: myPos,
        map: map
    });
}

//Criar marcador
function createMarker(latlng, icn, name) {
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icn,
        title: name
    });
}

function nearbySearch(myPos){
    var request = {
        location: myPos,
        radius: '2500',
        types: ['restaurant']
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

    function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
            var place = results[i];
            latlng = place.geometry.location;
            name = place.name;
            icn =  {url: place.icon, scaledSize: new google.maps.Size(20, 20)}
            createMarker(latlng, icn, name);
            }
        }
    }
}

