<?php 
	session_start();

	session_unset($_SESSION["email"]);

	header("location:../php/loginpage.php");

?>