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
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post();
                	
                	$title = the_title();
 
                    echo $title;
                   
 
                 endwhile; ?>
 
            <?php else : ?>
 
                <p>No Results</p>
 
            <?php endif; ?>
 
            </div><!-- end of col md 12  -->
        </div><!-- end of row -->
  </div><!-- end of container -->
 
<?php get_footer(); ?>