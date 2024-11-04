<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$submit = $_POST['submit'];
	if(isset($_POST["submit"])){
echo "succeesful <br>";
echo "welcom ${username}<br>";
	}
/*	if(isset($username) && !empty($username)){
echo "username is setted";
	}else{
		echo "username not found";
	}
		if(isset($password) && !empty($password)){
echo "password is setted";
	}else{
		echo "password not entered";
	}*/
	if(isset($_POST["username"])){
$username = $_POST['username'];
echo $username . "<br>";
	}else{
		$username='';
	}
		if(isset($_POST["password"])){
$password = $_POST['password'];
echo $password;
	}else{
		$password='';
	}
	?>
</body>
</html>