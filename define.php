<?php
function add($a, $b){
	$c = $a + $b;
	echo "addition is ${c} <Br>";
}
add(5,11);
add(5,20);
?> <hr>

<?php
function addition_return($d,$e){
	$f = $d + $e;
	return $f;
	}
	$total =Addition_return(20,30);
	$total1 = addition_return($total,100);
	echo $total1;
	?>
