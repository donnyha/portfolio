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
    const texts = [
        'Designer',
        'Cyclist',
        'Footballer',
        'Developer'
    ];

    // beginning count
    let count = 0;

    // initialise index
    let index = 0;

    // current text
    let currentText = '';

    // letter
    let letter = '';

    (function type(){
        // if count goes through all texts
        // if(count === texts.length){
        //     // reset the count
        //     count = 0;
        // }
        // set current text as respective text
        currentText = texts[count];

        // go over each letter of texts array items and assign to letter
        letter = currentText.slice(0, ++index);

        // output letter to .typing
        document.querySelector('.typing').textContent = letter;

        if(letter.length === currentText.length){
            // move on to next texts array item
            count++;

            // reset index
            index = 0;
        }
        setTimeout(type, 100);
    }());
}