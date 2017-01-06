/*-------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------ FUNCTIONS BEGIN --------------------------------------------------*/
/*-------------------------------------------------------------------------------------------------------------*/



/*------------------------------ Scroll Up binding ------------------------------ */  

function scrollUpBinding(){
	"use strict";
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});
	
	
	$('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
}


/*------------------------------ fireUpBackstretch ----------------------------
function fireUpBackstretch() {
    $("#backstretch").backstretch([
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/08/KasprickMoran-Engagement-Websize-114.jpg",
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/09/GagneGreenwood-Maternity2015-Web-102.jpg",
	"http://www.ashleynicolephotography.ca/wp-content/uploads/2015/10/HollingerJohnson-Wedding-Web-291.jpg"
  ], {duration: 3500, fade: 950});
}
-- */  


function fireUpBackstretch() {
    $("#backstretch").backstretch( php_vars, {duration: 3500, fade: 950});
}


/* make backstretch full screen */
function fullscreenBackstretch() {
	vpw = $(window).width();
	vph = $(window).height();
		$("#backstretch").css({"height": vph + "px"});
}



/* menu toggle button */
function menuToggle() {

    jQuery('.menu-toggle').click(function(e) {
        jQuery('.main-navigation').toggleClass('toggled');
		jQuery('.menu').toggleClass('open');
 
        e.preventDefault();
    });
}



/*---------------------------- remove img size attr ----------------------------- */ 
// Remove img size attributes from img tage with .img-responsive class added
function remove_img_size_attr() {
    $('.img-responsive').removeAttr('width').removeAttr('height');
};



/*-------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------- FUNCTIONS END ---------------------------------------------------*/
/*-------------------------------------------------------------------------------------------------------------*/


var $ = jQuery.noConflict();
$(document).ready(function () {
	"use strict";
	
	scrollUpBinding();
	
    remove_img_size_attr();
	
    /* Initiate Backstretch if #backstretch element present */
    if ( $('#backstretch').length ) {
        fireUpBackstretch();
    };
	
	fullscreenBackstretch();
	
	menuToggle();
	
});


window.onresize = function(event) {
fullscreenBackstretch();
}