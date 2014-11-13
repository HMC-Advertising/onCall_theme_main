<?php
/*
	Template Name: Map Locator

*/

?>

<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); 
?>

<section  class="main <?php if(get_the_post_thumbnail() ): echo "large_photo"; endif;?>">
	<div class="row">
		<div class="col-lg-12 content">
			
			<div>
				<div class="col-lg-8">
					
						<h1  class="title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div>
				<div id="map">
					<img src="http://placehold.it/730x450">
				</div>
			</div>
			<div class="row">
				
					
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
				
					
				
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>