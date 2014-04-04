
jQuery(document).ready(function($){
	
	var $window = $(window),
        $menu = $('div.menu');
	
	function checkWindowSize() {
		var width = $window.width();
		if ( width < 824 ) {
			return $menu.addClass('nav-mobile');
		}
		$menu.removeClass('nav-mobile');
	}
	
	$window
        .resize(checkWindowSize)
        .trigger('checkWindowSize');
		
	checkWindowSize();
	
	/* prepend menu icon */
	$('div.menu').prepend('<div id="menu-icon">Menu</div>');
	
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("div.menu > ul").slideToggle();
		$(this).toggleClass("active");
	});
	
	/* jquery cycle */
	var $slider = $('.cycle-slideshow');
	$slider.imagesLoaded( function() {
		$('#load-cycle').hide(); /* preloader */
		$slider.slideDown(1000);
	});
	
	var $container = $('#grid-wrap');
	
	$container.masonry({
	  itemSelector : '.grid-box',
	});
	
	$container.imagesLoaded( function() {
	  $container.masonry({
		  itemSelector : '.grid-box',
	  });
	});
	
	$(window).resize(function() {
		$container.masonry({
		  itemSelector : '.grid-box',
		});
	});
	
	// Fix for Safari
	
	var fixSafariMargin = function() {
		// check if the browser is Safari
		if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {                  
			$('footer[role=contentinfo]').css('display', 'block');
			$('#site-generator').css('display', 'block');
			$('#site-generator').css('padding-top', '25px');
		}
	}
	
	fixSafariMargin();
	
	$(window).resize(function() {
		fixSafariMargin();
	});

});