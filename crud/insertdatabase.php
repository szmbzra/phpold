<?php
require_once ("include/db.php");
if(isset($_POST["submit"])){
if(!empty($_POST['ename']) && !empty($_POST['ssn']) ){
	$ename = $_POST['ename'];
	$ssn = $_POST['ssn'];
	$dept = $_POST['dept'];
	$salary = $_POST['salary'];
	$homeaddress = $_POST['homeaddress'];
	global $connectingDB;
	$sql = "INSERT INTO emp_record(ename, ssn, dept, salary,homeaddress)
VALUES(:enamE,:ssN,:depT,:salarY,:homeaddresS)
	";
	$stmt = $connectingDB->prepare($sql); //using variable as object
	$stmt->bindValue(':enamE', $ename);
	$stmt->bindValue(':ssN', $ssn);
	$stmt->bindValue(':depT', $dept);
	$stmt->bindValue(':salarY', $salary);
	$stmt->bindValue(':homeaddresS', $homeaddress);
	$execute = $stmt->execute();
	if($execute){
		echo '<div class="success">record has been added successfully</div>';
	}
}else{
	echo '<span class="filed_inof">please atleast name and secuirt no</span>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data into database</title>
	<link rel="stylesheet" href="include/style.css">
</head>
<body>
<?php ?>
<form action="insertdatabase.php" method="post">
	<fieldset>
		<span class="fieldinfo">Employee name</span><Br>
		<input type="text" name="ename" id="">
		<br>
		<span class="fieldinfo">Social Security</span><Br>
		<input type="text" name="ssn" id="">
		<br>
	<span class="fieldinfo">Department</span><Br>
		<input type="text" name="dept" id="">
		<br>
		<span class="fieldinfo">Salary</span><Br>
		<input type="text" name="salary" id="" value="">
		<br>
		<span class="fieldinfo">Home address</span><Br>
		<textarea name="homeaddress" id="" cols="60" rows="10"></textarea>
		<br>
		<input type="submit" value="submit your record" name="submit">

	
	</fieldset>
</form>
	
</body>
</html>