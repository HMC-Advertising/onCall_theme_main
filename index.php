<?php $options = get_option( 'theme_settings' ); ?>
<?php get_header(); ?>

<section id="sb-sit" class="main">
						<div class="row">
							<div class="col-lg-12 content">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<h1>
										<a href="<?php echo get_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h1>
									<?php the_content(); ?>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>

						</div>
					</section>


<?php get_footer(); ?>