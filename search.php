<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
 <hr>
 
 <div class="container">
	<div class="row">
		<div class="col-md-12">
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h2 class="blue-header">Search Results</h2>
                </header><!-- .page-header -->

                <?php while ( have_posts() ) : the_post(); ?>
 
                   <a href="<?php the_permalink(); ?>" class="search-result" title="Read more"><h3><?php the_title(); ?></h3></a>
                   
                   <p><?php the_excerpt(); ?></p>
                   
 
                 <?php endwhile; ?>
 
            <?php else : ?>
 
                <h2 class="text-center">No Results</h2>
                
                <p class="text-center">Please search again</p>
 
            <?php endif; ?>
 
            </div><!-- end of col md 12  -->
        </div><!-- end of row -->
  </div><!-- end of container -->
  

 
<?php get_footer(); ?>