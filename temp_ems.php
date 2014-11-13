<?php
/*
	Template Name: EMS TEMPLATE

*/

?>

<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); 
?>

<section  class="main <?php if(get_the_post_thumbnail()  ): echo "large_photo"; endif;?>">
	<div class="row">
		<div class="col-lg-12 content">
			<div >
				<div class="col-lg-12 image" style="<?php 
				
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
						<h1 class="ems_title">
							<?php the_title(); ?>
						</h1>
						<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
			<div  >
				
					
					<article class="col-lg-4 col-md-4  col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('EMS Footer Widget 1')):
					endif;
				?>
					</article>
					<article class="col-lg-4 col-md-4 col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('EMS Footer Widget 2')):
					endif;
				?>
					</article>
					<article class="col-lg-4 col-md-4 col-sm-4">
				<?php
					if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('EMS Footer Widget 3')):
					endif;
				?>
					</article>
					
				
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>