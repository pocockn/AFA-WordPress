<?php 
 
 /**
 * Template Name: Projects
 */

get_header();

$args = array('post_type' => 'development', 'posts_per_page' => -1, );

$project_query = new WP_Query($args);

?>

<hr>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="blue-header">Projects</h2>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p class="first-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>

<div class="container">
	  <?php if( $project_query->have_posts() ) : while ( $project_query->have_posts() ) : $project_query->the_post(); 
  		$id = get_the_id();
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		$thumb_url = $thumb_url_array[0];
  		?>
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div class="ih-item square effect13 bottom_to_top">
				<a href="<?php the_permalink(); ?>">
				<div class="img">
					<img alt="" class="image-responsive" src="<?php echo $thumb_url; ?>">
				</div>
				<div class="info">
					<h3><?php the_title(); ?></h3>
					<p>Description goes here</p>
				</div> </a>
			</div>
		</div>
	</div><!-- end of row -->
	<?php endwhile; endif; ?>
</div><!-- end of container -->
<?php get_footer(); ?>