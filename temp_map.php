<?php
/*
	Template Name: Map Locator

*/

?>

<?php get_header(); ?>
<section id="sb-sit" class="main large_photo">
	<div class="row">
		<div class="col-lg-12 content">
			<div class="row">
				
			</div>
			<div class="row">
				<div class="col-lg-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1>
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div class="row">
				<div id="map" class="col-lg-12">
					<?php echo do_shortcode('[wpgmza id="1"]'); ?>
				</div>
			</div>
			<div class="row">
				<section class="col-lg-12">
					
					<article class="col-lg-6 col-md-6  col-sm-6">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Map Locator Footer Widget 1')):
					endif;
				?>
					</article>
					<article class="col-lg-6 col-md-6 col-sm-6">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Map Locator Footer Widget 2')):
					endif;
				?>
					</article>
				
					
				</section>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>