<?php get_header(); ?>
<section class="main">
	<div class="row">
		<div class="col-lg-12 content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1  class="title">
					<?php the_title(); ?>
				</h1>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</section>




<?php get_footer(); ?>