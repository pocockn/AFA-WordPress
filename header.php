<!DOCTYPE html>
<html lang="en">
	
  <head>
    <meta charset="utf-8">
    <title>AFA</title>
    <?php wp_head();  ?>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

  <div class="row">
    <header id="section_header" class="navbar-default main-nav" role="banner">
      <div class="container">
        <!-- <div class="row"> -->
          <div class="navbar-header ">
            <a class="navbar-brand" href="#">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="AFA Logo Image" class="img-responsive">
            </a>
          </div><!--Navbar header End-->

          <div class="col-md-3 hidden-sm hidden-xs pull-right" style="transform: translateY(95%);">
            <form class="navbar-form" role="search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search AFA" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form>
          </div><!--Navbar header End-->
      </div><!-- /.container-fluid -->
    </header>
  </div>
