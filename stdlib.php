<?php

/**
 * Чтение строки из стандартного ввода.
 *
 * @return string
 */
function getString() {
    $handle = fopen('php://stdin', 'r');
    fwrite(STDOUT, "(enter string)" . PHP_EOL);
    $raw = trim(fgets($handle));
    fclose($handle);
    return strval($raw);
}

/**
 * Чтение целого числа из стандартного ввода
 *
 * @return int
 */
function getInt() {
    $handle = fopen('php://stdin', 'r');

    do {
        fwrite(STDOUT, "(enter integer number)" . PHP_EOL);
        fscanf($handle, "%d", $n);
    } while (!is_int($n));

    fclose($handle);
    return intval($n);
}

/**
 * Чтение дробного числа из стандартного ввода
 *
 * @return float
 */
function getFloat() {
    $handle = fopen('php://stdin', 'r');
    do {
        fwrite(STDOUT, "(enter float number)" . PHP_EOL);
        fscanf($handle, "%f", $n);
    } while (!is_float($n));

    fclose($handle);
    return floatval($n);
}


/**
 * Отображение булева типа в виде строки
 *
 * @param bool $var
 * @return string
 */
function boolToStr($var) {
    return boolval($var) ? 'true' : 'false';
}

/**
 * Чтение целого положительного числа из стандартного ввода
 */
function getPositiveInt() {
    // todo реализовать функцию получения положительных целых чисел
        $handle = fopen('php://stdin', 'r');

    do {
        fwrite(STDOUT, "(enter positive integer number)" . PHP_EOL);
        fscanf($handle, "%d", $n);
    } while (!is_int($n) && $n <= 0);

    fclose($handle);
    return intval($n);
}

/**
 * Чтение дробного положительного числа из стандартного ввода
 */
function getPositiveFloat() {
    // todo реализовать функцию получения положительных дробных чисел
        $handle = fopen('php://stdin', 'r');
    do {
        fwrite(STDOUT, "(enter positive float number)" . PHP_EOL);
        fscanf($handle, "%f", $n);
        var_dump($n);
    } while (!is_float($n) && $n <= 0);

    fclose($handle);
    return floatval($n);
}