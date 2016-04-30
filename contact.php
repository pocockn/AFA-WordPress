<?php
/*

Template Name: Contact

*/
get_header();



?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/homeBanner.jpg" alt="placeholder 960" class="img-responsive banner-image"/>
        </div>    
      </div>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
             <h2 class="blue-header">Contact Us</h2>
            <p>We're happy to answer any questions you have or provide you with an estimate. Just send us a message in the form below"
                <form role="form">
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Name" /></span>
                    </div>
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                    </div>
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                    </div>
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap textarea-923"><textarea name="textarea-923" cols="20" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                    </div>
                       <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-default" />
                </form>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
              <h4>Address</h4>
                <p>Sample Address</p>
                <p>City</p>
                <p>Postcode</p>
              <hr>
              <h4>Email</h4>
                <p>sampleEmail@hotmail.co.uk</p>
              <hr>
              <h4>Phone</h4>
                <p>+447919567127</p>
              <hr>
            </div>
      </div>
    </div>
  </div>

    <?php get_footer(); ?>   