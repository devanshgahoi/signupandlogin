<?php
require 'config.php';

/*if(!empty($_SESSION["id"])){

	$id = $_SESSION["id"];
	$result = mysqli_query($com, "SELECT firstname, email, password FROM tb_user");
	$row = mysqli_fetch_assoc($result);
}
else {
	header("Location: login.php");
}*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body bgcolor="#66c2ff">
		<h1><font color="white"/>Login Successful !       </h1>
		<a href="logout.php">Logout</a>
</body>
</html>