

'use strict';


$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");

});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$('.header-section .container').append('<div class="mobile-nav-switch"><i class="fa fa-bars"></i></div><ul class="mobile-menu"></ul>')
	var m1 = $('.main-menu-left ').children().clone();
	var m2 = $('.main-menu-right ').children().clone();
	$('.mobile-menu').append(m1,m2);
	$('.mobile-nav-switch').on('click', function () {
		$('.mobile-menu').slideToggle();
	});


	// Search model
	$('.search-switch').on('click', function() {
		$('.search-model').fadeIn(400);
	});

	$('.search-close-switch').on('click', function() {
		$('.search-model').fadeOut(400,function(){
			$('#search-input').val('');
		});
	});

	

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});




	/*------------------
		Portfolio
	--------------------*/

	// Portfolio item height 
	var PorfolioItemFix = function () {
		var portfolioItem = $('.portfolio-item');
		var PIheight = portfolioItem.width();
		var h = PIheight;
		var wideH = (h * 2);
		portfolioItem.css('height',h);
		if(window.innerWidth > 479){
			$('.portfolio-item.--big').css('height',wideH);
		} else {
			$('.portfolio-item.--big').css('height',h);
		}
		
	}
	PorfolioItemFix();

	$(window).on('resize',function(){
		PorfolioItemFix();
	});


	var $container = $('.portfolio-gallery');
	$container.isotope();

	$('.portfolio-filter li').on("click", function(){
		$(".portfolio-filter li").removeClass("active");
		$(this).addClass("active");
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
		});
		return false;
	});

	// Popup view
	$('.portfolio-view').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'img-popup-warp',
		removalDelay: 500,
	});

	
	/*------------------
		Blog Masonry
	--------------------*/
	$('.blog-grid').isotope();
	


// slick
// $('.titulo').slick({
// 	infinite: true,
// 	slidesToShow: 3,
// 	slidesToScroll: 3
//   });



})(jQuery);
