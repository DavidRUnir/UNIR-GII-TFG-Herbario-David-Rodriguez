function initMap(){
const ubicacion = new Localizacion(()=>{
const options = {
center: {
lat: ubucacion.latitude,
lng: ubicacion.longitude
},
zoom: 15
}

var map = document.getElementById('map');

const mapa = new google.maps.Map(map, options);

});
}