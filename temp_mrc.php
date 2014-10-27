<?php
/*
	Template Name: MRC TEMPLATE

*/

?>

<?php get_header(); ?>

<section  class="main large_photo">
	<div class="row">
		<div class="col-lg-12 content">
			<div >
				<div class="col-lg-12 image" style="<?php 
				if (have_posts()) : while (have_posts()) : the_post(); 
			 	$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0]; 

				if(get_the_post_thumbnail() ): 
			 			echo "background-image:url('".$thumb_url."')"; 
			 			
			 		else:
			 			echo "background: #333";
			 			
			 	endif; endwhile; endif;
			 	?>
				">

				</div>
			 	
			</div>
			<div>
				<div class="col-lg-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1  class="title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div >
				<section class="col-lg-12">
					
					<article class="col-lg-4 col-md-4  col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('MRC Footer Widget 1')):
					endif;
				?>
					</article>
					<article class="col-lg-4 col-md-4 col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('MRC Footer Widget 2')):
					endif;
				?>
					</article>
					<article class="col-lg-4 col-md-4 col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('MRC Footer Widget 3')):
					endif;
				?>
					</article>
					
				</section>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>