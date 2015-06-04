<?php /* Template Name: Index */ ?>

<?php get_header(); ?>

	<?php get_template_part('loop-slider'); ?>

	<?php include (TEMPLATEPATH . '/970x90_all-ad.php'); ?>

	<?php get_template_part('loop-entrena'); ?>


<div id="mt_728x90_all" class="adblocks_728x90"></div>

	<?php get_template_part('loop-equipa'); ?>

<div id="mt_728x90_cont" class="adblocks_728x90"></div>

	<?php get_template_part('loop-motiva'); ?>

	<?php get_template_part('loop-salud'); ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
