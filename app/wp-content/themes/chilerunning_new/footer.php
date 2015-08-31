		</div>
		<!-- /wrapper -->

		<!-- footer -->

		<footer class="footer-chr" role="contentinfo">

		<div class="content-chr">

			<div class="first-box">
				<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<svg viewBox="0 0 28.857 28.857">
								<use xlink:href="#svg_logo"></use>
							</svg>

						</a>
				</div>
			</div>

			<div class="second-box">
				<nav class="nav" role="navigation">
					<?php wp_nav_menu('Footer')?> 
				</nav>
			</div>

			<div class="third-box">
				<h3>Contacto</h3>
				<div class="contact-one">
					<div class="icon-cont"><div class="icon"><i class="fa fa-envelope-o"></i></div></div>
					<div class="info-cont">
						<h4>Contacto Editorial</h4>
						<h5><a href="mailto:editor@mediatrends.cl">Editor@chilerunning.cl</a></h5>
					</div>
				</div>
				<div class="contact-one">
					<div class="icon-cont"><div class="icon"><i class="fa fa-envelope-o"></i></div></div>
					<div class="info-cont">
						<h4>Contacto  PUBLICITARIO</h4>
						<h5><a href="mailto:editor@mediatrends.cl">Editor@chilerunning.cl</a></h5>
					</div>
				</div>
			</div>

			<div class="fourth-box">
				<h3>Newsletter</h3>
				<div class="news-box">
					<?php echo do_shortcode('[newsletter_signup_form id=0]'); ?>
				</div>
			</div>

			<div class="fifth-box">
				<div class="content-fifb">
					<ul>
						<li><a href="https://www.facebook.com/chilerunningscl"><div class="icon"><i class="fa fa-facebook"></i></div></a></li>
						<li><a href="https://twitter.com/chilerunningscl"><div class="icon"><i class="fa fa-twitter"></i></div></a></li>
						<li><a href="http://instagram.com/chilerunning"><div class="icon"><i class="fa fa-instagram"></i></div></a></li>
					</ul>
					<div class="copy-right-chr">© 2015 Copyright Chile Running.</div>
				</div>
			</div>
			

		</div>

		<div class="bg-newsletter"></div>
		<div class="newsletter-new-suscribe"> 
			<div class="content-popups animation-pop">

				<?php $my_query = new WP_Query( 'p=1371' ); ?>

				<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="close-button-popups">
							<i class="fa fa-times"></i>
						</div>
						<div class="first-box-popups">
							<div class="title-popups">
								<div class="logotipe-popups">
									<svg viewBox="0 0 28.857 28.857">
										<use xlink:href="#svg_logo"></use>
									</svg>
								</div>
								<div class="title-content-p">
									<div class="suscribe-p">Suscrubete a nuestro</div>
									<div class="title-news"><?php the_title(); ?></div>
								</div>
							</div>
							<div class="body-popups">
								<div class="social-popups">
									<ul>
										<li><a href="https://www.facebook.com/chilerunningscl"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/chilerunningscl"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://instagram.com/chilerunning/"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<div class="textbody-popups"><?php the_content(); ?></div>
							</div>	
							<div class="arrow-middle"></div>
						</div>
						<div class="second-box-popups">
							<div class="form-popups-news">
								<div><?php echo do_shortcode('[newsletter_signup_form id=0]' ); ?></div>
							</div>
						</div>

					</article>
					
				<?php endwhile; ?>
			</div>
			<div class="newsletter-footer">
				<div class="content-poweredby">
					<div class="powered-txt">Powered By</div>
					<div class="logo-powered">
						<a href="http://mediatrends.cl/" target="_blank"> 
							<svg viewBox="0 0 792 656.856">
								<use xlink:href="#mediatrends-logo" />
							</svg>
						</a>
					</div>
				</div>
			</div>
			
		</div>
			
			
		</footer>
		<!-- /footer -->

		<script src="<?php echo get_template_directory_uri(); ?>/js/swipe.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/snap.svg-min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main4.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/enquire.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettySocial.min.js"></script>
		
		<?php wp_footer(); ?>
		
		<!-- /92947493/intersitial_CR_ALL -->
		<div id='div-gpt-ad-1437586168709-0'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1437586168709-0'); });
		</script>
		</div>
	</body>
</html>
