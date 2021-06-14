onload = function(){    
    map();
}
/**
 * Function for initialising Google Map
 */
function map()
{
    // Initiave map by targeting div#map
    var map = new google.maps.Map(document.getElementById('map'), {
        // Lat & Long for Winnipeg
        center: { lat: 49.8951, lng: -97.1384},
        zoom: 12
    });

    var beerIcon = {
        url: '/images/beer_icon.png',
        scaledSize: new google.maps.Size(50, 50)
    }

    var userIcon = {
        url: '/images/user.png',
        scaledSize: new google.maps.Size(50, 50)
    }

    // TRANS CANADA BREWING CO.
    createMarker(map, {
        coordinates:{lat: 49.8324491, lng: -97.2084986},
        content: '<strong>Trans Canada Brewing Co.</strong>',
        iconImg: beerIcon
    });

    // HALF PINTS BREWING CO.
    createMarker(map,{
        coordinates:{lat: 49.8873556, lng: -97.2231889},
        content: '<strong>Half Pints Brewing Co.</strong>',
        iconImg: beerIcon
    });

    // KILTER BREWING CO.
    createMarker(map,{
        coordinates:{lat: 49.8898339, lng: -97.1097729},
        content: '<strong>Kilter Brewing Co..</strong>',
        iconImg: beerIcon
    });

    // LITTLE BROWN JUG BREWING CO.
    createMarker(map,{
        coordinates:{lat: 49.9000422, lng: -97.1452477},
        content: '<strong>Little Brown Jug Brewing Co.</strong>',
        iconImg: beerIcon
    });
    
    // FORT GARRY BREWING CO.
    createMarker(map,{
        coordinates:{lat: 49.8361619, lng: -97.2106395},
        content: '<strong>Fort Garry Brewing Co.</strong>',
        iconImg: beerIcon
    });

    // get user's location by passing map
    getUserLocation(map, userIcon);
}

/**
 * create a marker
 *
 * @param   {object}  props
 *
 * @return
 */
function createMarker(map, props)
{
    // initialise marker
    var marker = new google.maps.Marker({
        position: props.coordinates,
        map: map
    });

    // check for icon image
    if(props.iconImg) {
        marker.setIcon(props.iconImg);
    }

    // check for content
    if(props.content) {
        var info = new google.maps.InfoWindow({
            content: props.content
        });
    
        // Embed info on marker
        marker.addListener('click', function(){
            info.open(map, marker);
        });
    }
}

/**
 * get user's location
 *
 * @param   object  map  google map
 *
 * @return
 */
function getUserLocation(map, icon)
{
    // successful call back
    var successCall = (position) => 
    {
        // capture user's current position
        var user = {
            coordinates:{
                lat:position.coords.latitude, 
                lng:position.coords.longitude
            },
            content: 'You are here',
            iconImg: icon
        };

        // create user's marker
        createMarker(map, user);
    }

    // unsuccessfull call back
    var errorCall = (error) => {
        console.error(error);
    }

    var id = navigator.geolocation.watchPosition(successCall, errorCall);

    
}