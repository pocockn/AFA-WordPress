<?php
/**
 * Template Name: About
 */
 
get_header(); ?>

<hr style="margin-top: 20px; margin-bottom: 0px; border: 0; border-top:none;">

  <div class="container">
  	<div class="row">
    	<div class="col-md-12">
      		<img src="<?php bloginfo('template_directory'); ?>/assets/img/about.png" alt="placeholder 960" class="img-responsive services-img"/>
        </div>    
      </div>
  </div>

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