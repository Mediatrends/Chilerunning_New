<?php /* Template Name: Unsuscribe */ ?>
<?php get_header(); ?>

<section class="equipa_content cont_post newsletter-cr-pages">

	<div class="tit_bar">
	
		<span class="cacho"></span>

		<h2>Darse de baja</h2>

	</div>

	<div class="imagen-top-suscribe">
		<img src="<?php echo get_template_directory_uri(); ?>/img/imagen_suscribe.jpg?>" alt="">
	</div>
	<div class="content-suscribe-cr">
		<div class="blue-suscribe">
			<h1>YA NO QUIERO RECIBIR INFORMACIÓN EN MI CORREO</h1> 
			<!--<div class="btn-unsubscribe">
				<a href="">DARSE DE BAJA</a>
			</div>-->
			<div class="darse-de-baja">
				<?php echo do_shortcode('[newsletter_unsubscribe] [/newsletter_unsubscribe]' ); ?>
			</div>
		</div>	
		
	</div>

	<div class="loop-suscribe">
		<?php get_template_part('loop-pagenewsletter'); ?>	
	</div>
	

</section>
<?php get_footer(); ?> 