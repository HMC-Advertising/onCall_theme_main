<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); 
?>

<section  class="main <?php if(get_the_post_thumbnail() ): echo "large_photo"; endif;?>"> 
	<div class="row">
		<div class="col-lg-12 content">
		<div>	
	<?php 
				
			 	$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0]; 
					if(get_the_post_thumbnail() ): ?>
			
				<div class="col-lg-12 image" style="<?php
					echo "background-image:url('".$thumb_url."')";  ?>">
				</div>
			 
			<? endif; endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div>

		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1  class="title">
					<?php the_title(); ?>
				</h1>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
	</div>
</section>




<?php get_footer(); ?>