<?php
require_once 'D:/xampp/htdocs/stdlib.php';

// Строки
$s = "Hello world";
echo $s, PHP_EOL;

$s1 = "Hello";
$s2 = "World";
$s = $s1 . ' ' . $s2;
echo $s, PHP_EOL;
// Числа
$intNumber = 42;

echo '$intNumber is ', $intNumber, '. Is it integer? ', boolToStr(is_int($intNumber)), PHP_EOL;

$floatNumber = 12.3;

echo '$floatNumber is ', $floatNumber, '. Is it integer? ', boolToStr(is_int($floatNumber)), PHP_EOL;
echo '$floatNumber is ', $floatNumber, '. Is it float? ', boolToStr(is_float($floatNumber)), PHP_EOL;

$boolValue = true; // false

echo '$boolValue is ', boolToStr($boolValue), PHP_EOL;

$sum = $intNumber + $floatNumber;

echo '$sum is ', $sum, '. Is it float? ', boolToStr(is_float($sum)), PHP_EOL;

$a = 1;
$b = 2;
$b = 2.1;

echo '$a is ', gettype($a), PHP_EOL;
echo '$b is ', gettype($b), PHP_EOL;


// Опперации
echo $a + $b, PHP_EOL;
echo gettype($a + $b), PHP_EOL;

echo $a - $b, PHP_EOL;
echo gettype($a - $b), PHP_EOL;

echo $a * $b, PHP_EOL;
echo gettype($a * $b), PHP_EOL;

echo $a / $b, PHP_EOL;
echo gettype($a / $b), PHP_EOL;

$a = 5;
$b = 3;
echo $a % $b, PHP_EOL;
echo gettype($a % $b), PHP_EOL;

var_dump($a, $b, true);

// инкременты
$a = 1;
$b = $a++;
echo '$a is ', $a, ', $b is ', $b, PHP_EOL;

$a = 1;
$b = ++$a;
echo '$a is ', $a, ', $b is ', $b, PHP_EOL;


// форматированный вывод
printf("\$s is %s, \$a is %d, \$b is %f \n", $s, $a, $b);


$b = M_PI;
printf("\$s is %s, \$a is %d, \$b is %f \n", $s, $a, $b);

// форматирование
printf("%.2f, %.5e \n", M_PI, M_E);

printf("%.2f, %.5e \n", M_PI * 1000, M_E * 1000);

// порядок аргументов
printf("%.3f, %.3f \n", M_PI, M_E);

printf("%2$.3f, %1$.3f \n", M_PI, M_E);


// заполнение (табличный вывод)
printf("| %'.10.5f | %'010.5f | %' 10.5f |\n", M_PI, M_E, M_SQRT2);

printf("| %-'.10.5f | %-'010.5f | %-' 10.5f |\n", M_PI, M_E, M_SQRT2);

$a = 4;
$b = 5;

$a *= $b;
$a = $a * $b;

$table = sprintf("| %' 10s | %-' 10s | %' 10s |\n", "Pi", "E", "Sqrt(2)");
$table .= sprintf("| %' 10.5f | %' 10.5f | %' 10.5f |\n", M_PI, M_E, M_SQRT2);
$table .= sprintf("| %-' 10.5f | %-' 10.5f | %-' 10.5f |\n", M_PI, M_E, M_SQRT2);

echo PHP_EOL, $table;
