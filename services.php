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
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/services.jpg" alt="placeholder 960" class="img-responsive"/>
        </div>    
      </div>
  </div>

  <div class="container">
  <div class="row">
      <!-- list items -->
      <div class="col-md-12 grey">
        <div id="services-anchors">
          <ul class="topmar">
            <li>
              <a href="#">Services</a>
            </li>
            <li>
              <a href="#">Cost Consultancy</a>
            </li>
            <li class="last">
              <a href="#">Project Management</a>
            </li>
          </ul>
          <ul class="topmar">
            <li>
              <a href="#">Asset Management</a>
            </li>
            <li>
              <a href="#">CDM Coordinators</a>
            </li>
            <li class="last">
              <a href="#">Supply Chain Management</a>
            </li>
          </ul>
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