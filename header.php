<?php $options=get_option( 'theme_settings' ); ?>

<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php bloginfo( 'name'); wp_title( ' - ', true, 'left');?>
    </title>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
    <link rel="apple-touch-icon-precomposed" href="">
    <link rel="shortcut icon" href="">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/js/plugin/Slidebars/development/slidebars.css">

    <?php wp_deregister_style( 'style-css' ); wp_register_style( 'style-css', get_stylesheet_uri() ); wp_enqueue_style( 'style-css' ); wp_head(); ?>
	 <script src="<?php bloginfo('template_directory'); ?>/assets/js/plugin/retina/retina.min.js" type="text/javascript"></script>

</head>

<body>
    <!-- Mobile Only -->
    <section class="left_navigation_mobile hidden-md hidden-lg sb-slidebar sb-left side_nav">

        <nav>
            <h2> <a href="<?php echo bloginfo("url"); ?>/emergency-medical-service/">EMS</a></h2>
            <?php $emc=array( 'theme_location'=>'ems_menu', 'menu' => 'EMS', 'menu_class' => 'ems_nav', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
            <ul>%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($emc); ?>
            <h2> <a href="<?php echo bloginfo("url"); ?>/medical-reserve-corps/">MRC</a></h2>
            <?php $mrc=array( 'theme_location'=>'mrc_menu', 'menu' => 'MRC', 'menu_class' => 'mrc_nav', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
            <ul>%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($mrc); ?>
            <h2> Quick Links</h2>
            <?php $main=array( 'theme_location'=>'main_menu', 'menu' => 'main_menu', 'menu_class' => 'main-menu', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
            <ul>%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($main); ?>
        </nav>
        <a href="http://www.oncallforvt.org/mrclogin/" class="login">MRC Login</a>



    </section>
    <section class="right_search_mobile hidden-md hidden-lg sb-slidebar sb-right">
        <div class="col-sm-11">

            <?php get_search_form(); ?>
        </div>
    </section>

    <section id="mobil_header" class="sb-slide hidden-md hidden-lg">
        <div class="mnav col-sm-12 col-xs-12">
            <div class="full_nav blue">&nbsp;</div>
            <div class="full_nav white">&nbsp;</div>
            <div class="col-sm-3 col-xs-3 menu">
                <button type="button" class="sb-toggle-left" data-toggle="collapse" data-target="#left_navigation_mobile">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
            </div>

            <div class="col-sm-6 col-xs-6 mobilelogo">
                <a href="<?php bloginfo('url') ?>">
						<img src="<?php bloginfo('template_directory') ?>/assets/img/mobileLogov2.jpg" class="logo">
					</a>
            </div>

            <div class="col-sm-3 col-xs-3 search">
                <button type="button" class="sb-toggle-right" data-toggle="collapse" data-target="#right_navigation_mobile">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- /mobile only -->


    <section id="sb-sit" class="sb-slide">
        <!-- will be hidden in mobile -->

        <div class="container">
            <section id="sidenav" class="col-lg-1 col-md-3 side_nav hidden-sm hidden-xs non-mobile">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/logov4.jpg">
						</a>
                </div>
                <nav>
                    <h2><a href="<?php echo bloginfo("url"); ?>/emergency-medical-service/" class="<?php if(get_the_title()== "Emergency Medical Service"){echo "active_title";}?>"><img src='<?php echo get_template_directory_uri(); ?>/assets/img/double_arrow_blue.png'> EMS</a></h2>
                    <?php $emc=array( 'theme_location'=>'ems_menu', 'menu' => 'EMS', 'menu_class' => 'ems_nav', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
                    <ul>%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($emc); ?>
                    <h2><a href="<?php echo bloginfo("url"); ?>/medical-reserve-corps/" class="<?php if(get_the_title()== "Medical Reserve Corps"){echo "active_title";}?>"><img src='<?php echo get_template_directory_uri(); ?>/assets/img/double_arrow_blue.png'> MRC</a></h2>
                    <?php $mrc=array( 'theme_location'=>'mrc_menu', 'menu' => 'MRC', 'menu_class' => 'mrc_nav', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
                    <ul>%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($mrc); ?>
                </nav>
                <section class='triangle-topright'>
                    &nbsp;
                </section>
            </section>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main_content">
                <header class="main_navigation hidden-sm hidden-xs">
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <?php $main=array( 'theme_location'=>'main_menu', 'menu' => 'main_menu', 'menu_class' => 'main-menu', 'menu_id' => '', 'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '
                            <ul class="nav navbar-nav">%3$s</ul>', 'depth' => 0, 'walker' => '' ); wp_nav_menu($main); ?>

                            <!--navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </header>

                <!-- /will be hidden in mobile -->
                <section id="alert">

                    <?php $arg=array( 'post_type'=>'alert',); $alert = new WP_Query($arg); if ($alert->have_posts()) : while ($alert->have_posts()) : $alert->the_post(); $on = get_post_meta(get_the_ID(), 'on_site', true ); if($on == "on"): ?>

                    <div class="alert war alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true" class="fa-stack">
  										<i class="fa fa-circle fa-stack-2x"></i>
  										<i class="fa fa-times fa-stack-1x fa-inverse"></i>
									</span>


                            <span class="sr-only">Close</span>
                        </button>
                        <h1><img src='<?php echo get_template_directory_uri(); ?>/assets/img/double_arrow_white.png'> Alert</h1>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="readmore">
									Read More <img src='<?php echo get_template_directory_uri(); ?>/assets/img/double_arrow_white.png'>
								</a>
                    </div>


                    <?php endif; endwhile; endif; wp_reset_query(); ?>
                </section>
                <?php if(!is_front_page()): ?>
                <div class="breadcrumbs hidden-sm hidden-xs">
                    <?php bcn_display(); ?>
                </div>
                <?php endif; ?>