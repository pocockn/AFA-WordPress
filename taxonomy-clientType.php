<?php

get_header();

$taxonomy = 'clientType';
$tax_terms = get_terms($taxonomy);

$term = get_queried_object();

// Define the query
$args = array(
    'post_type' => 'clients',
    'clientType' => $term->slug
);

$query = new WP_Query( $args );

?>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="blue-header">Clients</h2>
			<p style="margin-bottom:30px;">
				With over 10,000 attendees expected at the show this year, have a look below at a small snap shot of who will be at the event. We add on more every week so check back regularly for updates…
			</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php foreach ($tax_terms as $tax) { 
					$term_link = get_term_link( $tax );	
			?>
			<button type="button" class="btn btn-primary btn-lg btn-block">
				<a href="<?php echo $term_link; ?>"><?php echo $tax->name; ?></a>
			</button>
			<?php } ?>
		</div>

		<div class="col-md-9 attendees-page">
			<ul id="attendees-page-list" class="text-center">
				<?php if ($query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<li class="attendees-page-list-li" style="height: 60px;">
					<img src="https://iotworldevent.com/files/117823-250x100-Ross_Logo.jpg" alt="Ross Stores" />
					<p class="text-center">
						<?php the_title(); ?>
					</p>
				</li>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</div>

<?php get_footer();
?>