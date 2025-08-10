<div id="map" style="height: 500px; width: 100%; border: 2px solid red;"></div>

@push('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const map = L.map('map').setView([28.1, -15.4], 10);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            const fishingSpots = @json($fishingSpots);

            fishingSpots.forEach(spot => {
                L.marker([spot.latitude, spot.longitude])
                    .addTo(map)
                    .bindPopup(`<b>${spot.name}</b>`);
            });
        });
    </script>
@endpush
