// map.js
// Inicializar el mapa
var map = L.map('map').setView([4.60971, -74.08175], 13); // Coordenadas centradas en Bogotá, por ejemplo

// Añadir capa de mapa (usando OpenStreetMap)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Añadir marcadores de zonas verdes (puedes personalizar las coordenadas y descripciones)
L.marker([4.6486259, -74.247895]).addTo(map)
    .bindPopup('<b>Parque Simón Bolívar</b><br>Zonas verdes, ciclovía y más.');

L.marker([4.6126385, -74.0654875]).addTo(map)
    .bindPopup('<b>Jardín Botánico</b><br>Increíbles jardines y áreas de preservación.');

L.marker([4.658083, -74.093429]).addTo(map)
    .bindPopup('<b>Cerro de Monserrate</b><br>Zona verde y turística.');