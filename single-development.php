<?php 
 /**
 * Template Name: Single Projects
 */

get_header();

?>
<hr>
 <?php
        // Start the loop.
    while ( have_posts() ) : the_post();
	
	$id = get_the_ID();

    ?>
<div class="container hidden-md hidden-lg">
	<div class="row">
		<div class="col-sm-12">
			<?php $image = get_field('single_project_image', $id ); ?>
			<img src="<?php echo $image[url]; ?>" class="img-responsive margin-image pull-right">
			
		</div>
		<div class="col-sm-12">
			<h2 class="blue-header"><?php the_title(); ?></h2>
			<p class="first-para"><?php the_content(); ?></p>
		</div>
	</div>
</div>
<div class="container hidden-sm hidden-xs">
	<div class="row">
		<div class="col-md-12">
			<?php $image = get_field('single_project_image', $id ); ?>
			<img src="<?php echo $image[url]; ?>" class="img-responsive margin-image pull-right" style="max-width: 70%;">
			<h2 class="blue-header"><?php the_title(); ?></h2>
			<p class="first-para"><?php the_content(); ?></p>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
