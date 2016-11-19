/*
* INFO/CS 1300
* Fall 2016
* Assignment 7
* Rui Min
*/

// original color of body
var spring_color_body; 
// original color of nav
var spring_color_nav;

$(document).ready(function () {
    // pragma
    "use strict";
    // get the orignal color
    spring_color_body = $("body").css("background-color");
    spring_color_nav = $("nav").css("background-color");

    // animate the car
    $("#car").click(function () {
    	// the distance the car moves is: width of body - width of car - left position of car
    	var distance = parseInt($("body").css("width")) - parseInt($(this).css("width")) - parseInt($(this).position().left);
        $(this).animate({marginLeft: distance.toString()}, 1000);
    });

    // hide the footer
    $("#hider").click(function () {
        $("footer").hide();
    });

    // flag of showing the ghost image
    var show = 0;
    // fade in and fade out the ghost image
    $("#ghost_text").click(function () {
    	if ( show == 0 ) {
    		$("#ghost").fadeIn(3000);
    		show = 1;
    	}
    	else {
    		$("#ghost").fadeOut(3000);
    		show = 0;
    	}
    });
});

// function of set spring theme
function setSpringTheme() {
	$("body").css("background-color", spring_color_body);
	$("nav").css("background-color", spring_color_nav);
}

// function of set fall theme
function setFallTheme() {
	$("body").css("background-color", "orange");
	$("nav").css("background-color", "#f48c42")
}