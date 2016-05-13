<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>AFA</title>
		<?php wp_head(); ?>
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
	<!-- Navigation -->
<div class="container">
    <nav class="navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="AFA Logo Image" class="img-responsive"> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm"  style="transform: translateY(100%);">
                    <li class="page-scroll">
                        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-form" role="search">
								<div class="input-group search-bar">
									<input type="text" class="form-control" placeholder="Search AFA" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="srch-term">
									<div class="input-group-btn">
										<button class="btn btn-default" name="submit" type="submit">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
						</form>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>
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
						`
						<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
							<?php /* Primary navigation */
							wp_nav_menu(array('menu' => 'top_menu', 'depth' => 2, 'container' => false, 'menu_class' => 'nav nav-justified',
							//Process nav menu using our custom nav walker
							'walker' => new wp_bootstrap_navwalker()));
							?>
						</nav>
				</div><!-- /.container-fluid -->
				</header>
			</div>
		
		<hr>
