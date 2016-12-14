<?php
/**
 * Template Name: Page Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class="hidden-sm-down">
  <?php 
	if ( ! wp_is_mobile() ) {
		get_template_part('templates/contact_form', 'page'); 
	}
  ?>
  </div>
<?php endwhile; ?>
