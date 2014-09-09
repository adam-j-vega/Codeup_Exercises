<?php
// Create a file named foreach.php in you exercises directory. 
// Commit each step and push to GitHub.
// Construct a loop that iterates through each value and 
// outputs its type as either integer, float, boolean, array, null, or string.
// Construct a loop that iterates through each value and 
// outputs only values with a type that is scalar.
// Create a loop that will echo out every value, including 
// those nested in arrays


// $test_type = array(1,array(charles, chris),3);
// foreach ($test_type as $output) {
// 	if (is_array($output)) {
// 		echo "$output is array\n";
// 	}else{
// 		echo "integer\n";
// 	}
// }

// $test_type = array(1,array(charles, chris),3,true);
// foreach ($test_type as $output) {
// 	if (is_bool($output)) {
// 		echo "$output is boolean\n";
// 	}else{
// 		echo "integer\n";
// 	}
// }

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $output) 
{
	if (is_integer($output)) 
	{
		echo "{$output} . \n";
	}
	elseif (is_float($output)) 
	{
		echo "{$output} . \n";
	}
	elseif (is_bool($output)) 
	{
		echo "{$output} . \n";
	}
	elseif (is_array($output))
	{
		print_r ($output);
		echo "\n";
	}
	elseif (is_null($output)) 
	{
		echo null . "\n";
	}
	elseif (is_string($output)) 
	{
		echo "{$output} \n";
	}
}
?>