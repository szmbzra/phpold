xampp
locate php folder and search for php.ini
find line number 1142 remove semicolon  ( sendmail)
find line number 1145 comment out with semilcon mailtodisk.exe that all save.


sendmail folder (xampp)
sendmail.ini
line 14
smtp server confgiuration
smtp_server = smtp.gmail.com
smtp_port = 587

line 46, 47
auth_username = sam@gmail.com
auth_password = 1234555

create file in htdocs
sendingmail.php
<?php
mail('sam@gmail.com','testing','this is just test','from: sam@gmail.com');

//
$emailto ="sam2gmail.com";
$subject ="testing";
$body = "lets check it working ";
$headers = "from : sam@gmail.com";
if(mail($emailto, $subject, $body, $headers)){
	echo "mail sent succesfully";
}else{
	echo "mail not sent";
}


?>

restar xampp folder


