window.onload = () => {
    hideNav();
    typewriter();
}

/**
 * hides navs on scroll down and show nav on scroll up
 *
 * @return
 */
function hideNav()
{
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
}

/**
 * typewriter animation
 *
 * @return
 */
function typewriter()
{

}