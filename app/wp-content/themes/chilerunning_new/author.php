<?php get_header(); ?>
	<div class="equipa_content">
					
		<div class="tit_bar">
		
			<span class="cacho"></span>

			<?php if (have_posts()): the_post(); ?>

				<h2><?php _e( 'Archivos creados por:  ', 'html5blank' ); echo get_the_author(); ?></h2>

			<?php if ( get_the_author_meta('description')) : ?>

			<?php echo get_avatar(get_the_author_meta('user_email')); ?>

				<h2><?php _e( 'Sobre:  ', 'html5blank' ); echo get_the_author() ; ?></h2>

				<?php echo wpautop( get_the_author_meta('description') ); ?>

			<?php endif; ?>

		</div>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

		<div id="equipa" style="min-height:450px;">
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<!-- article -->
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

			<?php edit_post_link(); ?>
			<!-- /article -->
		</div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'No posts.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>

	<?php get_template_part('pagination'); ?>

	</div>

<?php get_footer(); ?>
