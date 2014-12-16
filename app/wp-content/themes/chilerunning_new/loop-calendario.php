<div class="meses">
	
	<div class="meses_cont enero">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Enero</h2>

				<div class="more">
					<a href="<?php echo get_page_link(); ?>enero">
						<span>Ver más</span>
						<i class="fa fa-plus"></i>
					</a>
				</div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=enero'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont febrero">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Febrero</h2>
				
				<div class="more">
					<a href="<?php echo get_page_link(); ?>febrero">
						<span>Ver más</span>
						<i class="fa fa-plus"></i>
					</a>
				</div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=febrero'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont marzo">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Marzo</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>marzo"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=marzo'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont abril">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Abril</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>abril"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=abril'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont mayo">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Mayo</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>mayo"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=mayo'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont junio">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Junio</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>junio"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=junio'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont julio">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Julio</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>julio"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=julio'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont agosto">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Agosto</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>agosto"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=agosto'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont septiembre">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Septiembre</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>septiembre"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=septiembre'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>

							<div class="more">Ver más</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont octubre">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Octubre</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>octubre"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=octubre'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont noviembre">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Noviembre</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>noviembre"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=noviembre'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

	<div class="meses_cont diciembre">
		
			<div class="tit_bar">
	
				<span class="cacho"></span>

				<h2>Diciembre</h2>
				
				<div class="more"><a href="<?php echo get_page_link(); ?>diciembre"><span>Ver más</span>
						<i class="fa fa-plus"></i></a></div>

			</div>
			<?php $query = new WP_Query('posts_per_page=5&category_name=diciembre'); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

				<article class="calendar">

					<a href=" <?php the_permalink(); ?> " rel="calendario" title="<?php the_field('sitio_web_del_evento'); ?>" style="background-image:url(<?php echo $feat_image;?>);">
						<main class="post">

							<h3><?php the_title(); ?></h3>

							<div class="data">

								<div class="data_event"><i class="fa fa-calendar-o"></i><span><?php the_field('fecha_del_evento'); ?></span></div>
								/
								<div class="place"><i class="fa fa-map-marker"></i><span><?php the_field('locacion_del_evento'); ?></span></div>

							</div>
						</main>
					</a>

				</article>

				<?php endwhile;
				wp_reset_postdata();
				else: ?>
				<span class="no_post">No hay corridas para este mes.</span>
			<?php endif; ?>
	</div>

</div>