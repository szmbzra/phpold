<?php
/*function normal(){
	$value = 1;
	echo $value."<br>";	
	$value++;
}
normal();
normal();*/

function staticv(){
		static $value = 1;
	echo $value. " ". count . "<br>";	
		$value++;
}
staticv();
staticv();
staticv();
staticv();
?>