<?php 
 
 /**
 * Template Name: Projects
 */

get_header();
?>

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
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div class="ih-item square effect4">
				<a href="<?php the_permalink(); ?>">
				<div class="img">
					<img alt="" class="image-responsive" src="http://placehold.it/370x250">
				</div>
				<div class="info">
					<h3>Test Project</h3>
					<p>Description goes here</p>
				</div> </a>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="ih-item square effect6 bottom_to_top">
				<a href="<?php the_permalink(); ?>">
				<div class="img">
					<img alt="" class="image-responsive" src="http://placehold.it/370x250">
				</div>
				<div class="info">
					<h3>Test Project</h3>
					<p>Description goes here</p>
				</div> </a>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="ih-item square effect13 bottom_to_top">
				<a href="<?php the_permalink(); ?>">
				<div class="img">
					<img alt="" class="image-responsive" src="http://placehold.it/370x250">
				</div>
				<div class="info">
					<h3>Test Project</h3>
					<p>Description goes here</p>
				</div> </a>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="ih-item square effect3 bottom_to_top">
				<a href="<?php the_permalink(); ?>">
				<div class="img">
					<img alt="" class="image-responsive" src="http://placehold.it/370x250">
				</div>
				<div class="info">
					<h3>Test Project</h3>
					<p>Description goes here</p>
				</div> </a>
			</div>
		</div>
	</div><!-- end of row -->
</div><!-- end of container -->

<?php get_footer(); ?>