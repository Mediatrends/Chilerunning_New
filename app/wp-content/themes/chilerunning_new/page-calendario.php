<?php /* Template Name: Calendario */ ?>
<?php get_header(); ?>

<section class="cont_post_calendar">
	<h1><?php echo get_the_title(); ?></h1>
	<i class="fa fa-calendar"></i>
	<?php get_template_part('loop-calendario'); ?>

</section>
<?php get_footer(); ?>