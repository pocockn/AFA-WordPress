<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>


<?php 
// Start the loop.
while ( have_posts() ) : the_post();
	
$id = get_the_ID();

$image = get_field('header_image', $id );
if ($image) { ?>
<hr style="margin-top: 20px; margin-bottom: 0px; border: 0; border-top:none;">
  <div class="container">
  	<div class="row">
    	<div class="col-md-12">
      		<img src="<?php echo $image[url]; ?>" alt="placeholder 960" class="img-responsive services-img"/>
        </div>    
      </div>
  </div>
<?php } else { ?>
	<hr>
<?php } ?>
 
 <div class="container">
	<div class="row">
		<div class="col-md-12">
                	
            <h2 class="blue-header"><?php the_title(); ?></h2>
 
            <p><?php the_content(); ?></p>
 
            <?php endwhile; ?>
 
            </div><!-- end of col md 12  -->
        </div><!-- end of row -->
  </div><!-- end of container -->
 
<?php get_footer(); ?>