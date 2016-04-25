<?php include_once('../login/includes/header.php'); ?>

<div class="row">
	<div class="col-md-6 col-md-offset-3 col-md-6">
		<div class="alert-placeholder">
			<?php display_message(); ?>
			<?php recover_password(); ?>
		</div>
		<div class="panel panel-success">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center"><h2><b>Recover password</b></h2></div>
							<form action="" id="register-form" method="post" role="form" autocomplete="off" >
								<div class="form-group">
									<label for="email">email address</label>
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="email add">
								</div>
								<div class="form-group">
									<div class="row">
											
										<div class="col-md-6 col-sm-6 col-xs-6">
											<input type="submit" name="cancel_submit" id="cancel-submit" tabindex="2" class="form-control">
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<input type="submit" name="recover-submit" id="recover-submit" tabindex="2" class="form-control">
										</div>
									</div>
								</div>
								<input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator(); ?>">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<?php include_once('../login/includes/footer.php'); ?>