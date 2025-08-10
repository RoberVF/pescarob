<div id="map" style="height: 500px; width: 100%; border: 2px solid red;"></div>

@push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const defaultLatLng = [28.1, -15.4]; // Canarias por defecto
            const map = L.map('map').setView(defaultLatLng, 10);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            const fishingSpots = @json($fishingSpots);

            // Marcadores para pesqueros
            fishingSpots.forEach(spot => {
                L.marker([spot.latitude, spot.longitude])
                    .addTo(map)
                    .bindPopup(`
                        <div>
                            <strong>${spot.name}</strong><br/>
                            <small>${spot.notes ? spot.notes : 'Sin notas'}</small>
                        </div>
                    `);
            });

            // Intentar geolocalizar al usuario
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(position => {
                    const userLatLng = [position.coords.latitude, position.coords.longitude];
                    map.setView(userLatLng, 12);

                    // Marcador para el usuario
                    L.marker(userLatLng, {icon: L.icon({
                        iconUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-icon-red.png',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowUrl: 'https://unpkg.com/leaflet@1.9.3/dist/images/marker-shadow.png',
                        shadowSize: [41, 41]
                    })}).addTo(map).bindPopup('Tú estás aquí').openPopup();
                }, error => {
                    console.warn('Geolocalización denegada o no disponible.');
                    // Mantiene vista por defecto
                });
            } else {
                console.warn('Geolocalización no soportada en este navegador.');
            }
        });
    </script>
@endpush
