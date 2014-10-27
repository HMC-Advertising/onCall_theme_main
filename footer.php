

					<footer class="footer_nav hidden-sm hidden-xs ">
						<nav class="navbar navbar-default" role="navigation">
  						
    							<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
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
												'items_wrap' => '<ul class="nav navbar-nav ">%3$s</ul>',
												'depth'           => 0,
												'walker'          => ''
											);
							
								wp_nav_menu($footer); ?>
       						
						</nav>
					</footer>
				</div>
			
				<div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
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
		</section>
		<!-- Mobile only -->
		<footer class="hidden-md hidden-lg mobile_footer sb-slide">
						<div class="row sol">
							<div class="col-xs-8 col-sm-9 col-xxs-8">
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
											'items_wrap' => '<ul class="">%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);
							
									wp_nav_menu($footer); 
								?>
  							</div>
  							<div class="col-xs-2 col-sm-2 col-xxs-2">
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
								</ul>	
							</div>
						</div>
						<div class="row footer_brand">
							<div class="col-xs-12">
								<a href="<?php bloginfo('url'); ?>">
    								<img src="<?php bloginfo('template_directory'); ?>/assets/img/vt_logo.jpg">
    							</a>
    						</div>	
						</div>
		</footer>
		<!-- /Mobile Only -->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/plugin/Slidebars/development/slidebars.js"></script>
		<script type="text/javascript">
			(function($) {
        		$(document).ready(function() {
          			 $.slidebars({
        				siteClose: true, // true or false
        				
        				scrollLock: false // true or false
      				});
        		});
      		}) (jQuery);
		</script>
		<?php wp_footer(); ?>			
	</body>
	
</html>

