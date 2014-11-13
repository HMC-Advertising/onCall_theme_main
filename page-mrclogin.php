
<?php get_header(); ?>

<section id="login">
	<form id="login_form" class="login" method="post" action="https://verv.vermont.gov/login.php" name="login_form">

		<div class="wrap">
			<p class="form-title">
				Sign In</p>
			<form class="login">
				<input id="username" type="text" tabindex="9" maxlength="255" size="30" name="username" placeholder="Username">
				<input id="password" type="password" tabindex="10" maxlength="255" size="30" name="password" placeholder="Password">
				<input id="login_submit" class="btn btn-warning btn-sm" type="submit" tabindex="12" value="Log In" name="login_submit">

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
<script type="text/javascript">

	 $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
});

</script>



<?php get_footer(); ?>