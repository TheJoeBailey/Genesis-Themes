jQuery(function( $ ){

// Enable sticky header when user scrolls
var  sh = $(".site-header");
	     shs = "site-header-scrolled";

	$(window).on("scroll", function(){
	  if($(window).scrollTop() > 400){
	    sh.addClass(shs);
	  }
	  else {
	    sh.removeClass(shs);
	  }
	});

});
