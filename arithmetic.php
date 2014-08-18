<?php

$a=2;
$b=4;

function add($a, $b) {
    echo $a + $b;
}
echo add($a,$b) . PHP_EOL;

function subtract($a, $b) {
    echo $a - $b;
}
echo subtract($a,$b) . PHP_EOL;

function multiply($a, $b) {
    echo $a * $b;
}
echo multiply($a,$b) . PHP_EOL;

function divide($a, $b) {
    echo $a / $b;
}
echo divide($a,$b) . PHP_EOL;

function modulus($a, $b) {
	echo $a % $b;
}
echo modulus($a,$b) . PHP_EOL;

?>