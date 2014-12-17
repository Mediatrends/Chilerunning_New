<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.svg" rel="icon" type="image/svg+xml">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head(); ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<!--FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300italic,300,400italic,600,600italic,700,700italic,900|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu_bubble.css">
	</head>
	<body <?php body_class(); ?>>
		
		<?php include (TEMPLATEPATH . '/svg_icons.php'); ?>

		<div class="menu-wrap">

			<nav class="menu" style="overflow: scroll;position: relative;height: 100%;padding-top: 20px;">

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

			<div id="block_728x90_head" class="adblocks_728x90 hide"></div>
