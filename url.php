<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php ?>
	<?php 
$web = "google nepal";
$search = "sam bajracharya online course";
$result = "https://".urlencode($web)."?search=".rawurlencode($search);
echo $result;

	?>
</body>
</html>