function initMap() {

    /* ### Mapa con las coordenadas ### */
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: { lat: 20.669123, lng: -87.069915 },
        mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map']
        },
        streetViewControl: false
    });
    /* ### Fin Mapa con las coordenadas ### */

    /* ### Estilos del mapa ### */
    var styledMapType = new google.maps.StyledMapType(
        [{
                "featureType": "poi.business",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "off"
                }]
            }
        ], { name: 'Elite Builders 4 Life' });

    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
    /* ### Fin Estilos del mapa ### */
    /* ### Íconos en el mapa ### */
    var icon = 'img/marcador.png';

    var contentElite = '<div class="info-window">' +
        '<h3 class="color">Elite Builders 4 Life</h3>' +
        '<div class="info-content">' +
        '<p class="text-dark">¡Nos encontraste!</p>' +
        '<p class="text-dark">Ven y descubre como nuestros expertos te pueden ayudar</p>' +
        '<p>Avenida Hunab Ku Mz. 42 LT. 7, Cataluña 1 77725 Playa del Carmen, Quintana Roo, México</p>'+
        '</div>' +
        '</div>';

    var infowindowElite = new google.maps.InfoWindow({
        content: contentElite
    });

    var marker = new google.maps.Marker({
        position: { lat: 20.669123, lng: -87.069915 },
        map: map,
        title: 'Elite Builders 4 Life',
        icon: icon
    });

    marker.addListener('click', function() {
        infowindowElite.open(map, marker);
    });
}