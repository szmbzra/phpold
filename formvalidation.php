<?php
$nameerror = "";
$emailerror = "";
$gendererror = "";
$wesiteerror = "";

if(isset($_POST['submit'])){
	if(empty($_POST["name"])){
		$nameerror = "name is required";
	}else{
		$name =test_user_input($_POST["name"]);
		if(!preg_match("/^[A-Za-z. ]*$/", $name)){
			$nameerror = "only letter and white space allowed";
		}
	}
if(empty($_POST["email"])){
		$emailerror = "email is required";
		if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email)){
			$emailerror = "invalid email address";
		}
	}else{
		$email =test_user_input($_POST["email"]);
}
if(empty($_POST["gender"])){
		$gendererror = "gender is required";
	}else{
		$gender =test_user_input($_POST["gender"]);
}
if(empty($_POST["wesite"])){
		$$wesiteerror = "wesite is required";
	}else{
		$website =test_user_input($_POST["wesite"]);
}
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["website"]) && !empty($_POST["gender"])){
echo "<h2>your submited information</h2>";
echo "name : {$_POST["name"]}<br>";
echo "email : {$_POST["email"]}<br>";
echo "gender : {$_POST["gender"]}<br>";
echo "website : {$_POST["website"]}<br>";
echo "comment : {$_POST["comment"]}<br>";
}else{
	echo "information not completed";
}

}



function test_user_input($data){
	return  $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>form validation</h2>
	<form action="formvalidation.php" method ="post">
	<legend>Please fill out the following fields</legend>
	
	name:<br>
	<input type="text" name="name" value="" id="">*
<?php  echo $nameerror; ?>
	<Br><br>
	
	email:<Br>
	<input type="email" name="email" value="" id="">*
	<?php  echo $emailerror; ?><br>
	gender:*	<?php  echo $gendererror; ?><br><br><br>
	<input type="radio" name="gender" value="male" id="">Male
	<input type="radio" name="gender" value="female" id="">Female
	<br><br>
	website<br>
	<input type="text" name="website" id="">
	* <?php  echo $wesiteerror; ?><br>
	comment<br>
	<textarea name="comment" row="10" cols="25" id=""></textarea>
<br>
<br>
<input type="submit" value="submit" name="submit">
	</form>
	
</body>
</html>