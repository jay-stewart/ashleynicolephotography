

/*------------------------------ fireUpBackstretch ----------------------------
function fireUpBackstretch() {
    $("#backstretch").backstretch([
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/08/KasprickMoran-Engagement-Websize-114.jpg",
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/09/GagneGreenwood-Maternity2015-Web-102.jpg",
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/10/HollingerJohnson-Wedding-Web-291.jpg"
  ], {duration: 3500, fade: 950});
}
-- */  

/* adjust custom-header height */

function customHeaderHeight() {
	var vph = $(window).height();
	var nbh = $(".top-navbar").height();
	var chh = vph - nbh;
	
		$(".custom-header-image").css({"height": chh + "px"});
}



function startUnslider() {
	$('.slider').unslider({
		autoplay: true, // Should the slider move by itself or only be triggered manually?
		speed: 900, // How fast (in milliseconds) Unslider should animate between slides.
		delay: 4000, // If autoplay is set to true, how many milliseconds should pass between moving the slides?
		index: 'first', // If this is set to an integer, 'first' or 'last', it'll set the default slide to that position rather than the first slide.
		keys: false, // Do you want to add keyboard shortcut support to Unslider? This can be set to either true, false, or an options/keycode object.
		nav: false, // Do you want to generate an automatic clickable navigation for each slide in your slider?
		arrows: false, // Do you want to add left/right arrows to your slider? You can style these in your CSS by writing rules for .unslider-arrow (or alternatively you can change the HTML string to whatever you like and style that).
		animation: 'horizontal', // How should Unslider animate each slide? Right now, there's three different animation types.
		selectors: { container: 'ul:first', slides: 'li' }, // If you're not using an unordered list to display your slider, you'll need to add a selectors object referencing what elements Unslider should look for. The container should be the "conveyor belt" that gets moved, and the slides are - well - the slides.
		animateHeight: false, //Should Unslider animate the height of the container to match the current slide's height? If so, set to true.
		activeClass: 'unslider-active' // What class should Unslider set to the active slides and navigation items? Use this if you want to match your CSS.
	});
};



function fireUpBackstretch() {
    $("#backstretch").backstretch( php_vars, {duration: 3500, fade: 950});
}


/* make backstretch full screen 
function fullscreenBackstretch() {
	vpw = $(window).width();
	vph = $(window).height();
		$("#backstretch").css({"height": vph + "px"});
}
*/

var $ = jQuery.noConflict();
$(document).ready(function () {
	"use strict";
	
	customHeaderHeight();
	startUnslider();
    /* Initiate Backstretch if #backstretch element present */
    if ( $('#backstretch').length ) {
        fireUpBackstretch();
    };
	
	// fullscreenBackstretch();

});

$(window).resize(function () {
	customHeaderHeight();
});