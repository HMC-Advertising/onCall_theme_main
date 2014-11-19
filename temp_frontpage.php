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
									<h1 class="title">
										<?php the_title(); ?>
									</h1>
									<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>

						</div>

						<div class="row events">
							<div class="col-lg-9 feature_events">
								<?php featured_area() ?>
							</div>
							<div class="col-lg-3 ecal">
								<h3>Events Calendar</h3>
								<div id="fpAgenda">
									<?php echo do_shortcode('[ai1ec view="stream"]'); ?>
								</div>
								
							</div>
						</div>
					</section>



<?php get_footer(); ?>