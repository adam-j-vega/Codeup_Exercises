<?php
$a=0;
do {
	$a+=2;
//	echo $a . "\n";
} while ($a < 110);
do {
	$a-=5;
//	echo $a . "\n";
} while ($a > -10);
$a+=12;
do {
	echo $a . "\n"; 
	$a=$a*$a;
} while ($a < 1000000);
?>