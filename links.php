<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php $name = "sam"; ?>
<?php $position = "support cordinator manager"; ?>
<a href="file2.php?name=<?php echo $name; ?>">click</a>
<a href="file2.php?name=<?php echo $name; ?>& <?php echo $position; ?>">click2</a>

<a href="file2.php?name=
<?php echo $name; ?>&position=
<?php echo rawurlencode($position); ?>">click2</a>
	
</body>
</html>