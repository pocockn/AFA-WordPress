<?php /*

 Template Name: Contact

 */
get_header();
?>

<hr style="margin-top: 20px; margin-bottom: 0px; border: 0; border-top:none;">

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/afa-headerImage3.jpg" alt="placeholder 960" class="img-responsive banner-image"/>
		</div>
	</div>
</div>

<?php
while (have_posts()) : the_post();
	the_content();
	// End the loop.
endwhile;
?>

<?php get_footer(); ?>
