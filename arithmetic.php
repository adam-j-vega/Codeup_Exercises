<?php

//arithmetic exercises in php

$a=5;
$b=0;

function dividing_zero_error($a) 
{
	return $dividing_by_zero=false;
	}
function error($error) 
{
		return $error=false;
	}
function add($a, $b) 
{
		return $a + $b;
}
function subtract($a, $b) 
{
		return $a - $b;
}
function multiply($a, $b) 
{
		return $a * $b;
}
function divide($a, $b) 
{
		return $a + $b;
}
function modulus($a, $b) 
{
		return $a + $b;
}				

if(!is_numeric($a) || !is_numeric($b)) 
{
	error(true);
}elseif($a==0 || $b==0) 
{
	echo dividing_zero_error(true);
}else
{
	add($a,$b);
	subtract($a,$b);
	multiply($a,$b);
	divide($a,$b);
	modulus($a,$b);
}
?>