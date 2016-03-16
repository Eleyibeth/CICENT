<?php include_once('../login/includes/header.php'); ?>

<?php include_once('../login/includes/nav.php'); ?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php display_message(); ?>
			<?php validate_user_login(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="login.php" class="active" id="login-form-link">login</a>
						</div>
						<div class="col-xs-6">
							<a href="registre.php" id="">register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="" id="login-form" method="" role="form" style="display: ">
								<div class="form-group">
									<input type="text" id="email" tabindex="1">
								</div>
								<div class="form-group">
									<input type="password" id="login-password" tabindex="2" class="form-control">
								</div>
								<div class="form-group text-center">
									<input type="checkbox" tabindex="3">
									<label for="remember">remember me</label>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<input type="submit">
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