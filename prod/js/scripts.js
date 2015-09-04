(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away

		enquire.register('(max-width:1281px)', {
			match : function() {
				menu_efect_mobile();
			},
			destroy : function() {
				menu_efect_mobile();
			}
		});
		enquire.register('(min-width:1282px) and (max-width:1920px)', {
			match : function() {
				menu_effect();
			},
			destroy : function() {
				menu_effect();
			}
		});
		//MENU EFFECT - REPEAT ALL -
		function menu_efect_mobile(){
			$('#menu-item-72 a').before('<svg viewBox="-7.457 1.936 25.812 30.534"><use xlink:href="#svg_icon_menu-entrena"></use></svg>');
			$('#menu-item-73 a').before('<svg viewBox="151.315 198.005 522.525 339.698"><use xlink:href="#svg_icon_menu-equipa"></use></svg>');
			$('#menu-item-74 a').before('<svg viewBox="179.293 83.193 431.321 466.187"><use xlink:href="#svg_icon_menu-battery"></use></svg>');
			$('#menu-item-75 a').before('<svg viewBox="11.993 12.295 26.016 25.412"><use xlink:href="#svg_icon_menu-salud"></use></svg>');
			$('#menu-item-71 a').before('<svg viewBox="0 0 144.777 144.777"><use xlink:href="#svg_icon_calendar"></use></svg>');
		}

		function menu_effect(){
			$('.menu-item-71').hover(
				function(){
					$('.menu-item-71').stop(true).append('<svg id="svg_calendar" viewBox="0 0 144.777 144.777"><use xlink:href="#svg_icon_calendar"></use></svg>');

					$('.menu-item-71 a').stop(true).animate({
						marginTop:10
					});
					$('.menu-item-71 svg').stop(true).animate({
						opacity:1,
						top:-10
					});
				},
				function(){
					$('.menu-item-71 svg').stop(true).animate({opacity:0,top:0});
					$('.menu-item-71 a').stop(true).animate({
						marginTop:0
					},function(){
						$('.menu-item-71 svg').remove();
					});
			});

			$('.menu-item-75').hover(
				function(){
					$('.menu-item-75').stop(true).append('<svg id="svg_calendar" viewBox="11.993 12.295 26.016 25.412"><use xlink:href="#svg_icon_menu-salud"></use></svg>');

					$('.menu-item-75 a').stop(true).animate({
						marginTop:10
					});
					$('.menu-item-75 svg').stop(true).animate({
						opacity:1,
						top:-10
					});
				},
				function(){
					$('.menu-item-75 svg').stop(true).animate({opacity:0,top:0});
					$('.menu-item-75 a').stop(true).animate({
						marginTop:0
					},function(){
						$('.menu-item-75 svg').remove();
					});
			});

			$('.menu-item-74').hover(
				function(){
					$('.menu-item-74').stop(true).append('<svg id="svg_calendar" viewBox="179.293 83.193 431.321 466.187"><use xlink:href="#svg_icon_menu-battery"></use></svg>');

					$('.menu-item-74 a').stop(true).animate({
						marginTop:10
					});
					$('.menu-item-74 svg').stop(true).animate({
						opacity:1,
						top:-10
					});
				},
				function(){
					$('.menu-item-74 svg').stop(true).animate({opacity:0,top:0});
					$('.menu-item-74 a').stop(true).animate({
						marginTop:0
					},function(){
						$('.menu-item-74 svg').remove();
					});
			});

			$('.menu-item-73').hover(
				function(){
					$('.menu-item-73').stop(true).append('<svg id="svg_calendar" viewBox="151.315 198.005 522.525 339.698"><use xlink:href="#svg_icon_menu-equipa"></use></svg>');

					$('.menu-item-73 a').stop(true).animate({
						marginTop:10
					});
					$('.menu-item-73 svg').stop(true).animate({
						opacity:1,
						top:-10
					});
				},
				function(){
					$('.menu-item-73 svg').stop(true).animate({opacity:0,top:0});
					$('.menu-item-73 a').stop(true).animate({
						marginTop:0
					},function(){
						$('.menu-item-73 svg').remove();
					});
			});

			$('.menu-item-72').hover(
				function(){
					$('.menu-item-72').stop(true).append('<svg id="svg_calendar" viewBox="-7.457 1.936 25.812 30.534"><use xlink:href="#svg_icon_menu-entrena"></use></svg>');

					$('.menu-item-72 a').stop(true).animate({
						marginTop:10
					});
					$('.menu-item-72 svg').stop(true).animate({
						opacity:1,
						top:-10
					});
				},
				function(){
					$('.menu-item-72 svg').stop(true).animate({opacity:0,top:0});
					$('.menu-item-72 a').stop(true).animate({
						marginTop:0
					},function(){
						$('.menu-item-72 svg').remove();
					});
			});
		}

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

		$('.wrapper #motiva').last().addClass('last_mot');
		$('.wrapper #motiva').first().addClass('first_mot');

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
		$('#searching').click(function(){

			$('.cont_search').toggle(function(){
				$('.cont_search').animate({
					height:'40px'
				}).stop(true);
			},function(){
				$('.cont_search').animate({
					height:'1px'
				}).stop(true);
			});

		});

		//addthis counter
    	//addthis.counter(".atcounter");

    	//social share alone
    	$('.prettySocial').prettySocial();

    	function render_map( $el ) {

			// var
			var $markers = $el.find('.marker');

			// vars
			var args = {
				zoom		: 14,
				center		: new google.maps.LatLng(0, 0),
				mapTypeId	: google.maps.MapTypeId.ROADMAP
			};

			// create map
			var map = new google.maps.Map( $el[0], args);

			// add a markers reference
			map.markers = [];

			// add markers
			$markers.each(function(){

		    	add_marker( $(this), map );

			});

			// center map
			center_map( map );

		}

		function add_marker( $marker, map ) {

			// var
			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

			// create marker
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map
			});

			// add to array
			map.markers.push( marker );

			// if marker contains HTML, add it to an infoWindow
			if( $marker.html() )
			{
				// create info window
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});

				// show info window when marker is clicked
				google.maps.event.addListener(marker, 'click', function() {

					infowindow.open( map, marker );

				});
			}

		}

		function center_map( map ) {

			// vars
			var bounds = new google.maps.LatLngBounds();

			// loop through all markers and create bounds
			$.each( map.markers, function( i, marker ){

				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

				bounds.extend( latlng );

			});

			// only 1 marker?
			if( map.markers.length == 1 )
			{
				// set center of map
			    map.setCenter( bounds.getCenter() );
			    map.setZoom( 14 );
			}
			else
			{
				// fit to bounds
				map.fitBounds( bounds );
			}

		}

    	$('.acf-map').each(function(){

			render_map( $(this) );

		});

		$(window).scroll(function(){
			if ($(this).scrollTop()>200) {

				$('.bg-newsletter').show();

		        $('.newsletter-new-suscribe').fadeIn(1000,function(){

		        	$('.first-box-popups').addClass('borderHeightsAnimate');

		        	$('.close-button-popups').delay(100).animate({
		        		'opacity':'1'
		        	},{duration:100,
		        		complete:function(){

			        		$('.title-popups').animate({
			        			opacity:1,
			        			top:20
			        		},{duration:1000,
			        			complete:function(){

				        			$('.body-popups').delay(100).animate({opacity:1,top:130},{duration:1000});
				        			$('.arrow-middle').delay(1150).fadeIn(100).animate({
				        				bottom:'-8px'
				        			});
				        			$('.second-box-popups').delay(1000).show().animate({marginTop:0},{duration:1000});
											alert('holi');
					        	}
				        	}).slideDown(1000);

		        	}
		        	}).click(function(){
					    $('.newsletter-new-suscribe, .bg-newsletter, .newsletter-footer').remove();
					});

		        });
			}
		});

	});



} ( this, jQuery ));
