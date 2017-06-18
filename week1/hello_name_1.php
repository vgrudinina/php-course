<?php
require_once '../stdlib.php';

echo "Enter your name:", PHP_EOL;
$name = getString();

echo "Enter your age:", PHP_EOL;
$age = getInt();

echo "Enter your height (m, eg. 1.6):", PHP_EOL;
$height = getFloat();

echo "Hello, {$name}. You're {$age} years old. Your height is {$height} meters.", PHP_EOL;
