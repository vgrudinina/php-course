<?php
$a = 6;
$b = 7;

var_dump($a == $b);
var_dump($a <= $b);

if ($a < $b) {
    echo '$a is less than $b';
} elseif ($a > $b) {
    echo '$a is greater than $b';
} else {
    echo '$a is equal $b';
}
echo PHP_EOL;

$a = 43;

switch ($a) {
    case 1:
        echo '$a is one';
        break;
    case 2:
        echo '$a is two';
        break;
    case 3:
        echo '$a is three';
        break;
    case 4:
    case 42:
        echo '$a is four or forty-two';
        break;
    default:
        echo '$a is unknown, default was used';
}
echo PHP_EOL;

$a = 2;
$b = 2;
$c = 3;

if ($a < $b || $a < $c) {
    echo '$a is less than $b or $c', PHP_EOL;
}

if ($a < $b && $a < $c) {
    echo '$a is less than $b and $c', PHP_EOL;
}


// пример сложного присложного условия, скобки задают приоритет, как в обычной арифметике
if ( ($a == $b && $a > $c) || ($a >= $b && $a < $c) || ($a != $c && $c <= $b) ) {
    // ....
}

