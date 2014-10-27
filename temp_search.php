<?php
/* Template Name: Search Starting */
?>
<?php get_header(); ?>

	<section  class="main">
		<div class="row">
			<div class="col-lg-12 content">
				<h1  class="title">Search</h1>
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
			</div>
		</div>
	</section>

<?php get_footer(); ?>