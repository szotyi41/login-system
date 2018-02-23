<?php
	
namespace LoginSystem;

session_start();

require_once __DIR__ . "/controller/database.php";
require_once __DIR__ . "/controller/login.php";

if(isset($_SESSION["user_login"])) {

	header("Location: view/user.php");

} 
else 
{

	if(isset($_POST["login"])) {

		
		$name = $_POST["login_name"];
		$pass = $_POST["login_pass"];

		$login = new Login();
		$user = $login->login($name, $pass);

		if($login != null) 
		{
			$_SESSION["user_login"] = true;
			$_SESSION["user_name"] = $user["name"];
			$_SESSION["user_mail"] = $user["mail"];

			header("Location: view/user.php");
		} 
	} 
	else 
	{
		header("Location: view/login.html");
	}
}

?>