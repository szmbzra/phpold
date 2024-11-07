<?php
/*$expire = time();
echo "time is ". $expire;*/
$expire = time()+86400;
setcookie("name","sam bajracharya", $expire);
setcookie("age","24", $expire);
// print_r($_COOKIE);
echo "my name is " .$_COOKIE['name']. " ".$_COOKIE['age'] ;
?>