/**
 * Return to top function shows the return to top button after the user scrolls down the page a bit
 * taken from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top
 * by Jack Rose
 */

var actHeight = 400; //(in px)

// When the user scrolls down <actHeight> px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > actHeight || document.documentElement.scrollTop > actHeight) {
        document.getElementById("btn-return-top").classList.add("show");
    } else {
        document.getElementById("btn-return-top").classList.remove("show");
    }
}

document.getElementById("btn-return-top").onclick = function() {

    jQuery("html, body").animate({ scrollTop: 0 }, 800);
    return false;
}