window.onload = () => {
    // get previous scroll position
    let prevPos = window.pageYOffset;

    // on scroll
    window.onscroll = () => 
    {
        // set current scroll position
        let currentPos = window.pageYOffset;
        
        // if the user scrolls up
        if(prevPos > currentPos) {
            document.getElementById('navbar').style.top = "0";
        }
        else {
            document.getElementById('navbar').style.top = "-70px";
        }
        prevPos = currentPos;
    }
    
    // initialise Google map
    initMap();

    // initialise hamburger menu
    navSlide();
}

/**
 * Function for initialising Google Map
 */
function initMap()
{
    // Initiave map by targeting div#map
    let map = new google.maps.Map(document.getElementById('map'), {
        // Lat & Long for Winnipeg
        center: { lat: 49.8982941, lng: -97.1407272},
        zoom: 14
    });

    let burgerIcon = {
        url: '/images/burger-icon.png',
        scaledSize: new google.maps.Size(50, 50)
    }

    let userIcon = {
        url: '/images/user.png',
        scaledSize: new google.maps.Size(50, 50)
    }

    // create a marker
    createMarker(map, {
        coordinates:{lat: 49.8984876, lng: -97.1434864,},
        content: '<strong>Exchange District</strong>',
        iconImg: burgerIcon
    });

    // create a marker
    createMarker(map, {
        coordinates:{lat: 49.8870693, lng: -97.1336404},
        content: '<strong>The Forks</strong>',
        iconImg: burgerIcon
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
    let marker = new google.maps.Marker({
        position: props.coordinates,
        map: map
    });

    // check for icon image
    if(props.iconImg) {
        marker.setIcon(props.iconImg);
    }

    // check for content
    if(props.content) {
        let info = new google.maps.InfoWindow({
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
    let successCall = position => 
    {
        // capture user's current position
        let user = {
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
    let errorCall = error => console.error(error);

    let id = navigator.geolocation.watchPosition(successCall, errorCall);
}

/**
 * mobile nav bar
 *
 * @return
 */
function navSlide()
{
    const burger = document.getElementById('ham_logo');
    const nav = document.getElementById('navlinks');
    const links = document.querySelectorAll('.hamlinks');

    // animate navigation
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    });
}