<?php
//new functions

	function featured_area(){
		//this can be placed anywhere in the theme but it's really used for the front page template.

		$arg1 = array(
			'category_name' => 'featured-mrc', 
			'showposts' => '1'
			);
		$arg2 = array(
			'category_name' => 'featured-ems',
			'showposts' => '1'
			 );
		$arg3 = array(
			'category_name' => 'featured-news',
			'showposts' => '1'
			 );

		?>
		<div id="carousel-featured" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
    			<li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
    			<li data-target="#carousel-featured" data-slide-to="1"></li>
    			<li data-target="#carousel-featured" data-slide-to="2"></li>
    			<li data-target="#carousel-featured" data-slide-to="3"></li>
  			</ol>
			 <div class="carousel-inner">  			
				<section class="featured_mrc item active">
					<div class="content">
				<?php 
				
					$fmrc = new WP_Query($arg1);

					if ( $fmrc ->have_posts() ) {
						
						while ( $fmrc ->have_posts() ) {
							$fmrc ->the_post();
							?>
							<header>
								<h1><?php the_title() ; ?></h1>
							</header>
							<div class="image_container">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<article class="content">
								<?php the_excerpt(); ?>

							</article>
							<footer>
								<a class='arrowbut' href="<?php echo get_the_permalink(); ?>">
									<div class='astart arrow triangle-right white'></div>
									<div class='acontent arrow'>MORE</div>
									<div class='aend arrow triangle-right orange'></div>
								</a>
							</footer>

							 <?php
						}
						
					}
					wp_reset_query(); 
				?>
					</div>
				</section>
				
				<section class="feature_event item">
					<?php echo do_shortcode('[ai1ec view="posterboard" cat_name="featured"]'); ?>
				</section>
				<section class="featured_ems item">
					<div class="content">
					<?php 
				
					$fems = new WP_Query($arg2);
					if ( $fems ->have_posts() ) {
						
						while ( $fems ->have_posts() ) {
							$fems ->the_post();
							 ?>
							 <header>
								<h1><?php the_title() ; ?></h1>
							</header>
							<div class="image_container">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<article class="content">
								<?php the_excerpt(); ?>

							</article>
							<footer>
								<a class='arrowbut' href="<?php echo get_the_permalink(); ?>">
									<div class='astart arrow triangle-right white'></div>
									<div class='acontent arrow'>MORE</div>
									<div class='aend arrow triangle-right orange'></div>
								</a>
							</footer>
					<?php
						}
					}
					wp_reset_query(); 
				?>
					</div>
				</section>
				<section class="featured_post item">
					<div class="content">
					<?php 
				
					$fp = new WP_Query($arg3);
					if ( $fp ->have_posts() ) {
						
						while ( $fp->have_posts() ) {
							$fp->the_post();
							?>

							<header>
								<h1><?php the_title() ; ?></h1>
							</header>
							<div class="image_container">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<article class="content">
								<?php the_excerpt(); ?>

							</article>
							<footer>
								<a class='arrowbut' href="<?php echo get_permalink(); ?>">
									<div class='astart arrow triangle-right white'></div>
									<div class='acontent arrow'>MORE</div>
									<div class='aend arrow triangle-right orange'></div>
								</a>
							</footer>

							<?php
						}
						
					}
					wp_reset_query(); 

				?>
					</div>
				</section>
			</div>
		 	<a class="left carousel-control" href="#carousel-featured" role="button" data-slide="prev">
		 		<span class="fa-stack fa-lg down left">
    				<i class="fa fa-circle fa-stack-2x"></i>
    				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_left.png" class="fa fa-stack-1x" >
    				
    			</span>
			</a>
  			<a class="right carousel-control" href="#carousel-featured" role="button" data-slide="next">
  				<span class="fa-stack fa-lg down right">
  					<i class="fa fa-circle fa-stack-2x"></i>
    			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow_right.png" class="fa fa-stack-1x" >
    			</span>
			</a>
		</div>
		<?
	}

?>