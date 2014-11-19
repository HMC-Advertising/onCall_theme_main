<?php 
/* 
Template Name: Category Page 
*/ 
get_header(); 
if (have_posts()) : while (have_posts()) : the_post(); 
?>

<section id="cat_page"  class="main <?php if(get_the_post_thumbnail() ): echo "large_photo"; endif;?>"> 
	<div class="row">
		<div class="col-lg-12 content">
			
	<?php 
				
			 	$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0]; 
					if(get_the_post_thumbnail() ): ?>
			
				<div class="col-lg-12 image" style="<?php
					echo "background-image:url('".$thumb_url."')";  ?>">
				</div>
			 
			<? endif; endwhile; endif; wp_reset_postdata(); ?>
	
	<div>
	
	
			<h1 class="title"><?php the_title(); ?></h1>
			
	<?php 
		$cats = get_categories();
		foreach( $cats as $cat):
			$cat_link = get_category_link($cat->cat_ID);
			//$option = get_option( 'taxonomy_image_' . $cat->cat_ID );
			$s = explode("_", $cat->name);

//var_dump($s);


			if( ($s[0] !="Uncategorized") and ($s[0] != "featured news" ) and ($s[0] != "featured spotlight" ) ): 
			$args = array('posts_per_page'   => 1, 'category'         => $cat->cat_ID, 'post_type' => 'post');
			$posts = get_posts($args);
			foreach($posts as $post): setup_postdata( $post );
			?>
			
			<article>
				<header class="row">
					
					<a href="<?php echo esc_url($cat_link); ?>"  class="col-lg-4 col-md-6 col-sm-10 col-xs-10 col-xxs-10 <?php echo $cat->name ; ?>">
						<?php
							echo "<div style='font-size:25px'>". $cat->name ."</div><div> View All ". $cat->name ." <img src='".get_template_directory_uri()."/assets/img/double_arrow_white.png'></div>";
						?>
					</a>
				
				</header>
				<div class="row">
					<div class="col-lg-12">
					<h1 class="title">
						<a href="<?php  the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
					<div class="blogcontent">
						<?php the_excerpt(); ?>
					</div>
						</div>
				</div>
				<footer>
					<a href="<?php  the_permalink(); ?>" class="label label-warning">
						Read More
					</a>
				</footer>
			</article>

			<?php endforeach; endif;   endforeach;  wp_reset_postdata(); ?>


		<?php 
	$argal = array(
		'post_type' => 'alert',
		'posts_per_page' =>1
			  );
			$alert = new WP_Query($argal);
			if ($alert->have_posts()) : 
				while ($alert->have_posts()) : 
				$alert->the_post(); ?>
					<article>
						<header class="row">
					
							<a href="/alert/"  class="col-lg-4 col-md-6 col-sm-10 col-xs-10 col-xxs-10"><div style='font-size:25px'>Alerts</div><div> View All Alerts<img src='<?php echo get_template_directory_uri();?>/assets/img/double_arrow_white.png'></div></a>
						</header>
						<div class="row">
							<div class="col-lg-12">
								<h1 class="title">
									<a href="<?php  the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h1>
								<div class="blogcontent">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					<footer>
						<a href="<?php  the_permalink(); ?>" class="label label-warning">Read More</a>
					</footer>
				</article>
		<?php
				endwhile; endif;
 				wp_reset_postdata();

?>
		<?php 
	$argal2 = array(
		'post_type' => 'ai1ec_event',
		'posts_per_page' =>1
			  );
			$event = new WP_Query($argal2);
			if ($event->have_posts()) : 
				while ($event->have_posts()) : 
				$event->the_post(); ?>
					<article>
						<header class="row">
					
							<a href="/event/"  class="col-lg-4 col-md-6 col-sm-10 col-xs-10 col-xxs-10"><div style='font-size:25px'>Events</div><div > View All Events<img src='<?php echo get_template_directory_uri();?>/assets/img/double_arrow_white.png'></div></a>
						</header>
						<div class="row">
							<div class="col-lg-12">
								<h1 class="title">
									<a href="<?php  the_permalink(); ?>">
										<?php the_title(); ?> 
									</a>
								</h1>
								<div class="blogcontent">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					<footer>
						<a href="<?php  the_permalink(); ?>" class="label label-warning">Read More</a>
					</footer>
				</article>
		<?php
				endwhile; endif;
 				wp_reset_postdata();

?>
			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>