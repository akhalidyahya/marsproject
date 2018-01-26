$(document).ready(function() {
 
	// Navigation
	$(".menu-link").click(function(e) {
	    e.preventDefault();
	    $(".menu").toggleClass("open");
	    $(".menu-overlay").toggleClass("open");
	    $("body").toggleClass("open");
 	});

	// Hero Slider
	$("#hero-slider").owlCarousel({
	 		
	 	nav: false,
	    loop: true,

	    autoplay: true,
	    autoplayTimeout:4000,
	 
	    slideSpeed : 300,
	    paginationSpeed : 400,
	 
	    items : 1, 
	    itemsDesktop : false,
	    itemsDesktopSmall : false,
	    itemsTablet: false,
	    itemsMobile : false
	
	});

	//animasi scroll
	$(".scroll").click(function(event){		
	  	event.preventDefault();
	  	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000 /*untuk berapa detik*/);
  	});
});
