<?php
/*$expire = time();
echo "time is ". $expire;*/
$expire = time()+86400;
setcookie("name","sam bajracharya", $expire);
setcookie("age","24", $expire);
//unset cookie
$expire_unset = time()-86400;
// setcookie("name","sam bajracharya", $expire_unset);
setcookie("name", null);
setcookie("name"," ", $expire_unset);
	if(isset($_COOKIE['name'])){
		echo "cookie is set with name of " .$_COOKIE['name'];

}else{
	echo "cookie is not set";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<p>alway set cookie above html</p>
</head>
<body>
	
</body>
</html>