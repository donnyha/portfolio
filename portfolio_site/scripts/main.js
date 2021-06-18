import TypeWriter from './TypeWriter.js';

window.onload = () => {
    hideNav();
    initTypeWriter();
    mobileNav();
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
 * used to initialise the TypeWriter class
 *
 * @return
 */
function initTypeWriter()
{
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');

    // create TypeWriter
    new TypeWriter(txtElement, words, wait);
}

/**
 * mobile nav bar
 *
 * @return
 */
function mobileNav()
{
    const burger = document.getElementById('burger-logo');
    const nav = document.getElementById('navlinks');

    // animate navigation
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    });
}