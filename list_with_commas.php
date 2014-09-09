<?php

// Using the $physicists_array and your new knowledge of pushing, popping, exploding, and imploding:

// Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.

// This should end with this line:

//  echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
// and output this result:

//  Some of the most famous fictional theoretical physicists are Gordon Freeman, Samantha Carter, 
//  Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark.
// Turn your solution into a function named humanized_list(). You should be able to pass the $physicists_array
// as the only argument, and your function will return the resul

function alphabetize($place_holder) 
{

}

function humanized_list($string,$last_string) 
{

$array=explode(',',$string);

	if($alphabetize) 
	{
		sort($array) 

		array_pop($array);

		array_push($array, "and Tony Stark");

		$humanized_list=implode(', ', $array);
	}else
	{
	return $humanized_list;
	}

}
$famous_f_physicists ="Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";
humanized_list($famous_f_physicists);
$famous_fake_physicists=$humanized_list;
$famous_fake_physicists_string="Some of the most famous fictional theoretical physicists are $famous_fake_physicists}.";
echo $famous_fake_physicists_string;

//==========prior iteration=================
//$humanized_list .=

// $famous_string=array_push($famous_fake_physicists_array, $second_array);

// $famous_fake_string=explode(',',$famous_string);

//echo $famous_fake_physicists_string;

?>