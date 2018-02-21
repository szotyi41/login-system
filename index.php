<?php
	
namespace LoginSystem;

session_start();

require __DIR__ . "/controller/database.php";
require __DIR__ . "/controller/user.php";

echo "mivan?";

if(isset($_POST["login_name"])) 
{

	$user = new User();
	$login = $user->login($_POST["login_name"], $_POST["login_pass"]);

	echo "mne";

	

} else


header("Location: view/login.html");

?>