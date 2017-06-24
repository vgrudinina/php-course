<?php
/**
 * Функция преветствия.
 * Возвращает строку "Hello," и переданное имя
 *
 * @param string $name
 * @return string
 */
function hello($name) {
    return "Hello, $name";
}

$olya = hello('Olya');

printf("%s. How are you?\n", $olya);


/**
 * Сумма двух целых чисел
 *
 * @param int $a
 * @param int $b
 * @return mixed
 */
function sum($a, $b) {
    return $a + $b;
}

echo sum(2,3), PHP_EOL;


/**
 * Функция рассчёта суммы квадратов двух чисел
 *
 * Если сумма квадратов получается больше 25, то будет возвращено 25
 *
 * @param int $a
 * @param int $b
 * @return int
 */
function sumOfSquare($a, $b) {
    $maxValue = 25;
    $c = $a * $a + $b * $b;
    if ($c > $maxValue) {
        return $maxValue;
    }
    return $c;
}

echo sumOfSquare(3, 4);

echo $c;

