<?php include_once('../login/includes/header.php'); ?>

<?php include_once('../login/includes/nav.php'); ?>

<div class="jumbotron">

	<?php display_message(); ?>
			<h1 class="text-center" style="color: #FF0000"> PDVSA ENT <br>
			(Empresa nacional de Transporte) </h1> 
</div>


<?php 

	$sql = "SELECT * FROM users";
	$result = query($sql);

	confirm($result);

	$row = fetch_array($result);

	echo  $row['username'];

 ?>

<?php include_once('../login/includes/footer.php'); ?>