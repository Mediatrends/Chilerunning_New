<?php /* Template Name: Calendario-Junio */ ?>
<?php get_header(); ?>
	
	<?php get_template_part('loop-slider'); ?>

	<?php include (TEMPLATEPATH . '/970x90_all-ad.php'); ?>

	<div class="equipa_content">
	
		<div class="tit_bar">
		
			<span class="cacho"></span>

			<h2><?php echo get_the_title(); ?></h2>

		</div>

		<?php $query = new WP_Query('posts_per_page=0&category_name=junio&post_status=publish'); ?>

			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			
				<div id="equipa">

					<article id="post-<?php the_ID(); ?>" <?php post_class('postes'); ?> style="background-image:url(<?php echo $feat_image;?>);">

						<div class="alt_link"><i class="fa fa-share"></i></div>

						<div class="shares_loop">

							<a href="#" data-type="facebook" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="Chile Running" class="prettySocial">
								<i class="fa fa-facebook"><span>facebook</span></i>
							</a>

							<a href="#" data-type="twitter" data-url="<?php the_permalink() ?>" data-description="<?php the_title_attribute(); ?>" data-via="Chile Running" class="prettySocial">
								<i class="fa fa-twitter"><span>Twitter</span></i>
							</a>

						</div>
						
						<?php the_tags('<ul class="tags"><li><span>#</span>','</li><li><span>#</span>','</li></ul>'); ?>

					</article>

					<article class="cont">
						
						<main>
							<a href="<?php the_permalink() ?>" class="alt_link">
								<h2><?php the_title(); ?></h2>
							</a>
							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
						</main>

					</article>

				</div>
				
			<?php endwhile;
			wp_reset_postdata();
			else: ?>
			<p>No hay post.</p>
		<?php endif; ?>
	<?php get_template_part('pagination'); ?>
	</div>

<?php get_footer(); ?>