<?php
sleep(2);
$name = trim(stripslashes(htmlspecialchars($_POST['name'])));
$email = trim(stripslashes(htmlspecialchars($_POST['email'])));
$message = trim(stripslashes(htmlspecialchars($_POST['message'])));
$humancheck = $_POST['humancheck'];
$honeypot = $_POST['honeypot'];

if ($honeypot == 'http://' && empty($humancheck)) {
	$error_message = '';
	$reg_exp = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,4}$/";

	if (!preg_match($reg_exp, $email)) {

		$error_message .= "<p>Es necesaria una direccion v&acutelida.</p>";
	}
	if (empty($name)) {

		$error_message .= "<p>Favor de ingresar t&uacute nombre.</p>";
	}
	if (empty($message)) {

		$error_message .= "<p>favor de ingresar el mensaje.</p>";
	}
	if (!empty($error_message)) {
		$return['error'] = true;
		$return['msg'] = "<h3>El formulario no se llen&ocute correctamente.</h3>".$error_message;
		echo json_encode($return);
		exit();
	} else {
		//include 'mandarcorreo.php';
		$return['error'] = false;
		$return['msg'] = "Gracias " .$name ."! Nos pondremos en contacto contigo a la brevedad.";
		echo json_encode($return);
	}
} else {

	$return['error'] = true;
	$return['msg'] = "Hubo un problema con el env&iacuteo, favor de intentarlo de nuevo.";
	echo json_encode($return);
}
?>
