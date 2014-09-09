<?php

//array search exercise

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$result = array_intersect($names, $compare);

print_r ($result);

function compare_two_arrays ($array_1, $array_2) 
{

	$array_comparison= array_intersect($array_1, $array_2);

	return $result=$array_comparison;

}

$array_1=$names;
$array_2=$compare;
compare_two_arrays ($array_1, $array_2);
$result=$print_result;
var_dump($print_result);


$array_1_test = $names[1];
$array_2= $compare;
compare_two_arrays($array_1,$array_2);
$names++
$array_1_test = $names[2];


?>