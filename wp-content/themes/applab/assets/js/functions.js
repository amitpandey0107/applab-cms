jQuery(document).ready(function(){

	/* ==== Homepage Slider ====== */
	jQuery('.slider-owl-1').owlCarousel({
		loop: true,
		margin:0,
		items:1,
		auto: true,
		dots: true,
		autoplay: true,
		nav: true,
		autoHeight:true,
	});
	jQuery('#home-slider .slider-owl-1 .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('#home-slider .slider-owl-1 .owl-next').html('<i class="fa fa-angle-right"></i>');

	// ============= MOBILE MENU =============
	jQuery('#menu_icon').on('click', function(){
	    jQuery('#toggle_mobile_menu').slideToggle();
	});

	jQuery('.main_nav > ul > li.has_child').append('<i class="fa fa-caret-down dropdown_icon"></i>');
	jQuery('.main_nav > ul > li > i.dropdown_icon').on('click tap', function(){
       jQuery(this).prev().toggle();
       jQuery(this).toggleClass('fa-caret-up fa-caret-down');
  });


	
	/* ==== News Slider ====== */
	jQuery('.news_slider').owlCarousel({
		loop: true,
		margin:0,
		items:3,
		auto: true,
		dots: true,
		autoplay: true,
		nav: true,
		autoHeight:true,
		responsive: {
			0: { items:1},
			640: { items:2},
			1000: { items:3}
		}
	});
	jQuery('.news_slider .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('.news_slider .owl-next').html('<i class="fa fa-angle-right"></i>');

	/* ==== Testimonials Slider ====== */
	jQuery('.testimonials_slider').owlCarousel({
		loop: true,
		margin:0,
		auto: true,
		dots: true,
		autoplay: true,
		autoplayTimeout: 5000,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: { items:1},
			640: { items:1},
			1000: { items:1}
		}
	});
	jQuery('.testimonials_slider .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('.testimonials_slider .owl-next').html('<i class="fa fa-angle-right"></i>');

	/* ==== Gallery Slider ====== */
	jQuery('.sliderGallery').owlCarousel({
		loop: true,
		margin:0,
		auto: true,
		dots: true,
		autoplay: true,
		autoplayTimeout: 3500,
		// nav: true,
		responsiveClass: true,
		responsive: {
			0: { items:2},
			640: { items:3},
			1000: { items:5}
		}
	});
	jQuery('.sliderGallery .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('.sliderGallery .owl-next').html('<i class="fa fa-angle-right"></i>');

	/* ============= TEAM STATISTICS SLIDER ============= */	
	jQuery('.team_stats_slider').owlCarousel({
		loop: true,
		margin:0,
		auto: true,
		dots: true,
		autoplay: true,
		autoplayTimeout: 5000,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: { items:1},
			640: { items:1},
			1000: { items:1}
		}
	});
	jQuery('.team_stats_slider .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('.team_stats_slider .owl-next').html('<i class="fa fa-angle-right"></i>');


	/* ============= NEXT MATCHES SLIDER ============= */	
	jQuery('.slider_Next_Match').owlCarousel({
		loop: true,
		margin:0,
		auto: true,
		dots: true,
		autoplay: true,
		autoplayTimeout: 5000,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: { items:1},
			640: { items:1},
			1000: { items:1}
		}
	});
	jQuery('.slider_Next_Match .owl-prev').html('<i class="fa fa-angle-left"></i>');
	jQuery('.slider_Next_Match .owl-next').html('<i class="fa fa-angle-right"></i>');

});
