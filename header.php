<?php $options = get_option( 'theme_settings' ); ?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('name'); wp_title(' - ', true, 'left');?></title>
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
		<link rel="apple-touch-icon-precomposed" href="">
		<link rel="shortcut icon" href="">
		<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">

		<?php 
			wp_deregister_style( 'style-css' );
			wp_register_style( 'style-css', get_stylesheet_uri() );
			wp_enqueue_style( 'style-css' );

		wp_head(); ?>		
	
	</head>
	<body>
		
			<div class="container">
				<div class="col-lg-2 main_content">
					
						
							<div class="logo">
								<a href="<?php bloginfo('url'); ?>">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/main_logo.jpg">
								</a>
							</div>
							<nav  class="side_nav">
								<h2><i class="fa fa-angle-double-right"></i> EMC</h2>
								<?php
									$emc = array(
										'theme_location'  => 'emc_menu',
										'menu'            => 'EMC',
										'menu_class'      => 'emc_nav',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap' => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									);
							
									wp_nav_menu($emc); 
								?>
        						<h2><i class="fa fa-angle-double-right"></i> MRC</h2>
								<?php
									$mrc = array(
										'theme_location'  => 'mrc_menu',
										'menu'            => 'MRC',
										'menu_class'      => 'mrc_nav',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap' => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									);
							
									wp_nav_menu($mrc); 
								?>
							</nav>
							
							<section class='triangle-topright'>
							&nbsp;
							</section>
						
					
				</div>
				<div class="col-lg-8 main_content">
					<header class="main_navigation">
						
							<nav class="navbar navbar-default" role="navigation">
  								
    							<!-- Brand and toggle get grouped for better mobile display -->
    								<div class="navbar-header">
     	 					      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#left_navigation_mobile">
      	 					       			<span class="sr-only">Toggle navigation</span>
      	 					       			<span class="icon-bar"></span>
     	 					        		<span class="icon-bar"></span>
     	 					        		<span class="icon-bar"></span>
     	 					      		</button>
     	 					    	</div>

    								<!-- Collect the nav links, forms, and other content for toggling -->
    								<div class="collapse navbar-collapse">
      									<?php
											$main = array(
												'theme_location'  => 'main_menu',
												'menu'            => 'main_menu',
												'menu_class'      => 'main-menu',
												'menu_id'         => '',
												'echo'            => true,
												'fallback_cb'     => 'wp_page_menu',
												'before'          => '',
												'after'           => '',
												'link_before'     => '',
												'link_after'      => '',
												'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
												'depth'           => 0,
												'walker'          => ''
											);
							
											wp_nav_menu($main); ?>
        								
     								<!--navbar-collapse -->
  									</div><!-- /.container-fluid -->
  								</nav>
					
						<div class="row">
							<div class="alert war alert-dismissible" role="alert">
  								<button type="button" class="close" data-dismiss="alert">
  									<span aria-hidden="true" class="fa-stack">
  										<i class="fa fa-circle fa-stack-2x"></i>
  										<i class="fa fa-times fa-stack-1x fa-inverse"></i>
									</span>


  									<span class="sr-only">Close</span>
  								</button>
  								<h1><i class="fa fa-angle-double-right"></i> Alert</h1>
								<p>
									Vivamus non pretium nisl. Sed non lorem ullamcorper, tempor ex eu, rhoncus augue. Quisque aliquet massa eget aliquam condimentum. Integer eget tincidunt turpis. Praesent id volutpat odio, a egestas massa. Ut eget commodo diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								</p>
								<a href="#" class="readmore">
									Read More <i class="fa fa-angle-double-right"></i>
								</a>
							</div>
							
						</div>
					</header>
