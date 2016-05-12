<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 
 <div class="container">
	<div class="row">
		<div class="col-md-12">
 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	
            <h2 class="blue-header"><?php the_title(); ?></h2>
 
            <p><?php the_content(); ?></p>
 
            <?php endwhile; endif; ?>
 
            </div><!-- end of col md 12  -->
        </div><!-- end of row -->
  </div><!-- end of container -->
 
<?php get_footer(); ?>