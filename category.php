<?php get_header(); ?>


   <section id="cat_page" class="site-content">
		

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category: %s', 'onCall_theme' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) :  ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php while ( have_posts() ) : the_post(); ?>
			<article class="main_cat">
				<header>
					<h2 class="cat_page"><?php the_title(); ?></h2>
				</header>
				<div>
					<?php the_excerpt(); ?>
				</div>
				<footer>
					<a class="label label-warning" href="<?php echo esc_url(get_the_permalink());?>">Read More</a>
				</footer>
			</article>
			<?php endwhile; endif; ?>

		
	</section><!-- #primary -->




<?php get_footer(); ?>