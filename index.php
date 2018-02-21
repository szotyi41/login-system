<?php
	
namespace LoginSystem;

session_start();

require_once __DIR__ . "/controller/database.php";
require_once __DIR__ . "/controller/login.php";

if(isset($_POST["login_name"])) {
	
	$name = $_POST["login_name"];
	$pass = $_POST["login_pass"];

	$user = new User();
	$login = $user->login($name, $pass);

	if($login != null) 
	{
		$_SESSION["user_name"] = $login["name"];
		$_SESSION["user_mail"] = $login["mail"];

		echo json_encode($login);
	} 
	else 
	{
		header("Location: view/login.html");
	}

} 

header("Location: view/login.html");


?>