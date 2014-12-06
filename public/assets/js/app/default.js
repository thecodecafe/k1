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
			topbars_height;

		// initialize foundation
		$(document).foundation();

		//Window scroll events
		$(window).scroll(function(event) {

			scrollheight = $(this).scrollTop();
			topbars_height = $(".nav-bar.small").outerHeight();
			
			if (scrollheight > 60) {

				$(".top-bars").addClass('fixed');

			}
			else{

				$(".top-bars").removeClass('fixed');

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

		show_hide_search_form();

		show_hide_jobs_filter();

		show_hide_profiles_filter();


	};

	var profile_edit_options_toggle = function()
	{
		if ($("div").hasClass('profile') && $('div').hasClass('edit-profile-options')) {

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

		$(".nav-bar.small .menu-toggler a").on("click", function(event) {

			//$(this).off("click");

			if ($(".nav-bar.small ul.menu").is(":visible")) {


				$(".nav-bar.small ul.menu").slideUp('50', function(){

					//mobile_menu_toggle();
				});			

			}
			else{

				$(".nav-bar.small ul.menu").slideDown('50', function(){

					//mobile_menu_toggle();
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

	var show_hide_search_form = function(){

		var show_button = $(".show-searchbar-button"),
			hide_button = $(".topbar-search-form .hide-button"),
			form = $("form.topbar-search-form");

			show_button.click(function(event){

				form.slideDown("fast");

				event.preventDefault();
			});

			hide_button.click(function(event){

				form.slideUp("fast");

				event.preventDefault();
			});
	}

	var show_hide_profiles_filter = function(){

		if ($("div").hasClass("profile") && $("a").hasClass("profiles-filter-button")) {


			var button = $("a.profiles-filter-button"),
				filter_pane = $(".profile .profiles-filter-pane");
				filter_pane_close = $(".profile .profiles-filter-pane .close-filter");

				button.click(function(event){

					if (filter_pane.is(":visible")) {

						filter_pane.slideUp("fast");

					}
					else{

						filter_pane.slideDown("fast");

						// filter_pane.one("mouseleave", function(event){

						// 	filter_pane.delay(500).slideUp("fast");

						// 	event.preventDefault();
						// });

					}

					event.preventDefault();

				});

				filter_pane_close.click(function(event){

					filter_pane.slideUp("fast");

					event.preventDefault();

				});

				$(".profiles-loader").delay(1000).fadeOut("fast");

		}
	}

	var show_hide_jobs_filter = function(){

		if ($("div").hasClass("jobs") && $("a").hasClass("jobs-filter-button")) {


			var button = $("a.jobs-filter-button"),
				filter_pane = $(".jobs .filter-pane"),
				filter_pane_close = $(".jobs .filter_pane .close-filter");

				button.click(function(event){

					if (filter_pane.is(":visible")) {

						filter_pane.slideUp("fast");

					}
					else{

						filter_pane.slideDown("fast");

						// filter_pane.one("mouseleave", function(event){

						// 	filter_pane.delay(500).slideUp("fast");

						// 	event.preventDefault();
						// });

					}

					event.preventDefault();

				});


				filter_pane_close.click(function(event){

					filter_pane.slideUp("fast");

					event.preventDefault();

				});

				$(".jobs-loader").delay(1000).fadeOut("fast");

		}
	}

	var masonry_start = function(){

		var container = document.querySelector('#js-masonry-container');
		var msnry = new Masonry( container, {
		  // options...
		  itemSelector: '.item',
		  columnWidth: 0,
		  gutter: 0
		});
	}


	this.init = function(){

		autoloads();
		masonry_start();

	};

}

$(function(){

	k1app.init();

});