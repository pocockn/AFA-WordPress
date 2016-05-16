<?php

/*

Template Name: Services

*/

get_header();

$args = array(
        'post_type' => 'songs',
        'posts_per_page' => 2,
        'orderby' => 'rand',
        'order' =>  'DESC'
);

$archive_songs_query = new WP_Query( $args );

?>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/services.jpg" alt="placeholder 960" class="img-responsive services-img"/>
        </div>    
      </div>
  </div>

  <div class="container">
  <div class="row">
      <!-- list items -->
      <div class="col-md-12 grey">
        <div id="services-anchors">
        	<div class="col-md-4 col-sm-12 service-anchor">
        		<a href="#">Services</a>
        	</div>
        	<div class="col-md-4 col-sm-12  service-anchor">
        		<a href="#">Cost Consultancy</a>
        	</div>
        	<div class="col-md-4 col-sm-12  service-anchor">
        		 <a href="#">Project Management</a>
        	</div>
      </div>
      </div>
     </div>
     
     <div class="row">
      <!-- list items -->
      <div class="col-md-12 grey">
        <div id="services-anchors">
        	<div class="col-md-4 col-sm-12 service-anchor">
        		<a href="#">Asset Management</a>
        	</div>
        	<div class="col-md-4 col-sm-12 service-anchor">
        		    <a href="#">CDM Coordinators</a>
        	</div>
        	<div class="col-md-4 col-sm-12  service-anchor">
        		<a href="#">Supply Chain Management</a>
        	</div>
      </div>
      </div>
     </div>
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