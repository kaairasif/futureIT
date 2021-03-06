$(document).ready(function(){
  
  $(".main-nav").sticky({topSpacing:0});

  $(".client-carousel").owlCarousel({
  	items:4,
  	margin: 20,
  	nav:true,
  	navText: "",
  	// autoplay: true,
  });


  $(".experts-carousel").owlCarousel({
  	items:4,
  	margin: 20,
    autoplay:true,
    loop:true
  });

  $(".main-carousel").owlCarousel({
  	items:1,
  	margin: 0,
  	autoplay:true,
  	loop:true,
  	smartSpeed: 1600,
  	autoplayTimeout: 7000,  	
  	onTranslate: function(){
  		$(".main-carousel .caption").addClass("translate");
  	},
  	onTranslated: function(){
  		$(".main-carousel .caption").removeClass("translate");
  	}
  });

  $(".dropdown").on("mouseenter", function(){
		$(this).addClass("show")
  });
  
  $(".dropdown").on("mouseleave", function(){
		$(this).removeClass("show")
  });



});