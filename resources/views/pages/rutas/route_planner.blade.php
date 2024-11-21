<x-base-layout :scrollspy="false">
    <x-slot:pageTitle>
        {{ $title }} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
        <link rel="stylesheet" href="{{ asset('plugins/table/datatable/datatables.css') }}">
        @vite(['resources/scss/light/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/light/plugins/table/datatable/custom_dt_miscellaneous.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/dt-global_style.scss'])
        @vite(['resources/scss/dark/plugins/table/datatable/custom_dt_miscellaneous.scss'])
        @vite(['resources/scss/light/assets/components/carousel.scss'])
        @vite(['resources/scss/light/assets/components/modal.scss'])
        @vite(['resources/scss/light/assets/components/tabs.scss'])
        @vite(['resources/scss/dark/assets/components/carousel.scss'])
        @vite(['resources/scss/dark/assets/components/modal.scss'])
        @vite(['resources/scss/dark/assets/components/tabs.scss'])
        <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/filepond/FilePondPluginImagePreview.min.css')}}">
        @vite(['resources/scss/light/plugins/filepond/custom-filepond.scss'])
        @vite(['resources/scss/dark/plugins/filepond/custom-filepond.scss'])
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <style>
        #map {
         cursor: crosshair;
         height: 400px; width: 100%; }
        .button { background-color: #3b82f6; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem; }
        .button:hover { background-color: #2563eb; }

        /* Estilo para el panel de instrucciones dentro del mapa */
        .leaflet-routing-container {
            font-size: 12px; /* Tamaño más pequeño */
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1000; /* Asegura que esté por encima del mapa */
            max-width: 300px; /* Limitar el ancho */
            background-color: rgba(255, 255, 255, 0.7); /* Fondo semi-transparente */
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para ocultar los botones de alternancia de rutas (si no quieres que se muestren) */
        .leaflet-routing-alt {
            display: none; /* Ocultar los botones predeterminados de 'alternativas' */
        }
    </style>

    <div class="row layout-top-spacing">
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Planificador de Rutas</h2>
            </div>
            <div class="card-body">
                <div id="map"></div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div>Marcadores colocados: <span id="marker-count">0</span></div>
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button id="reset-button" class="btn btn-primary">Reiniciar Marcadores</button>
                    <button id="generate-route" class="btn btn-primary">Generar ruta</button>
                    <input id="coordenadas-input" class="form-control" type="text">
                    <button id="reset-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Guardad ruta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Guardar ruta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre de ruta:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de ruta">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


    <!-- BEGIN CUSTOM SCRIPTS FILE -->
    <x-slot:footerFiles>
        <script src="{{ asset('plugins/global/vendors.min.js') }}"></script>
        @vite(['resources/assets/js/custom.js'])
        <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
        <script src="{{ asset('plugins/table/datatable/custom_miscellaneous.js') }}"></script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const map = L.map('map').setView([18.5001, -88.3000], 13);
            let markers = [];
            let routeControl;
            const markerCount = document.getElementById('marker-count');
            const resetButton = document.getElementById('reset-button');

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            map.on('click', function(e) {
                const { lat, lng } = e.latlng;
                const marker = L.marker([lat, lng]).addTo(map);
                markers.push(marker); // Guardar marcador en el array
                markerCount.textContent = markers.length;
                marker.bindPopup(`Parada ${markers.length}`).openPopup();
            });

            // Configuración de botón para generar ruta dinámica
            document.getElementById('generate-route').addEventListener('click', function () {
                if (markers.length < 2) {
                    alert('Debes seleccionar al menos 2 puntos para generar la ruta');
                    return;
                }

                // Obtener las coordenadas de los marcadores en orden
                const waypoints = markers.map(marker => {
                    return L.latLng(marker.getLatLng().lat, marker.getLatLng().lng);
                });

            // concatenar coordenadas para almacenar
                const concatenatedCoordinates = markers.map(marker => {
                const { lat, lng } = marker.getLatLng();
                return `${lat},${lng}`;
                }).join(' | ');

                document.getElementById('coordenadas-input').value = concatenatedCoordinates;


                // Trazar o dibujar ruta
            routeControl = L.Routing.control({
                    waypoints: waypoints,
                    routeWhileDragging: true,
                    showAlternatives: false,
                    addWaypoints: false, // Desactiva la interacción con los puntos
                    fitSelectedRoutes: true, // Ajusta la vista al seleccionar la ruta
                    createMarker: function () { return null; }, // No crear marcadores adicionales
                    lineOptions: {
                        styles: [{ color: 'blue', opacity: 0.7, weight: 4 }]
                    },
                    router: L.Routing.osrmv1({
                        serviceUrl: 'https://router.project-osrm.org/route/v1' // Servidor OSRM
                    }),
                    show: true // Mostrar las instrucciones
                }).addTo(map);
            });


            resetButton.addEventListener('click', function() {
                if(routeControl) {
                map.removeControl(routeControl);
            }
            //limpiar input
            document.getElementById('coordenadas-input').value = "";

            //Remover marcadores
            markers.forEach(marker => map.removeLayer(marker));
            markers = []; // limpiar array
            markerCount.textContent = 0;     
               });
            


        });

    </script>
    </x-slot>
    <!-- END CUSTOM SCRIPTS FILE -->
</x-base-layout>