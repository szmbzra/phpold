<!DOCTYPE html>
<html>
<body>
<a href="dynamic.php?PageName=constant">About us</a>
<?php
$PagesDirectoy = 'Pages Folder';
if(!empty($_GET['PageName'])){
$PagesFolder = scandir($PagesDirectoy,0);
unset($PagesFolder[0],$PagesFolder[1]);
$PageName = $_GET['PageName'];
if(in_array($PageName. '.inc.php', $PagesFolder)){
include($PagesDirectoy.'/'.$PageName.'.inc.php');
}else{
	echo "<h1>you are lost</h1>";
}
}


?> 

</body>
</html>
