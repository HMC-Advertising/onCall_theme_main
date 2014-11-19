<?php get_header(); ?>

<section id="login">
	<form id="login_form" class="login" method="post" action="https://verv.vermont.gov/login.php" name="login_form">

		<div class="wrap">
			<h1 class="form-title">
				Sign In</h1>
			<form class="login">
				<input id="username" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xxs-12" type="text" tabindex="9" maxlength="255" size="30" name="username" placeholder="Username">
				<input id="password" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xxs-12" type="password" tabindex="10" maxlength="255" size="30" name="password" placeholder="Password">
				
				<button class="arrowbut" type="submit">
					<div class="astart arrow triangle-right white"></div>
					<div class="acontent arrow">LOG IN</div>
					<div class="aend arrow triangle-right orange"></div>
				</button>


				<noscript>
					<input type="hidden" name="no_javascript" id="no_javascript" value="true" />
				</noscript>
				<div class="remember-forgot">
					<div class="row">
						<div class="col-md-6 forgot-pass-content">
							<a href="https://verv.vermont.gov/pw_assist_request.php" class="forgot-pass">Forgot Password</a>
						</div>
					</div>
				</div>
			</form>
		</div>

	</form>

</section>




<?php get_footer(); ?>