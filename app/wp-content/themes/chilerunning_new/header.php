<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="google-site-verification" content="B1wY8HTiBtcVzb13_Ucqxv4ge3PHMDGysWvZFJO_ar4" />
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.svg" rel="icon" type="image/svg+xml">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

		<!--FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300italic,300,400italic,600,600italic,700,700italic,900|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu_bubble.css">
		
		<?php wp_head(); ?>
        <!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51156134-2', 'auto');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');

		</script>

        <script type='text/javascript'>
		(function() {
		var useSSL = 'https:' == document.location.protocol;
		var src = (useSSL ? 'https:' : 'http:') +
		'//www.googletagservices.com/tag/js/gpt.js';
		document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
		})();
		</script>

		<script type='text/javascript'>
		googletag.defineSlot('/92947493/300x250_CR', [300, 250], 'div-gpt-ad-1422999910910-0').addService(googletag.pubads());
		googletag.defineSlot('/92947493/300x250_CR-2', [300, 250], 'div-gpt-ad-1422999910910-1').addService(googletag.pubads());
		googletag.defineSlot('/92947493/300x250_CR_sidebar', [300, 250], 'div-gpt-ad-1422999910910-2').addService(googletag.pubads());
		googletag.defineSlot('/92947493/300x250_CR_sidebar_2', [300, 250], 'div-gpt-ad-1422999910910-3').addService(googletag.pubads());
		googletag.defineSlot('/92947493/728X90_CR', [728, 90], 'div-gpt-ad-1422999910910-4').addService(googletag.pubads());
		googletag.defineSlot('/92947493/728x90_CR_cont', [728, 90], 'div-gpt-ad-1422999910910-5').addService(googletag.pubads());
		googletag.defineSlot('/92947493/728x90_CONT-SINGLE', [728, 90], 'div-gpt-ad-1422999910910-6').addService(googletag.pubads());
		googletag.defineSlot('/92947493/970x90_CR_ALL', [970, 90], 'div-gpt-ad-1422999910910-7').addService(googletag.pubads());
		googletag.defineSlot('/92947493/120x600_left_CR_calendar', [120, 600], 'div-gpt-ad-1423148950938-0').addService(googletag.pubads());
		googletag.defineSlot('/92947493/120x600_right_CR_calendar', [120, 600], 'div-gpt-ad-1423148950938-1').addService(googletag.pubads());
		googletag.defineSlot('/92947493/320x50_CR_ALL', [320, 50], 'div-gpt-ad-1423148950938-2').addService(googletag.pubads());
		googletag.pubads().enableSyncRendering();
		googletag.enableServices();
		</script>
	</head>
	<body <?php body_class(); ?>>
		
		<?php include (TEMPLATEPATH . '/svg_icons.php'); ?>

		<!-- 320x50_CR_ALL -->
		<div id='div-gpt-ad-1423148950938-2' style='width:320px;position:relative;bottom:0;margin:0 auto;left:0;right:0;'>
			<script type='text/javascript'>
			googletag.display('div-gpt-ad-1423148950938-2');
			</script>
		</div>

		<div class="menu-wrap">

			<nav class="menu" style="overflow: scroll;position: relative;height: 80%;padding-top: 20px;">

				<?php get_template_part('searchform'); ?>
				
				<?php html5blank_nav(); ?>
			</nav>

			<div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
					<path d="M-7.312,0H0c0,0,0,113.839,0,400c0,264.506,0,400,0,400h-7.312V0z"/>
				</svg>
			</div>
		</div>

		<!-- header -->
		<header class="header" role="banner">

				<main>
					
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">

							<svg viewBox="0 0 28.857 28.857">
								<use xlink:href="#svg_logo"></use>
							</svg>

						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<div class="tools">
						
						<ul>
							<li><a href="https://www.facebook.com/chilerunningscl"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/chilerunningscl"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://instagram.com/chilerunning"><i class="fa fa-instagram"></i></a></li>
						</ul>


						<div id="searching" class="search">
							
							<i class="fa fa-search"></i>

						</div>

					</div>

					<div class="btn_menuph" id="open-button">
						
						<span><i class="fa fa-navicon"></i></span>

					</div>
					<div class="btn_menuph hide" id="close-button">
						
						<span><i class="fa fa-times"></i></span>

					</div>
					
				</main>
				
				<div class="cont_search">

					<?php get_template_part('searchform'); ?>

				</div>
		</header>
		<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
