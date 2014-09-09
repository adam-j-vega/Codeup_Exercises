<?php
// Create a do-while loop that will count by 2's 
// starting with 0 and ending at 100. Follow each 
// number with a newline. Alter your loop to count 
// backwards by 5's from 100 to -10. Create a 
// do-while loop that starts at 2, and displays 
// the result a on each line while $a is less 
// than 1,000,000.

$a=0;
do 
{
	$a+=2;
//	echo $a . "\n";
} while ($a < 110);
do 
{
	$a-=5;
//	echo $a . "\n";
}
while ($a > -10);
$a+=12;
do 
{
	echo $a . "\n"; 
	$a=$a*$a;
} 
while ($a < 1000000);
?>