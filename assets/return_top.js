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
    scrollTo(document.documentElement, 0, 300);
}

function scrollTo(element, to, duration) {
    var start = element.scrollTop,
        change = to - start,
        currentTime = 0,
        increment = 20;

    var animateScroll = function() {
        currentTime += increment;
        var val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

//t = current time
//b = start value
//c = change in value
//d = duration
Math.easeInOutQuad = function(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
};