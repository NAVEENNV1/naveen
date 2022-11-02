<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="color/stylesheet.css">
	<title>welcome page </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<body>
	<h1>WELCOME</h1>
	<h1><a href="index.php?logout=true"><button type="button" name="button" id="login" class="btn btn-primary">Logout</button> </a></h1>
	</body>
</head>
</html>
	
		
	