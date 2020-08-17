<?php 
	if(isset($_SESSION["email"])){
		header("Location:../html/home.html");
	}else{
		include 'databaseconnection.php';
	$email=$_POST["email"];
	$password=$_POST["password"];
	$hashPassword=md5($password);
	$sql="Select * from adminlogin where email = '".$email."' and password = '".$hashPassword."'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		session_destroy();
		session_start();
		$_SESSION["email"]=$email;
		echo "correct";
	}else{
		echo "incorrect credentials";
	}
	
	}
	
?>