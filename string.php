<?php
/*echo "sa asd xdsam <br>";
echo 'hello sam';
$color = "Red";
$shirt = "slkeee-less";
$combination = $color. " ". $shirt;
echo $combination;
echo "{$shirt} samkumar";
echo "<br>$color";*/
#
$pharse1 = "student who come lat";
$pharse2 = "bcded";
$combine = $pharse1;
$combine .= $pharse2;
// echo "orginla full: $combine";
?>
<!-- uppercase first : <?php echo ucfirst($pharse2); ?> <br>
uppercase word : <?php echo ucwords($pharse2); ?> <br>
lowercasecase word : <?php echo strtolower($pharse2); ?> <br>
uppercase word : <?php echo strtoupper($pharse2); ?> <br> -->
<hr>
<!-- repeat : <?php echo str_repeat($pharse2, 2); ?> <br>
make substring frm one point to another: 
<?php echo substr($pharse2, 0, 3); ?> <br>
find position of any specific word:
<?php echo strpos($pharse2, "ku"); ?> <br> 

find character:
<?php echo strchr($pharse2, "k"); ?> <br>-->
total length:
<?php echo strlen($pharse2); ?>
<br>trim:
<?php echo trim("ded"); ?> <br>
find specific and show after:
<?php echo strstr($pharse2, "ded"); ?><br>
replace word with new
<?php echo str_replace("ded", "sam", $pharse2); ?>
<?php echo phpinfo() ?




