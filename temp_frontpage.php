<?php
/*
	Template Name: Frontpage Template

*/

?>

<?php get_header(); ?>

<section class="main">
						<div class="row">
							<div class="col-lg-12 content">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<h1>
										<?php the_title(); ?>
									</h1>
									<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-6 featured">
								<header>
									<h2>one</h2>
									<div class="image-container">
										<img src="http://placehold.it/300x300">
									</div>
								</header>
								<div class="content">
									Proin nisl odio, suscipit at tincidunt ut, viverra eget nunc. Suspendisse potenti. Nulla volutpat in justo nec viverra. Nullam eu euismod arcu. 

								</div>
								<footer>
									<a href="#">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/but_more.jpg">
									</a>
								</footer>
							</div>
							<div class="col-lg-6 featured">
								<header>
									<h2>one</h2>
									<div class="image-container">
										<img src="http://placehold.it/300x300">
									</div>
								</header>
								<div class="content">
									Proin nisl odio, suscipit at tincidunt ut, viverra eget nunc. Suspendisse potenti. Nulla volutpat in justo nec viverra. Nullam eu euismod arcu. 

								</div>
								<footer>
									<a href="#">
										<img src="<?php bloginfo('template_directory'); ?>/assets/img/but_more.jpg">
									</a>
								</footer>
							</div>
						</div>
						<div class="row events">
							<div class="col-lg-9 feature_events">
								<?php
									if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Featured Events')):
									endif;
								?>
							</div>
							<div class="col-lg-3">
								<h3>Events Calendar</h3>
								<div id="fpAgenda">
									<?php echo do_shortcode('[ai1ec view="stream"]'); ?>
								</div>
								
							</div>
						</div>
					</section>



<?php get_footer(); ?>