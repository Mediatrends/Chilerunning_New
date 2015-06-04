<?php /* Template Name: Calendario */ ?>
<?php get_header(); ?>

<div class="skins-ad">
  <div id="mt_120x600_left" class="left-ad"></div>
  <div id="mt_120x600_right" class="right-ad"></div>
</div>

<section class="cont_post_calendar">
	<h1><?php echo get_the_title(); ?></h1>
	<i class="fa fa-calendar"></i>

	<?php include (TEMPLATEPATH . '/970x90_all-ad.php'); ?>

	<?php get_template_part('loop-calendario'); ?>

</section>
<?php get_footer(); ?>