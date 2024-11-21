<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Routing Example</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 500px;
        }
    </style>
</head>
<body>
    <h1>Planificador de Rutas con Leaflet</h1>
    <div id="map"></div>
    <button id="generate-route">Generar Ruta</button>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script>
        // Inicializar el mapa
        const map = L.map('map').setView([18.50012, -88.30039], 13); // Coordenadas iniciales

        // Añadir capa de mapa base
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        let markers = []; // Array para almacenar marcadores

        // Evento para añadir marcadores al mapa al hacer clic
        map.on('click', function (e) {
            const marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
            markers.push(marker); // Guardar marcador en el array
            marker.bindPopup(Parada ${markers.length}).openPopup();
        });

        // Configurar botón para generar la ruta
        document.getElementById('generate-route').addEventListener('click', function () {
            if (markers.length < 2) {
                alert('Debes añadir al menos 2 paradas para generar una ruta.');
                return;
            }

            // Obtener las coordenadas de los marcadores en orden
            const waypoints = markers.map(marker => {
                return L.latLng(marker.getLatLng().lat, marker.getLatLng().lng);
            });

            // Crear ruta con los waypoints
            L.Routing.control({
                waypoints: waypoints,
                routeWhileDragging: true,
                showAlternatives: false,
                createMarker: function() { return null; } // Evitar marcadores adicionales
            }).addTo(map);
        });
    </script>
</body>
</html>