<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		$_SESSION["mas"]="Please LogIn";
		header('location: ../index.php');
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>This is dashboard</h1>
	<a href="../myphp/logout.php" type="button">LogOut</a>
</body>
</html>