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
	});

} ( this, jQuery ));