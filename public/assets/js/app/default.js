var k1app = new function(){

	var fie_timer = 0;

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

		profile_edit_options_toggle();

		show_search_filter_for_mobile();


	};

	var profile_edit_options_toggle = function()
	{
		if ($("div").hasClass('user') && $('div').hasClass('edit-profile-options')) {

			$('.togglebutton').click(function(event) {
				
				if ($(".edit-profile-options .edit-option").is(":visible")) {

					$(".edit-profile-options .edit-option").hide('fast');
				}
				else{

					$(".edit-profile-options .edit-option").show('fast');

				}
			});
		};
	}

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
	};

	var show_search_filter_for_mobile = function(){

		if ($("div.site-container").hasClass('search')) {

			$("a.msf-trigger").on('click', function(event) {

				$(".msf-list-container").addClass('active');

				$("body").addClass('hide-overflow');

				event.preventDefault();
				/* Act on the event */
			});

			$("a.msf-trigger2").on('click', function(event) {

				$(".msf-list-container").removeClass('active');

				$("body").removeClass('hide-overflow');

				event.preventDefault();
				/* Act on the event */
			});

		}

	};


	this.init = function(){

		autoloads();

	};

}

$(function(){

	k1app.init();

});