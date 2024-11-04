<?php
/*$number = array(3,5,6,7,8,10);
foreach ($number as $key) {
	echo $key ."<br>";
}*/
$food = array(
"items_number" => 1050,
"name" => "pizza",
"regiion" => "itality",
"side_food" => "psata",
"drink" => "cook",
"package_price" => null
);
foreach ($food as $key => $value) {
	$data = ucwords(str_replace("_", " ", $key));
	if($key =="package_price"){
		if(empty($value)){

		}else{
			$value ="cant be determined";
		}
	
	}
echo $data . " " .$value ."<Br>";
}
?>