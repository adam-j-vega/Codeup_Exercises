<?php
//classic fizzbuzz for php. 
//different methods shown for practice.


// $counter=1;
// while($counter<100){
//	if($counter%3==0 && $counter%5==0){
//		echo "FizzBuzz\n";
// 	}elseif($counter%3==0){
// 		echo "Fizz\n";
// 	}elseif($counter%5==0){
// 		echo "Buzz\n";
// 	}else{
// 		echo $counter . "\n";
// }
// 	++$counter;
// }

for ( $counter=1 ; $counter<=100 ; ++$counter ) 
{
	if($counter%3==0 && $counter%5==0)
	{
		echo "FizzBuzz\n";
	}
	elseif($counter%3==0)
	{
		echo "Fizz\n";
	}
	elseif($counter%5==0)
	{
		echo "Buzz\n";
	}else
	{
		echo $counter . "\n";
	}
}

// $fizzbuzz=array(1,2,Fizz,4Buzz,Fizz,7,8,Fizz,Buzz,11,Fizz,13,14,FizzBuzz,16,17,Fizz,19,Buzz,Fizz,22,23,Fizz,Buzz,26,Fizz,28,29,FizzBuzz,31,32,Fizz,34,Buzz,Fizz,37,38,Fizz,Buzz,41,Fizz,43,44,FizzBuzz,46,47,Fizz,49,Buzz,Fizz,52,53,Fizz,Buzz,56,Fizz,58,59,FizzBuzz,61,62,Fizz,64,Buzz,Fizz,67,68,Fizz,Buzz,71,Fizz,73,74,FizzBuzz,76,77,Fizz,79,Buzz,Fizz,82,83,Fizz,Buzz,86,Fizz,88,89,FizzBuzz,91,92,Fizz,94,Buzz,Fizz,97,98,Fizz,Buzz);
// echo $fizzbuzz;

// $numbers=array(1,2,3,4,5,6,7,8,9,10);
// if($numbers%3==0){
// 	echo $numbers;
// }

?>