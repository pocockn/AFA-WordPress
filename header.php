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
<div class="header-bg">
 <div class="container">
  <div class="row">
    <header id="section_header" class="navbar-default main-nav" role="banner">
        <!-- <div class="row"> -->
          <div class="navbar-header ">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="AFA Logo Image" class="img-responsive">
            </a>
          </div><!--Navbar header End-->

          <div class="col-md-3 hidden-sm hidden-xs pull-right" style="transform: translateY(95%);">
            <form class="navbar-form" role="search">
              <div class="input-group search-bar">
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
</div>
<div class="container">
<div class="row">
<header id="section_header" class="navbar-default secondonary-nav" role="banner">
        <!-- <div class="row"> -->
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                 </div><!--Navbar header End-->
                  <nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="nav nav-justified">
                            <li class="item-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="page-scroll">Home</a></li>
                            <li class="item-nav"><a href="#service"  class="page-scroll">About Us</a> </li>
                            <li class="item-nav"><a href="#portfolio" class="page-scroll" >Clients</a> </li>
                             <li class="item-nav"><a href="#about" class="page-scroll">Development</a> </li>
                             <li class="item-nav"><a href="#team" class="page-scroll">Services</a> </li>
                             <li class="item-nav"><a href="#blog" class="page-scroll">Sectors</a> </li>
                             <li class="item-nav"><a href="#contact" class="page-scroll">Sustainability</a> </li>
                             <li class="item-nav"><a href="#contact" class="page-scroll">Contact</a> </li>
                        </ul>
                     </nav>
                </div><!-- /.container-fluid -->
</header>
</div>
