<?php get_header(); ?>
<section  id="archive" class="site-content">
	<?php if ( have_posts() ) : ?>
		<header class="archive-header">
				<h1 class="archive-title">
				Archive
			</h1>
		</header>
		<?php while ( have_posts() ) : the_post(); ?>
		<article class="main_cat">
			<h2 class="cat_page"><?php the_title();?></h2>
			<div><?php the_excerpt(); ?></div>
			<footer>
				<a href="<?php  the_permalink(); ?>" class="label label-warning">Read More</a>
			</footer>
		</article>
	<?php endwhile; endif; ?>
</section>




<?php get_footer(); ?>