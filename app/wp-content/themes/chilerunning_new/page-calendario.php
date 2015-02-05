<?php /* Template Name: Calendario */ ?>
<?php get_header(); ?>

<div class="skins-ad">
  <div class="left-ad">
  	
  	<!-- 120x600_left_CR_calendar -->
	<div id='div-gpt-ad-1423148950938-0'>
	<script type='text/javascript'>
	googletag.display('div-gpt-ad-1423148950938-0');
	</script>
	</div>

  </div>
  <div class="right-ad">
  	
  	<!-- 120x600_right_CR_calendar -->
	<div id='div-gpt-ad-1423148950938-1'>
	<script type='text/javascript'>
	googletag.display('div-gpt-ad-1423148950938-1');
	</script>
	</div>

  </div>
</div>

<section class="cont_post_calendar">
	<h1><?php echo get_the_title(); ?></h1>
	<i class="fa fa-calendar"></i>

	<?php include (TEMPLATEPATH . '/970x90_all-ad.php'); ?>

	<?php get_template_part('loop-calendario'); ?>

</section>
<?php get_footer(); ?>