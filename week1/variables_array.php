<?php
$arr = array(1, 2, 3, 4, 5);
print_r($arr);

$arr = [1, 2, 3, 4, 5];
print_r($arr);

$arr = [];

$arr[] = 1;
$arr[] = 2;
$arr[] = 3;

print_r($arr);

$arr[] = [4, 5, 6];
print_r($arr);

$arr[] = [7, [8, 9]];
print_r($arr);

var_dump($arr);

$arr[] = "Hello world";
var_dump($arr);

echo $arr[2], PHP_EOL;

$arr = [];
$arr["first"] = "Hello";
$arr["second"] = "World";
var_dump($arr);

echo $arr["first"], PHP_EOL;

$arr = range(100, 500);
var_dump($arr);

echo $arr[400], PHP_EOL;
