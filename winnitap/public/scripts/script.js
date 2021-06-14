onload = function(){    
    map();
}
/**
 * Function for initialising Google Map
 */
function map(){

    // Initiave map by targeting div#map
    var map = new google.maps.Map(document.getElementById('map'), {
        
        // Lat & Long for Winnipeg
        center: { lat: 49.8951, lng: -97.1384},
        zoom: 12
    });

    // TRANS CANADA BREWING CO.
    // Marker - Trans Canada
    var markerTransCanada = new google.maps.Marker({
        position: {lat: 49.8324491, lng: -97.2084986},
        map: map
    });

    // Info - Trans Canada
    var infoTransCanada = new google.maps.InfoWindow({
        content: 'Trans Canada Brewing Co.'
    });

    // Embed info on marker
    markerTransCanada.addListener('click', function(){
        infoTransCanada.open(map, markerTransCanada);
    });

    // HALF PINTS BREWING CO.
    // Marker - Half Pints
    var markerHalfPints = new google.maps.Marker({
        position: {lat: 49.8873556, lng: -97.2231889},
        map: map
    });

    // Info - Half Pints
    var infoHalfPints = new google.maps.InfoWindow({
        content: 'Half Pints Brewing Co.'
    });

    // Embed info on marker
    markerHalfPints.addListener('click', function(){
        infoHalfPints.open(map, markerHalfPints);
    });

    // KILTER BREWING CO.
    // Marker - Kilter 
    var markerKilter = new google.maps.Marker({
        position: {lat: 49.8898339, lng: -97.1097729},
        map: map
    });

    // Info - Kilter
    var infoKilter = new google.maps.InfoWindow({
        content: 'Kilter Brewing Co.'
    });

    // Embed info on marker
    markerKilter.addListener('click', function(){
        infoKilter.open(map, markerKilter);
    });

    // LITTLE BROWN JUG BREWING CO.
    // Marker - Little Brown Jug
    var markerLBJ = new google.maps.Marker({
        position: {lat: 49.9000422, lng: -97.1452477},
        map: map
    });

    // Info - Little Brown Jug
    var infoLBJ = new google.maps.InfoWindow({
        content: 'Little Brown Jug Brewing Co.'
    });

    // Embed info on marker - Little Brown Just
    markerLBJ.addListener('click', function(){
        infoLBJ.open(map, markerLBJ);
    });

    // FORT GARRY BREWING CO.
    // Marker - Fort Garry 
    var markerFortGarry = new google.maps.Marker({
        position: {lat: 49.8361619, lng: -97.2106395},
        map: map
    });

    // Info - Fort Garry
    var infoFortGarry = new google.maps.InfoWindow({
        content: 'Fort Garry Brewing Company'
    });

    // Embed info on marker
    markerFortGarry.addListener('click', function(){
        infoFortGarry.open(map, markerFortGarry);
    });

}