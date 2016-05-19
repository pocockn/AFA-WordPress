  <?php 
 /**
 * Template Name: Home
 */
  get_header(); 
  
  ?>
  
<hr style="margin-top: 20px; margin-bottom: 0px; border: 0; border-top:none;">
  
  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/homeBanner.jpg" alt="placeholder 960" class="img-responsive banner-image"/>
        </div>    
      </div>
  </div>
<div class="container">
  <div class="row">
      <div class="col-md-8 col-sm-12">
        <h2 class="blue-header" style="margin-top:0px;">Welcome to AFA</h2>
        <p>AFA is a privately owned company specialising in providing Construction Consultancy services to many sectors across the built environment throughout the UK and Europe.</p>
		<p>Added value for the Client is created through our multi-disciplinary approach and Practice Group Structure which enables us to produce optimum solutions, flexibility and client choice.</p>
		<p>Above all, the approach of the Practice to clients is responsive with a dedicated commitment for quality of service to… “exceed expectations.”</p>
      </div>
      <div class="col-md-4 hidden-sm hidden-xs">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/londonHomePage.jpg" class="img-responsive home-image">
      </div>
    </div>
  </div>
 <div class="container">
      <!-- Example row of columns -->
      <div class="row home-about">
        
          <div class="col-sm-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/news.jpg" class="img-responsive border-image">
            <h2 class="blue-header">Latest News</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="<?php echo get_page_link( get_page_by_title('blog')->ID ); ?>">View details &raquo;</a></p>
          </div>
          <div class="col-sm-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/joinUs.jpg" class="img-responsive border-image">
            <h2 class="blue-header">Join Us</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
         </div>
          <div class="col-sm-4">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/sustain.jpg" class="img-responsive border-image">
            <h2 class="blue-header">Sustainability</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn" href="<?php echo get_page_link( get_page_by_title('sustainability')->ID ); ?>">View details &raquo;</a></p>
          </div>
        </div>
      </div>
      
      <?php get_footer(); ?>
