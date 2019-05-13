

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

	// buscador
	// Focus Covers Full Area
$(function() {
	$("#custom-search").click(function() {
		$(".search-query").focus();
	  });
});


	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	$('.miniaturas').click(function() {
	
		var bm = $(this).attr('style')
		$('#prueba').attr('style', bm)
  
	});

				 
	$(function(){
        $(window).scroll(function(){
			if (screen.width >= 600) {
            if ($(window).scrollTop() > 30)
            {
				$(".navbar").addClass("nav-s");
				$(".logo-w").addClass("quit");
				$(".two").addClass("two-bg");
            }
            else
            { 
				$(".navbar").removeClass("nav-s");
				$(".logo-w").removeClass("quit");
				$(".two").removeClass("two-bg");
            }
			}
        });
		});	
		



	// $(".miniaturas").click(function() {
		// var miniatura = $(this).attr("miniatura");
	
	// 	var first = $('.miniaturas').first()
	// 	$(first).attr('style')
  
	// 	$('#prueba').atrr('style', first)
	// 	console.log();
	// //   });

	 

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

$('.slider-for').slick({
	slidesToShow: 1,
	// autoplay:true,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
	slidesToShow: 5.8,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: true,
	focusOnSelect: true,
	autoplay:true,
	
  });
 
// img miniatura

$(function() {  
  $('.btn-6')
    .on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
    	$(this).find('span').css({top:relY, left:relX})
    });
  $('[href=#]').click(function(){return false});
});
setTimeout(function () {
  $('#eapps-instagram-feed-1').find('a').last().css('display', 'none')
}, 1500)
})(jQuery);

