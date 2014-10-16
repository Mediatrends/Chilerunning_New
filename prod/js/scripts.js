(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		//MENU EFFECT - REPEAT ALL -
		$('.menu-item-4').hover(
			function(){
				$('.menu-item-4').stop(true).append('<svg id="svg_calendar" viewBox="0 0 144.777 144.777"><use xlink:href="#svg_icon_calendar"></use></svg>');

				$('.menu-item-4 a').stop(true).animate({
					marginTop:10
				});
				$('.menu-item-4 svg').stop(true).animate({
					opacity:1,
					top:-10
				});
			},
			function(){
				$('.menu-item-4 svg').stop(true).animate({opacity:0,top:0});
				$('.menu-item-4 a').stop(true).animate({
					marginTop:0
				},function(){
					$('.menu-item-4 svg').remove();
				});
		});

		//SWIPE SLIDER 
		window.mySwipe = new Swipe(document.getElementById('slider'), {
		  startSlide: 1,
		  speed: 1000,
		  auto: 3000,
		  continuous: true,
		  disableScroll: false,
		  stopPropagation: false,
		  callback: function(index, elem) {},
		  transitionEnd: function(index, elem) {}
		});

		//BOXES LOOPS
		$('.wrapper #entrena').last().addClass('last');
		$('.wrapper #entrena').first().addClass('first');
		$('.wrapper #entrena.first').after(
			'<div id="entrena" class="entrena_ad"></div>'
		);

		$('.wrapper #motiva').last().addClass('last_mot');
		$('.wrapper #motiva').first().addClass('first_mot');
		$('.wrapper #motiva.first_mot').after(
			'<div id="motiva" class="motiva_ad"></div>'
		);

		$('.wrapper .cont_post_calendar .meses .meses_cont .calendar').first().addClass('first');

		//STYCKY HEADER
		var stickyNavTop = $('.header').offset().top;  
  
		var stickyNav = function(){
			var scrollTop = $(window).scrollTop();  
			       
			if (scrollTop > stickyNavTop) {   
			    $('.header').addClass('sticky');  
			} else {  
			    $('.header').removeClass('sticky');   
			}  
		};

		stickyNav();  
		  
		$(window).scroll(function() {  
		    stickyNav();  
		});

		//SEARCH EFFECT
		$('.search').on('click',function(){

			$('.cont_search').toggle(function(){
				$(this).show().animate({
					height:'40px'
				}).stop(true);
			},function(){
				$('.search').on('click',function(){
					$(this).animate({
						height:'1px'
					}).stop(true);
				});
				
			});
			
		});

	});

} ( this, jQuery ));