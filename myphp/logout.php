<?php 
	session_destroy();
	session_start();
	$_SESSION["mas"]="Log Out Sucessfully!";
	header('location: ../index.php');

?>