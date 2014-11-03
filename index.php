<?php $options = get_option( 'theme_settings' ); ?>
<?php get_header(); ?>

<section  class="main blog">
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-lg-12 content">
				<h1  class="title">
					<a href="<?php echo get_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				<div class="blogcontent">
					<?php the_excerpt(); ?>
				</div>
				<div class="seperate"></div>
			</div>
			
		<?php endwhile; ?><?php endif; ?>
	</div>
</section>


<?php get_footer(); ?>