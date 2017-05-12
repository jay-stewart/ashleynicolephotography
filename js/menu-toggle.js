var $ = jQuery.noConflict();

$( '.menu-toggle' ).click(function() {

  $( '.main-navigation' ).toggleClass( 'toggled-on' );
  $( '.menu-toggle' ).toggleClass( 'toggled-on' );
});