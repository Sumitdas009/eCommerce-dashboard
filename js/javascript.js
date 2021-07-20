// Satellite map
function satellite_map() {
    var var_location = new google.maps.LatLng(48.856847, 2.296832);

    var var_mapoptions = {
        center: var_location,
        zoom: 16,
        mapTypeId: 'satellite'
    };

    var var_map = new google.maps.Map(document.getElementById("map-container-3"),
        var_mapoptions);

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Paris, France"
    });
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', satellite_map);