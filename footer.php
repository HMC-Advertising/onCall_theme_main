<?php $options = get_option( 'theme_settings' ); ?>	

<footer class="footer_nav">
						<nav class="navbar navbar-default" role="navigation">
  							<div class="container-fluid">
    							<!-- Brand and toggle get grouped for better mobile display -->
    

    							<!-- Collect the nav links, forms, and other content for toggling -->
    							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    								<a class="navbar-brand" href="#">
    									<img src="<?php bloginfo('template_directory'); ?>/assets/img/vt_logo.jpg">
    								</a>
      								<?php
											$footer = array(
												'theme_location'  => 'footer_menu',
												'menu'            => 'footer',
												'menu_class'      => 'footer-menu',
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
							
											wp_nav_menu($footer); ?>
       								
     								<!--navbar-collapse -->
  								</div><!-- /.container-fluid -->
  							</div>
						</nav>
					</footer>
				</div>
				<div class="col-lg-1">
					<section class="sol">
						<ul>
							<li>
								<a href="#">
									<span class="fa-stack fa-lg">
  										<i class="fa fa-circle fa-stack-2x"></i>
 	 									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa-stack fa-lg">
  										<i class="fa fa-circle fa-stack-2x"></i>
  										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>	
							<li>
								<a href="#">
									<span class="fa-stack fa-lg">
  										<i class="fa fa-circle fa-stack-2x"></i>
  										<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>		
					</section>
					<section class='triangle-down'>
						&nbsp;
					</section>
				</div>
			</div>
	</body>
	<?php wp_footer(); ?>
</html>

