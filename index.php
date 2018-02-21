<?php
	
namespace LoginSystem;

session_start();

require __DIR__ . "/controller/database.php";
require __DIR__ . "/controller/user.php";

if(isset($_POST["login_name"])) {
	
	$user = new User();
	$login = $user->login($_POST["login_name"], $_POST["login_pass"]);

	if($login != null) 
	{
		$_SESSION["user_name"] = $login["name"];
		$_SESSION["user_mail"] = $login["mail"];

		echo json_encode($login);
	}

} 
else 
{
	header("Location: view/login.html");
}

?>