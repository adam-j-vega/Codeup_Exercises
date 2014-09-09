<?php
$nothing = NULL;
$something = '';
$array = array(1,2,3);

function is_set_or_empty($variable) {
	if(!empty($variable)) {
		echo 'variable is FULL';
	}
		else {
			echo 'variable is EMPTY';
		}
}

$serialize_array = serialize($array);
// var_dump($serialize_array);
// var_dump($array);
echo $serialize_array;

echo is_set_or_empty($nothing) . PHP_EOL;
echo is_set_or_empty($something) . PHP_EOL;


$unserialize_array=unserialize($serialize_array);

var_dump($unserialize_array);



?>