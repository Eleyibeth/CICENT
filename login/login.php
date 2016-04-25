<?php include_once('../login/includes/header.php'); ?>
<?php 
	if (logged_in()) {
		redirect("admin.php");
	}

 ?>

<?php include_once('../login/includes/nav.php'); ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php display_message(); ?>
			<?php validate_user_login(); ?>
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
				
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<form action="" id="login-form" method="" role="form" >
								<div class="form-group">
									<input type="text" id="email" tabindex="1" class="form-control" placeholder="email" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="password" required>
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
									<label for="remember">remember me</label>
								</div>
								<div class="form-group text-center">
									<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn" name="Entrar">
								</div>
					
						
								<div class="form-control">
									<div class="row">
										<div class="col-md-12">
											<div class="text-center">
												<a href="recover.php" tabindex="5" class="forgot-password">forgot password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('../login/includes/footer.php'); ?>