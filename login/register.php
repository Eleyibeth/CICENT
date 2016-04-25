<?php include_once('../login/includes/header.php'); ?>

<?php include_once('../login/includes/nav.php'); ?>


	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php validate_user_registration(); ?>
		</div>
	</div>
<br>
<br>
<br>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="login.php" class="active" id="login-form-link">login</a>
						</div>
						<div class="col-xs-6">
							<a href="register.php" id="">Register</a>
						</div>
					</div>
					<hr>
				</div>
		

				<form action="" id="register-form" method="post" role="form">
					<div class="form-group">
						<input type="text" name="first_name" id="username" tabindex="1" class="form-control" placeholder="First Name" value="" required>
					</div>
					
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required>
					</div>
						
					<div class="form-group">
						<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
					</div>
						
					<div class="form-group">
						<input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
					</div>
						
					<div class="form-group">
						<input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" required>
					</div>
						
					<div class="form-group">
						<input type="password" name="confirm_password" id="confirm-password" tabindex="1" class="form-control" placeholder="Confirm Password" required>
					</div>
					
					<div class="form-group">
							<input type="submit" name="register-submit" id="register-submit" tabindex="1" class="form-control btn btn-register" value="Register Now">
					</div>
				</form>
			</div>
		</div>
	</div>



<?php include_once('../login/includes/footer.php'); ?>