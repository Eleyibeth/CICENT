<?php include_once('../login/includes/header.php'); ?>

<div class="row">
	<div class="col-lg-6 col-lg-offset-3">
	<?php display_message(); ?>
	<?php validation_code();  ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
		<div class="alert-placeholder">
			
		</div>
		<div class="panel panel-seccess">
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-center"><h2><b>Enter</b></h2></div>
						<form action="" id="register-form" method="post">
							<div class="form-group">
								<input type="text" name="code">
							</div>
							<div class="form-group">
								<div class="row">
									
									<div class="col-lg-3">
										<input type="submit">
									</div>
									<div class="col-lg-3">
										<input type="submit">
									</div>
								</div>
							</div>
							<input type="submit">
						</form> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('../login/includes/footer.php'); ?>