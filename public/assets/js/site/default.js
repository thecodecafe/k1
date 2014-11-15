var k1site = new function(){

	var homesliderindex = 1,
		htcindex = 1,
		fie_timer = 0;

	function flyineffect() {

	    var window_top = $(this).scrollTop();
	    var window_height = $(this).height();
	    var view_port_s = window_top;
	    var view_port_e = window_top + window_height;
	    
	    if ( fie_timer ) {
	      clearTimeout( fie_timer );
	    }
	    
	    $('.ffb').each(function(){
	      var block = $(this);
	      var block_top = block.offset().top;
	      var block_height = block.height();
	      
	      if ( block_top < view_port_e ) {
	        fie_timer = setTimeout(function(){
	          block.addClass('show-block');
	        },100);       
	      } else {
	        fie_timer = setTimeout(function(){
	          block.removeClass('show-block');
	        },100);          
	      }
	    });

	    $('.ffl').each(function(){
	      var block = $(this);
	      var block_top = block.offset().top;
	      var block_height = block.height();
	      
	      if ( block_top < view_port_e ) {
	        fie_timer = setTimeout(function(){
	          block.addClass('show-block');
	        },100);       
	      } else {
	        fie_timer = setTimeout(function(){
	          block.removeClass('show-block');
	        },100);          
	      }
	    });

	    $('.fft').each(function(){
	      var block = $(this);
	      var block_top = block.offset().top;
	      var block_height = block.height();
	      
	      if ( block_top < view_port_e ) {
	        fie_timer = setTimeout(function(){
	          block.addClass('show-block');
	        },100);       
	      } else {
	        fie_timer = setTimeout(function(){
	          block.removeClass('show-block');
	        },100);          
	      }
	    });

	    $('.ffr').each(function(){
	      var block = $(this);
	      var block_top = block.offset().top;
	      var block_height = block.height();
	      
	      if ( block_top < view_port_e ) {
	        fie_timer = setTimeout(function(){
	          block.addClass('show-block');
	        },100);       
	      } else {
	        fie_timer = setTimeout(function(){
	          block.removeClass('show-block');
	        },100);          
	      }
	    });
	}


	var autoloads = function(){
		//predefine variables
		var scrollheight,
			mobile_menu_height;

		// initialize foundation
		$(document).foundation();

		//Window scroll events
		$(window).scroll(function(event) {

			scrollheight = $(this).scrollTop();
			mobile_menu_height = $(".nav-bar.small").outerHeight();
			
			if (scrollheight > 60) {

				$(".nav-bar.large").addClass('fixed');

			}
			else{

				$(".nav-bar.large").removeClass('fixed');

			}

			if (scrollheight > mobile_menu_height) {

				$(".nav-bar.small").addClass('fixed');

			}
			else{

				$(".nav-bar.small").removeClass('fixed');

			}

			//Call function here
			flyineffect();


		});

		$(window).resize(function(event) {

			//Call function here
			flyineffect();
		});
		

		//Call functions from here
		flyineffect();

		mobile_menu_toggle();


	};

	var mobile_menu_toggle = function(){

		$(".nav-bar.small .menu-toggler span").on("click", function(event) {

			$(this).off("click");

			if ($(".nav-bar.small ul.menu").is(":visible")) {


				$(".nav-bar.small ul.menu").slideUp('50', function(){

					mobile_menu_toggle();
				});			

			}
			else{

				$(".nav-bar.small ul.menu").slideDown('50', function(){

					mobile_menu_toggle();
				});
			}

			event.preventDefault();

		});
	}

	// Home header slider
	function homeslider()
	{
		if ($("div").hasClass('index') && $("div").hasClass('home-slider')) 
		{
			var slideinterval,
				homeslidercounter = 1;

			$(".home-slider .sc-list li").each(function() {

				$(this).addClass('hsn'+homeslidercounter);
				
				homeslidercounter++;
			});

			slideinterval = setInterval(homeslideraction, 8000);
		};
	}

	// Home header slider slide action
	function homeslideraction(){

		var current_top;

		if (homesliderindex == $(".home-slider .sc-list li").size())
			{
				homesliderindex = 1;
			}
		else{

			homesliderindex++;
		}

		current_to = $(".hsn"+homesliderindex).position().top;

		$(".home-slider .sc-list").stop().animate({
			top: -current_to
		}, 800);

	}

	// Home testimonial carousel
	function hometestimonialcarousel()
	{
		if ($("div").hasClass('index') && $("div").hasClass('testimonial-carousel')) 
		{
			var carouselinterval,
				homecarouselcounter = 1;

			$(".testimonial-carousel .tc-inner .tc-content").each(function() {

				$(this).addClass('htc'+homecarouselcounter);

				if (homecarouselcounter == 1) {

					$(".testimonial-carousel .tc-nav").append('<a href="#" class="active tcn-bullet htcnb'+homecarouselcounter+'" data-index="'+homecarouselcounter+'"><i class="fa fa-circle"></i></a>');

				}
				else{

					$(".testimonial-carousel .tc-nav").append('<a href="#" class="tcn-bullet htcnb'+homecarouselcounter+'" data-index="'+homecarouselcounter+'"><i class="fa fa-circle"></i></a>');
				}
				
				homecarouselcounter++;
			});

			htcaction();
		};
	}

	// Home testimonial carousel slide action
	function htcaction(){

		var current_left;

		$(".tc-nav .tcn-bullet").on("click", function(event){

			htcindex = $(this).attr("data-index");

			current_left = $(".htc"+htcindex).position().left;

			$(".tc-nav .tcn-bullet").removeClass('active');

			$(".htcnb"+htcindex).addClass('active');

			$(".testimonial-carousel .tc-inner").stop().animate({
				left: -current_left
			}, 400);

			event.preventDefault();
		});

		/*$(".testimonial-carousel").on("swipeleft", function(event){

			if (htcindex == $(".testimonial-carousel .tc-inner .tc-content").size()) {

				//do nothing
			}
			else{

				htcindex++;

			}

			current_left = $(".htc"+htcindex).position().left;

			$(".tc-nav .tcn-bullet").removeClass('active');

			$(".htcnb"+htcindex).addClass('active');

			$(".testimonial-carousel .tc-inner").stop().animate({
				left: -current_left
			}, 400);

		});

		$(".testimonial-carousel").on("swiperight", function(event){

			if (htcindex < 2) {

				htcindex = 1;
			}
			else{

				htcindex--;

			}

			current_left = $(".htc"+htcindex).position().left;

			$(".tc-nav .tcn-bullet").removeClass('active');

			$(".htcnb"+htcindex).addClass('active');

			$(".testimonial-carousel .tc-inner").stop().animate({
				left: -current_left
			}, 400);

		});*/

	}

	this.init = function(){

		autoloads();
		homeslider();
		hometestimonialcarousel();

	};

}

$(function(){

	k1site.init();

});