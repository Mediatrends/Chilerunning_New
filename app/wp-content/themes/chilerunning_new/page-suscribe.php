<?php /* Template Name: Suscribe */ ?>
<?php get_header(); ?>

<section class="equipa_content cont_post newsletter-cr-pages">

	<div class="tit_bar">

		<span class="cacho"></span>

		<h2>Newsletter Chilerunning</h2>

	</div>

	<div class="imagen-top-suscribe">
		<img src="<?php echo get_template_directory_uri(); ?>/img/imagen_suscribe.jpg?>" alt="">
	</div>
	<div class="content-suscribe-cr">
		<div class="blue-suscribe">
			<h1>¡suscripcion realizada con exito!</h1>
			<h2>LISTO RUNNER! YA ESTARÁS RECIBIENDO NUESTRO CONTENIDO</h2>
			<div class="be-social-cr">
				<div class="cr-social">siguenos tambien en</div>
				<ul>
					<li><a href="https://www.facebook.com/chilerunningscl" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/chilerunningscl" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://instagram.com/chilerunning/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="loop-suscribe">
		<?php get_template_part('loop-pagenewsletter'); ?>
	</div>


</section>
<?php get_footer(); ?>
