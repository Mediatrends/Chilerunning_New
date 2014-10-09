(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		$('.menu-item-4').hover(
			function(){
				$('.menu-item-4').append('<svg id="svg_calendar" viewBox="0 0 144.777 144.777"><use xlink:href="#svg_icon_calendar"></use></svg>');
				$('#svg_calendar').animate({
					opacity:1,
					top:-10
				});
				$('.menu-item-4 a').animate({
					marginTop:10
				},1000);
			},
			function(){
				$('#svg_calendar').animate({opacity:0,top:0}).remove();
				$('.menu-item-4 a').animate({
					marginTop:0
				});
			}
		);

		/*$('.menu-item-4 a svg').mouseout(function(){
			$('#svg_calendar').animate({
				top:20,
				opacity:0
			},function(){
				$('#svg_calendar').remove();
			});
		});*/

	});

} ( this, jQuery ));