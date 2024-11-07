<?php
/*
cookie (client side)
cookie
post and get
alwy use cookie top of html
*/
session_start();
?>
<?php 
$_SESSION["name"] = "sam bajra";
$name = $_SESSION["name"];
echo $name;
?>
<br><?php 
$_SESSION["age"] = "30";
$age = $_SESSION["age"];
echo $age;
?>