<?php
require 'config.php';
if(!empty($_SESSION["id"])){
	header("Location: index.php");
}
if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

	$row= mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		if($password == $row["password"]){
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location: index.php");

		}
		else {

			echo 
		"<script> alert('Incorrect Password!'); </script>";
		

	}} 
	else {

		echo 
		"<script> alert('User is not Registered!'); </script>";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <body bgcolor="#e36868">
 
	<style type="text/css">
		#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;	
		}

		#button{

			padding:  10px;
			text-align: center;
			width: 500px;
			color: white;
			background-color: orange;
			border: none;
			display:inline-block;
			font-size: 20px;
			cursor: pointer;
			
		}

		#box{

			background-color: white;
			margin: auto;
			width: 400px;
			padding: 40px;
		}
		

			.button {
  background-color: #F0F0F0; /* Green */
  border: none;
  color: #888888;
  padding: 15px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button1 {
  background-color: #000066; /* Green */
  border: none;
  color: white;
  padding: 15px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


		
	</style>
	<div id="box">

		<form method="post">
			<div style="font-size: 30px;margin: 10px; color: black">	<b>
				Login </b></div>
				<br> <br>
			
            <input id="text" type="text" name="email" placeholder="EMAIL"><br><br>
             
			
			<input  id= "text" type="password" name="password" placeholder="PASSWORD"> <br><br>
			<font color="grey"/> <center> FORGOT YOUR PASSWORD? </center>

			<br>
			<button class="button" type="submit" name="submit">REGISTER</button>
			
			<button class="button1" type="submit" name="submit">SIGN IN</button>
</form>
</body>
</html>