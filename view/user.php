<?php 
	session_start(); 

	if(!$_SESSION["user_login"]) {
		$login = new Login();
		$login->logout();
	}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' 'unsafe-eval' data: blob:; ">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>User</title>

	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<script src="js/jquery-3.2.1.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#logout").click(function() {
				$.ajax(
					url: "controller/logout.php",
					success: function() {
						console.log("Logged out");
					}
				);
			});
		});
	</script>

</head>
<body>

<div id="logout">Log out</div>
<div id="name">Név: <?php echo $_SESSION["user_name"]; ?></div>
<div id="mail">E-mail: <?php echo $_SESSION["user_mail"]; ?></div>

</body>
</html>
