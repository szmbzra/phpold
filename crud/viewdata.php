<?php
require_once ("include/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Data into database</title>
	<link rel="stylesheet" href="include/style.css">
</head>
<body>
<table width="1000" border=5 align="center">
<caption>view from database</caption>
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>SSN</th>
	<th>Department</th>
	<th>Salary</th>
	<th>HomeAddress</th>
	<th>Update</th>
	<th>Delete</th>
</tr>

<?php  
global $connectingDB;
$sql ="SELECT * FROM emp_record";
$stmt =$connectingDB->query($sql);
while ($datarows = $stmt->fetch()){
	$id = $datarows["id"];
	$ename = $datarows["ename"];
	$ssn = $datarows["ssn"];
	$Department  = $datarows["dept"];
	$Salary = $datarows["salary"];
	$homeaddress = $datarows["homeaddress"];
?>
<tr>
<td><?php echo 	$id ?></td>
<td><?php echo $ename ?></td>
<td><?php echo $ssn ?></td>
<td><?php echo $Department ?></td>
<td><?php echo $Salary ?></td>
<td><?php echo $homeaddress ?></td>
<td><a href="update.php?id=<?php echo $id;?>">update</a></td>
<td><a href="delete.php?id=<?php echo $id;?>">update</a></td>
</tr>
<?php } ?>
</table>
	
</body>
</html>