// This javascript is written by Rui Min rm877
var pix = ["spring.jpg", "summer.jpg", "fall.jpg", "winter.jpg"];
// All pictures are taken by Rui Min
var main_image = document.getElementById("image");
// various width of different images
var widths = [400, 450, 600, 650];
// image index
var index = 0;

// date function
// adapt from class javascript date_maker.js, date_and_season() function
window.onload = function date() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        // get pieces of date
    full_date = new Date(),
    this_month_text = monthNames[full_date.getMonth()],
    // this_month_text = "March",
    today = full_date.getDate(),
    this_year = full_date.getFullYear(),
    // set information up for insertion into DOM tree
    new_span = document.createElement('span'),
    new_text = document.createTextNode( today + ' ' + this_month_text + ' ' + this_year),
    position = document.getElementsByTagName('footer')[0];
    document.getElementById("image").height = 600;
    document.getElementById("image").width = 400;
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
}

// Next image function
function imageNext() {
    "use strict";
    // heights are uniform
    document.getElementById("image").height = 600;
    // If the current image is not the last image, move to the next image
    if ( index < pix.length - 1 ) {
        index += 1;
    }
    // If the current image is the last image, move to the first image
    else {
        index = 0;
    }
    document.getElementById("image").src = 'images/' + pix[index];
    document.getElementById("image").width = widths[index];
}

// Previous image function
function imagePrev() {
    "use strict";
    // heights are uniform
    document.getElementById("image").height = 600;
    // If the current image is the not first image, move to the previous image
    if ( index > 0 ) {
        index -= 1;
    }
    // If the current image is the first image, move to the last image
    else {
        index = pix.length - 1;
    }
    document.getElementById("image").src = 'images/' + pix[index];
    document.getElementById("image").width = widths[index];
}