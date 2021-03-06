<?php 


/******* helper functions *******/

function clean($string){
	return htmlentities($string);
}

function redirect($location){
	return header("Location:{$location}");
}

function set_message($message){
	if (!empty($message)) {

		$_SESSION['message'] = $message;
	} else {
		$message ="";
	}
}


function display_message(){
	if (isset($_SESSION['message'])) {

		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}


function token_generator(){
	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
	return $token;
}

function validation_errors($error_message){
	$error_message = <<<DELIMITER
<div class="alert alert-danger alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button><strong>Warning!</strong> $error_message</div>
DELIMITER;

return $error_message;
}

function email_exists($email){
	$sql = "SELECT id FROM users WHERE email = '".$email."'";
	$result = query($sql);

	if (row_count($result) == 1) {
		return true;
	} else {
		return false;
	}
}

function username_exists($username){
	$sql = "SELECT id FROM users WHERE username = '$username'";
	$result = query($sql);

	if (row_count($result) == 1) {
		return true;
	} else {
		return false;
	}
}

function send_email($email, $subject, $msg, $headers){
	return mail($email, $subject, $msg, $headers);
}


/******* validation functions *******/

function validate_user_registration(){

	$errors = [];

	$min = 3;
	$max = 20; 


	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$first_name       = clean($_POST['first_name']);
		$last_name        = clean($_POST['last_name']);
		$username         = clean($_POST['username']);
		$email            = clean($_POST['email']);
		$password         = clean($_POST['password']);
		$confirm_password = clean($_POST['confirm_password']);

		if (strlen($first_name) < $min) {
			$errors[] = "Su nombre no puede ser inferior a {$min} caracteres";
		}

		if (strlen($first_name) > $max) {
			$errors[] = "Su nombre no puede contener más de {$max} caracteres" ;
		}

		if (strlen($last_name) < $min) {
			$errors[] = "Su apellido no puede ser inferior a {$min} caracteres";
		}

		if (strlen($last_name) > $max) {
			$errors[] = "Su apellido no puede ser inferior a {$max} caracteres";
		}

		if (strlen($username) < $min) {
			$errors[] = "Su nombre de usuario no puede ser inferior a {$min} caracteres";
		}

		if (strlen($username) > $max) {
			$errors[] = "Su nombre de usuario no puede ser inferior a {$max} caracteres";
		}

		if (username_exists($email)) {
			$errors[] = "Lo sentimos ese nombre de usuario ya está se toma";
		}

		if (email_exists($email)) {
			$errors[] = "Lo sentimos que el correo electrónico se ha registrado alredy";
		}

		if (strlen($email) < $min) {
			$errors[] = " Su correo electrónico no puede ser inferior a {$min} caracteres";
		}

		if ($password !== $confirm_password) {
			$errors[] =  "Sus campos de contraseña no coinciden";
		}

		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo validation_errors($error);
			}
		} else {
			if(register_user($first_name, $last_name, $username, $email, $password)){

				set_message("<p class='bg-success text-center'> Por favor, compruebe su carpeta de correo electrónico o el intervalo de enlace de activación </p>");
				redirect("index.php");
			} else {
				set_message("<p class='bg-danger text-center'> Siento que no podría registrar el usuario </p>");
				redirect("index.php");
			}
		}

	} // post request
} // function

/******* Register user function *******/


function register_user($first_name, $last_name, $username, $email, $password){
	
	$first_name        = escape($first_name);
	$last_name         = escape($last_name);
	$username          = escape($username);
	$email             = escape($email);
	$password          = escape($password);

	if (email_exists($email)) {
		return false;
	} else if (username_exists($username)) {
		return false;
	} else{
		$password = md5($password);

		$validation_code = md5($username + microtime());
		$sql = "INSERT INTO users(first_name, last_name, username, email, password, validation_code, active)";
		$sql.= "VALUES('$first_name','$last_name','$username','$email','$password','$validation_code', 0)";
		$result = query($sql);
		confirm($result);

		$subject = "Activate Account";
		$msg = "Por favor haga clic en el enlace para activar su cuenta http://http://localhost/proyectos/CICENT/login/activate.php?email=$email&code=validation_code";
		$headers = "From: noreply@youtwebsite.com";
		send_email($email, $subject, $msg, $headers);

		return true;
	}
}


/******* Activate user function *******/

function activate_user(){
	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		if (isset($_GET['email'])) {
			$email = clean($_GET['email']);
			$validation_code = clean($_GET['code']);
			$sql = "SELECT id FROM users WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['email'])."'";
			$result = query($sql);
			confirm($result);

		if (row_count($result) == 1) {
			$sql2 = "UPDATE users SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code = '".escape($validation_code)."'";
			$result2 = query($sql2);
			confirm($result2);
			set_message("<p class='bg-success'> Su cuenta ha sido activada por favor entra</p>");
			redirect("login.php");

		} else {
			set_message("<p class='bg-success'> En este momento su cuenta no se pudo activar</p>");
			redirect("login.php");
		}

		}
	}
}//function

/******* validate user login function *******/

function validate_user_login(){
	$errors = [];

	$min = 3;
	$max = 20;

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$email    = clean($_POST['email']);
		$password = clean($_POST['password']);
		$remember = isset($_POST['remember']);

		if (empty($email)) {
			$errors[] = "email field cannot be empty";
		}

		if (empty($password)) {
			$errors[] = "password field cannot be empty";
		}

		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo validation_errors($error);
			}
		} else{
			if (login_user($email, $password, $remember)) {
				redirect("admin.php");
			} else{
				echo validation_errors("your credentials are not correct");
			}
		}
	}
}//function


/******* user login function *******/

function login_user($email, $password, $remember){
	$sql = "SELECT password, id FROM users WHERE email = '".escape($email)."' AND active = 1";
	$result = query($sql);
	if (row_count($result) == 1) {
		$row = fetch_array($result);
		$db_password = $row['password'];

		if (md5($password) === $db_password) {

			if ($remember == "on") {
				setcookie('email', $email, time() + 86400);
			}
			$_SESSION['email'] = $email;
			return true;
		} else{
			return false;
		}

		return true;
	} else{
		return false;
	}
}//funtion

/******* logged  in function *******/

function logged_in(){
	if (isset($_SESSION['email']) || isset($_COOKIE['email'])) {
		return true;
	} else{
		return false;
	}
}//function

/******* recover  password function *******/ 

function recover_password(){
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		if (isset($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
			$email = clean($POST['email']);

			if (email_exists($email)) {
				$validation_code = md5($email + microtime());

				setcookie('temp_access_code', $validation_code, time()+ 900);

				$sql = "UPDATE users SET validation_code = '".escape($validation_code)."' WHERE email = '".escape($email)."'";
				$result = query($sql);
				confirm($result);
				
				$subject = "please reset your password";
				$message = "here is your password rest code {validation_code} click here to reset your password http//localhost/proyectos/CICENT/login/code.php?email=$email&code=$validation_code";
				$headers = "From: noreplyQyoutwebsite.com";

				send_email($email, $subject, $message, $headers);
				
				set_message("<p class='bg-success text-center'>please your email orcheck span folder a password reset code </p> ");
				redirect("index.php");
			} else{
				echo validation_errors("this Email could not be sent");
			}
		} else{
			redirect("index.php");
			}

		//token checks
			if (isset($_POST['cancel_submit'])) {
				redirect("login.php");
			}
	}//post request
}//function

/******* Code validation *******/ 

function validate_code(){
	
	if (isset($_COOKIE['temp_access_code'])) {

		if (!isset($_GET['email']) && !isset($_GET['code'])) {
			redirect("index.php");
				
		} else if (empty($_GET['email']) || empty($_GET['code'])) {
			redirect("index.php");
		}
	} else{
		
		if (isset($_POST['code'])) {
			$validation_code = clean($_POST['code']);
			$sql = "SELECT id FROM users WHERE validation_code = '".escape($validation_code)."' AND email = '".escape($email)."'";
			$result = query($sql);

			if (row_count($result) == 1 ) {
				setcookie('temp_access_code', $validation_code, time()+ 900);
				redirect("reset.php?email=$email&code=validation_code");
			} else {
				echo validation_errors("sorry wrong validation code");;
			}
			
		}
		set_message("<p class='bg-danger text-center'>sorry your validation cookie was expired </p> ");
		redirect("recover.php");
	}
}


/******* password reset function *******/ 

function password_reset(){

	if (isset($_COOKIE['temp_access_code'])) {

		if (isset($_GET['email']) && isset($_GET['code'])) {
	
			if (isset($_SESSION['token']) && isset($_POST['token'])){

				if($_POST['token'] === $_SESSION['token']) {

					if ($_POST['password'] === $_POST['confirm_password']){
						$update_password = md5($_POST['password']);
						$sql = "UPDATE users SET password = '".escape($update_password)."', validate_code = 0 WHERE email = '".escape($_GET['email'])."'";
						query($sql);
						set_message("<p class='bg-danger text-center'>you password has been updated, please login </p> ");
						redirect("login.php");

				} else {
					echo validation_errors("password fields don't  match");
				}

			}
	
		} 

	} else{
		set_message("<p class= 'bg-danger text-center> sorry your time has expired</p>");
		redirect("recover.php");
		}
	}
}

