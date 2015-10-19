<?php
/*
Single Post Template: Default post
Description: default post type
*/
?>
<?php get_header(); ?>


	<?php include (TEMPLATEPATH . '/970x90_all-ad.php'); ?>
	
	<div class="share_contsingle"></div>

	<div class="inner_tit_bar">
	
		<span class="cacho"></span>

		<div class="more">
			<a href="">
				<span>Ver más</span>
				<i class="fa fa-plus"></i>
			</a>
		</div>

	</div>

	<main role="main" class="content-single">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<!-- post title -->
					<h1><?php the_title(); ?></h1>

					<!-- /post title -->
					
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<div class="img-post" style="background-image:url(<?php echo $feat_image;?>);">

						<?php the_tags('<ul class="tags"><li><span>#</span>','</li><li><span>#</span>','</li></ul>'); ?>
						
					</div>

					<div class="author">
						<?php echo get_avatar(get_the_author_ID()); ?>
						<p class="autor"> <span><?php _e( 'Por:', 'html5blank' ); ?></span><?php the_author_posts_link(); ?></p>
						<br>
						<p class="date"><span>Publicado en:</span> <?php echo get_the_date(); ?></p>
					</div>
					
					<div id="mt_728x90_cont" class="adblocks_728x90-single">
						
						<script type='text/javascript' src='http://www.googletagservices.com/tag/js/gpt.js'>
						  googletag.pubads().definePassback('/92947493/728x90_CONT-SINGLE', [728, 90]).display();
						</script>

					</div>

					<?php the_content(); // Dynamic Content ?>
					
					<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

					<?php 

					$location = get_field('mapa_locacion');

					if( !empty($location) ):
					?>
					<div class="acf-map" style="height:400px;">
						<div class="marker" style="height:400px;" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php endif; ?>
					
					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'No hay post.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
		
		<div class="nav">
			<?php
				$prev_post = get_previous_post();
				if($prev_post) {
				   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
				   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="nav_prev"><i class="fa fa-chevron-left"></i>ANTERIOR</a>' . "\n";
				}

				$next_post = get_next_post();
				if($next_post) {
				   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
				   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="nav_next">SIGUIENTE<i class="fa fa-chevron-right"></i></a>' . "\n";
				}
			?>
		</div>
		

		<section class="related">
			  
			<h2>Más artículos en Chile Running</h2>  
			<ul class="relatedthumb">
			<?php  

			    $orig_post = $post;  
			    global $post;  
			    $tags = wp_get_post_tags($post->ID);  
			      
			if ($tags) {  
			    $tag_ids = array();  
			    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
			    $args=array(  
			    'tag__in' => $tag_ids,  
			    'post__not_in' => array($post->ID),  
			    'posts_per_page'=>3, // Number of related posts to display.  
			    'caller_get_posts'=>1  
			    );  
			      
			    $my_query = new wp_query( $args );  
			  
			while( $my_query->have_posts() ) {  
			    $my_query->the_post();  
			?>  
			      
			   	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			    	<li style="background-image:url(<?php echo $feat_image;?>);">
			    		
				        <a rel="external" href="<?php the_permalink()?>"> 
				        	<h3><?php the_title(); ?></h3>
				        </a>

				    </li> 
			<?php
			}  
			}  
			    $post = $orig_post;  
			    wp_reset_query();  
			?>  
			</ul>
		</section>

		<div id="disqus_thread"></div>
	    <script type="text/javascript">
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	        var disqus_shortname = 'chilerunningcom'; // required: replace example with your forum shortname

	        /* * * DON'T EDIT BELOW THIS LINE * * */
	        (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
