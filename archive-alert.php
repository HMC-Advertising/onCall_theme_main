<?php get_header(); ?>
<section id="archive" class="site-content">
	

	<?php 
		$argsal = array('post_type'=>'alert',
				   "post_per_page" => "10");
	$alert = new Wp_Query($argsal);

		if ( $alert->have_posts() ) : ?>

				<header class="archive-header">
				<h1 class="archive-title">
						Alerts
					</h1>
				</header>
			<?php while ( $alert->have_posts() ) : $alert->the_post(); ?>
				<article class="main_cat">
				<header>
					<h2 class="cat_page"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
					</header>
					<div><?php the_excerpt(); ?></div>
					<footer>
						<a href="<?php  the_permalink(); ?>" class="label label-warning">Read More</a>
					</footer>
				</article>
					
			<?php endwhile; endif; ?>


</section><!-- #primary -->




<?php get_footer(); ?>