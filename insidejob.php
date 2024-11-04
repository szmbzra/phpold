<?php
$number =  array(18,10,25,55);
// print_r($number);
?> <hr>
<?php
// echo current($number);
echo next($number);
next($number);
next($number);
next($number);
next($number);
echo current($number);
reset($number);
echo current($number);
end($number);
echo (end($number));

	?>