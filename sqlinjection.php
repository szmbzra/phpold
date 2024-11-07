<?php
// preventing sql injection
$ename = mysql_real_escape_string($ename);
$dept = mysql_real_escape_string($dept);

//PDO  named paramater to prevernt sql injection
$sql = "INSERT INTO emp_record(ename,ssn,dept,salary,homeaddress) 
VALUES("$ename",'$ssn','$dept','$salary',:homeaddresS)";
$stmt->bindValue('homeaddresS',$homeaddress);
