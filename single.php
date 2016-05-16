<?php get_header();

$args = array('post_type' => 'services', 'posts_per_page' => 6, );

$services_query = new WP_Query($args);
?>
<hr style="margin-top: 20px; margin-bottom: 0px; border: 0; border-top:none;">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/services.jpg" alt="placeholder 960" class="img-responsive services-img"/>
        </div>    
      </div>
  </div>

  <div class="container">
  	
  <?php $i = 1; ?>
  
  <?php if( $services_query->have_posts() ) : while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
  	
  	<?php if ( $i == 1 || $i == 4 ) { ?>
     	<div class="row">
      <!-- list items -->
      <div class="col-md-12 grey">
        <div id="services-anchors">
     <?php } ?>
        	<div class="col-md-4 col-sm-12 service-anchor">
        		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        	</div>
     <?php if ( $i % 3 == 0) { ?>
     	 </div>
      </div>
     </div>
     <?php  } ?>
     	
     <?php $i++;
			endwhile; endif;
 ?>
  </div>

  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <h2 class="blue-header">Our Services</h2>
        <p>Our services prioritises the business needs of the client, providing a tailored service enabling informed decisions to be made at all stages throughout the duration of the project.</p>

        <p>Our range of services are further enhanced by our extensive sector experience and in-house skill base.</p>

        <p>with our specialist skills, the firm provides a consultancy based service that enhances its clients’ business and <i>“…Exceeds Expectations.”</i></p>

      </div>
    </div>
  </div>

<?php get_footer(); ?>   