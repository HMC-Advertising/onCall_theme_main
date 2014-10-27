<?php get_header(); ?>
	<section  class="main">
		<div class="row">
			<div class="col-lg-12 content">
				<h1  class="title">Search Results</h1>
				<?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>
				<section id="posts-container" class="<?php echo $container_class; ?> clearfix">
					<?php
					$post_count = 1;

					$prev_post_timestamp = null;
					$prev_post_month = null;
					$first_timeline_loop = false;

					while(have_posts()): the_post();
						$post_timestamp = strtotime($post->post_date);
						$post_month = date('n', $post_timestamp);
						$post_year = get_the_date('o');
						$current_date = get_the_date('o-n');
					?>

					<article id="post-<?php the_ID(); ?>" class="col-lg-12 post">
						<div class="page-header">
  							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<div>
							<?php the_content(); ?>
						<div>
						<div class="meta-info well">
							 <?php the_date(); ?> | <?php the_category(', '); ?> | <?php the_tags( ); ?>
						</div>
					</article>
					
					<?php endwhile; ?>
					
				</section>
				<?php else: ?>

					<h2>Sorry Couldn't find what you were looking for.</h2>

				
				<?php endif; ?>

				
				<section class="divider">
					<hr>
				</section>
				<section class="anSearch">
					<p class="lead">Try Another Search</p>
					<form class="search-form" action="<?php bloginfo('url'); ?>" method="get" role="search">
						<div class="input-group">
  							<input type="text" class="form-control" name="s" placeholder="Search …">
  							<div class="input-group-btn">
  								<button class="btn btn-default" type="submit">
  									<i class="fa fa-search"></i>
  								</button>
  							</div>
  						</div>
					</form>	
				</section>
			</div>
		</div>
	</section>

<?php get_footer(); ?>