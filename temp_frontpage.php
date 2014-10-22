<?php
/*
	Template Name: Frontpage Template

*/

?>

<?php get_header(); ?>

<section  class="main ">
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
							<section class="col-lg-12 featured">
								<article class="col-lg-6 col-md-6  col-sm-6">
									<?php
										if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Front Page EMS Div')):
									endif;
									?>
								</article>
								<article class="col-lg-6 col-md-6 col-sm-6">
								<?php
									if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Front Page MRC Div')):
									endif;
								?>
								</article>
							</section>
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