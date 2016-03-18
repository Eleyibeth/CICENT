<?php include_once('../login/includes/header.php'); ?>

<?php include_once('../login/includes/nav.php'); ?>

<div class="jumbotron">
	<h1 class="text-center"><?php
	if (logged_in()){
		echo "logged in";
	} else{
		redirect("index.php");
	}
	?></h1>
</div>

<?php include_once('../login/includes/header.php'); ?>
