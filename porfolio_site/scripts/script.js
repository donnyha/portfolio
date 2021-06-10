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
}