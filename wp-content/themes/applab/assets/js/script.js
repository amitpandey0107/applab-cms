$(document).ready(function () {


	jQuery('.clientSlider').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })

    jQuery('.testimonialsSlider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fa-plus fa-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

	/* Sticky Menu */
	jQuery(function(){
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() >= 100) {
	            jQuery('.siteheader').addClass('stickyTop');
	        }
	        else {
	            jQuery('.siteheader').removeClass('stickyTop');
	        }
	    });
	});



	// Toggle Main Menu for Mobile View
	jQuery('.mobileMenu').on('click tap', function() {
		jQuery('.menuwrapper').show();
	    setTimeout(function(){ 
	    	jQuery('body').addClass('bodyoverlay');
	    },0);
	    
	});

	jQuery('.menuclose').on('click tap', function() {
		jQuery('.menuwrapper').hide();
		setTimeout(function(){ 
	    	jQuery('body').removeClass('bodyoverlay');
	    },0);
	});

	new WOW().init();
	$('.wow').on('scrollSpy:exit',function(){
        $(this).css({
            'visibility' : 'hidden',
            'animation-name' : 'none'
        }).removeClass('animated');
        wow.addBox(this);
    });
	$("section, header, footer").addClass("wow fadeIn");
	
})