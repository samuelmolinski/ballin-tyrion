/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/
if(!window.log) {window.log = function() {log.history = log.history || [];log.history.push(arguments);if(this.console) {console.log(Array.prototype.slice.call(arguments));}};}

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
	
	// add all your scripts here

    jQuery("#slider, #slider2, .foto_slider").anythingSlider({
        // Appearance 
          theme               : "default", // Theme name 
          mode                : "fade",    // Set mode to "horizontal", "vertical" or "fade" (only first letter needed); replaces vertical option 
          expand              : false,     // If true, the entire slider will expand to fit the parent element 
          resizeContents      : true,      // If true, solitary images/objects in the panel will expand to fit the viewport 
          showMultiple        : false,     // Set this value to a number and it will show that many slides at once 
          easing              : "swing",   // Anything other than "linear" or "swing" requires the easing plugin or jQuery UI 
          hashTags            : false, 
          
          buildArrows         : true,       // If true, builds the forwards and backwards buttons 
          buildNavigation     : false,      // If true, builds a list of anchor links to link to each panel 
          buildStartStop      : false,      // If true, builds the start/stop button 
         
          appendForwardTo     : null,      // Append forward arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null 
          appendBackTo        : null,      // Append back arrow to a HTML element (jQuery Object, selector or HTMLNode), if not null 
          appendControlsTo    : null,      // Append controls (navigation + start-stop) to a HTML element (jQuery Object, selector or HTMLNode), if not null 
          appendNavigationTo  : null,      // Append navigation buttons to a HTML element (jQuery Object, selector or HTMLNode), if not null 
          appendStartStopTo   : null,      // Append start-stop button to a HTML element (jQuery Object, selector or HTMLNode), if not null 
         
          toggleArrows        : false,     // If true, side navigation arrows will slide out on hovering & hide @ other times 
          toggleControls      : false,     // if true, slide in controls (navigation + play/stop button) on hover and slide change, hide @ other times 
         
          startText           : "Start",   // Start button text 
          stopText            : "Stop",    // Stop button text 
          forwardText         : "&raquo;", // Link text used to move the slider forward (hidden by CSS, replaced with arrow image) 
          backText            : "&laquo;", // Link text used to move the slider back (hidden by CSS, replace with arrow image) 
          tooltipClass        : "tooltip", // Class added to navigation & start/stop button (text copied to title if it is hidden by a negative text indent) 
         
          // Navigation 
          startPanel          : 1,         // This sets the initial panel 
          changeBy            : 1,         // Amount to go forward or back when changing panels. 
          infiniteSlides      : true,      // if false, the slider will not wrap & not clone any panels 
          navigationFormatter : null,      // Details at the top of the file on this use (advanced use) 
         
          // Slideshow options 
          autoPlay            : true,      // If true, the slideshow will start running; replaces "startStopped" option 
          pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover 
          // Times 
          delay               : 5000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds) 
          resumeDelay         : 3000,      // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds). 
          animationTime       : 600,       // How long the slideshow transition takes (in milliseconds) 
          delayBeforeAnimate  : 0,         // How long to pause slide animation before going to the desired slide (used if you want your "out" FX to show).
    });

  //acomodações page

  $('.selectRoom li').click(function() {
      $('.selectRoom li').removeClass('cur');
      $('article').hide();
      $('article:eq('+$(this).index()+')').fadeIn();
      $(this).addClass('cur');
  });
	
  $('.selectRoom li:eq(0)').trigger('click');
  
  initialize();
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );