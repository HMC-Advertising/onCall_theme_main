<?php get_header(); ?>

	
<section class="main <?php echo get_the_title(); ?>">
	<div class="row">
		<div class="col-lg-12 content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(!get_the_title() == "Contact Us"): ?>
					<h1  class="title">
						<?php the_title(); ?>
					</h1>
				<?php endif; ?>	
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>