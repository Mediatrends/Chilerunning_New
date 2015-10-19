<?php /* Template Name: Subscribe form */ ?>
<?php get_header(); ?>

<section class="equipa_content cont_post newsletter-cr-pages">

	<div class="tit_bar">

		<span class="cacho"></span>

		<h2>SUSCRIBETE A NUESTRO NEWSLETTER</h2>

	</div>

	<div class="formulario-pagina-cr">

		<div class="content-form-cr">
			<div class="logo logo-formnew">
				<a href="<?php echo home_url(); ?>">

					<svg viewBox="0 0 28.857 28.857">
						<use xlink:href="#svg_logo"></use>
					</svg>

				</a>
			</div>
			<h1 class="formnews">NEWSLETTER</h1>
			<h2>Suscribete</h2>
			<div class="formulario-cr-nw">
				<?php echo do_shortcode('[newsletter_signup_form id=0]' ); ?>
			</div>
		</div>
		<div class="image-form-cr">
			<div class="be-social2">
				<div class="cr-social2">siguenos tambien en</div>
				<ul>
					<li><a href="https://www.facebook.com/chilerunningscl" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/chilerunningscl" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://instagram.com/chilerunning/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/imagen_form.jpg?>" alt="">
		</div>
	</div>


	<div class="loop-suscribe">
		<?php get_template_part('loop-pagenewsletter'); ?>
	</div>


</section>
<?php get_footer(); ?>
