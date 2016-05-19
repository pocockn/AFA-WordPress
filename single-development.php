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
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h2 class="blue-header"><?php the_title(); ?></h2>
			<p class="first-para"><?php the_content(); ?></p>
		</div>
		<div class="col-md-9">
			<?php $image = get_field('single_project_image', $id ); ?>
			<img src="<?php echo $image[url]; ?>" class="img-responsive margin-image">
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>