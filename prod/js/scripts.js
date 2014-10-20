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
    	addthis.counter(".atcounter");

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
	});

} ( this, jQuery ));