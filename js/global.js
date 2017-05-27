jQuery(document).ready(function($) {
	
	
	// Enable dropdown menus on touch devices
	$( '.main-menu li:has(ul)' ).doubleTapToGo();
	
	
	// Toggle navigation
	$(".nav-toggle").on("click", function(){	
		$(this).toggleClass("active");
		$(".mobile-navigation").slideToggle();
		return false;
	});
    $(".mobile-menu-open-icon").on("click", function(){ 
          console.log('open!');
          $(".mobile-menu-open-icon").toggle();
          $(".mobile-menu-close-icon").toggle();
          $(".main-menu").toggle();
          return false;
    });
    $(".mobile-menu-close-icon").on("click", function(){  
          console.log('close!');
          $(".mobile-menu-open-icon").toggle();
          $(".mobile-menu-close-icon").toggle();
          $(".main-menu").toggle();
          return false;
    });
	
	
	// Hide mobile-navigation > 900
  /*
	$(window).resize(function() {
    var prev = $(window).width();
		if ($(window).width() > 900) {
      console.log("resize: width > 900");
      $(".mobile-menu-open-icon").hide();
      $(".mobile-menu-close-icon").hide();
      $(".main-menu").css("display","inline-block");
		} else if ($(window).width() <= 900 && !$('.main-menu').is(':visible')) {
      console.log("resize: width <= 900");
      $(".mobile-menu-open-icon").show();
      $(".mobile-menu-close-icon").hide();
      $(".main-menu").hide();
    }
	});
	*/
	// Load Flexslider
    $(".flexslider").flexslider({
        animation: "slide",
        controlNav: true,
        smoothHeight: true,
        nextText: '<span class="fa fw fa-angle-right"></span>',
        prevText: '<span class="fa fw fa-angle-left"></span>',
    });

        			
	// resize videos after container
	var vidSelector = ".post iframe, .post object, .post video, .widget-content iframe, .widget-content object, .widget-content iframe";	
	var resizeVideo = function(sSel) {
		$( sSel ).each(function() {
			var $video = $(this),
				$container = $video.parent(),
				iTargetWidth = $container.width();

			if ( !$video.attr("data-origwidth") ) {
				$video.attr("data-origwidth", $video.attr("width"));
				$video.attr("data-origheight", $video.attr("height"));
			}

			var ratio = iTargetWidth / $video.attr("data-origwidth");

			$video.css("width", iTargetWidth + "px");
			$video.css("height", ( $video.attr("data-origheight") * ratio ) + "px");
		});
	};

	resizeVideo(vidSelector);

	$(window).resize(function() {
		resizeVideo(vidSelector);
	});
	
});

( function( $ ) {
    $( document.body ).on( 'post-load', function () {
        $('.infinite-loader').remove();
        $('.posts .clear').remove();
		$('.posts').append('<div class="clear"></div>');
    } );
} )( jQuery );
