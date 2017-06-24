<?php
/**
 * Древний рим.
 *
 * На часах, при обозначении кварталов года и много где ещё используются римские цифры.
 * Нужно написать функцию, которая будет переводить арабские числа в римские.
 * Примеров такого кода в интернете множество, но даже если вы возьмёте код оттуда,
 * постарайтесь разобраться как он работает.
 *
 * Немного про римский счёт:
 * I = 1
 * V = 5
 * X = 10
 * L = 50
 * C = 100
 * D = 500
 * M = 1000
 *
 * Римская система счисления не является позиционной и имеет одно важное правило:
 * подряд не могут следовать 3 одинаковых литерала
 * Например:
 *  45 != XXXXV
 *  45 == XLV
 * То есть, литерал, обозначающий меньшее число, который стоит слева от литерала, обозначающего большее будет вычитаться.
 * На примере того же числа 45:
 * X L V - буквально обозначает: вычасть 10 из 50 и прибавить 5
 *
 * Гарантируется что при проверке не будуи использоваты числа по модулю больше 1000.
 *
 * Пример ввода и вывода:
 *
 * Ввод:
 * > 15
 *
 * Вывод:
 * > XV
 *
 * Ввод:
 * > 49
 *
 * Вывод:
 * > XLIX
 */

/**
 * @param int $number
 * @return string
 */
function toRoman($number) {
    //вычисляем тысячи
    $m1 = $number / 1000;
    M($m1);
    //остаток от тысяч
    $m2 = $number % 1000;
        
    //вычисляем полусотни
    $d1 = $m2 / 500;
    D($d1);
    //вычисляем остаток от полусотни
    $d2 = $m2 % 500;
    
    //вычисляем сотни
    $c1 = $d2 / 100;
    C($c1);
    //вычисляем остаток от сотни
    $c2 = $d2 % 100;
    
    //вычисляем полусотни
    $l1 = $c2 / 50;
    L($l1);
    //вычисляем остаток от полусотни
    $l2 = $c2 % 50;
    
    //вычисляем десятки
    $x1 = $l2 / 10;
    X($x1);
    //вычисляем остаток от десятка
    $x2 = $l2 % 10;
    
    //вычисляем пятерки
    $v1 = $x2 / 5;
    V($v1);
    //вычисляем остаток от пятерки
    $v2 = $x2 % 5;
    
    //вычисляем единицы
    $j1 = $v2 / 1;
    J($j1);
    //вычисляем остаток от единиц
    $j2 = $v2 % 1;
}
function M($number) {
    $i = 0;
    while ($i < $number) {
        echo 'M';
        $i++;
    }
    return;
}
function D($number) {
    if ($number == 4) {
        echo 'CM';
        return;
    }
    else {
        echo 'D';
        return;
    }
}

function C($number) {
    if ($number == 4) {
        echo 'CD';
        return;
    }
    elseif (($number != 0) && $number < 4) {
         $i = 0;
        while ($i < $number) {
            echo 'C';
            $i++;
    }
        return;
    }
    else return;
}

function L($number) {
    if ($number == 4) {
        echo 'XC';
        return;
    }
    else {
        echo 'L';
        return;
    }
}
function X($number) {
    if ($number == 4) {
        echo 'XL';
        return;
    }
    elseif (($number != 0) && $number < 4) {
         $i = 0;
        while ($i < $number) {
            echo 'X';
            $i++;
    }
        return;
    }
    else return;
}

function V($number) {
    if ($number == 4) {
        echo 'IX';
        return;
    }
    else {
        echo 'V';
        return;
    }
}

function J($number) {
    if ($number == 4) {
        echo 'IV';
        return;
    }
    elseif (($number != 0) && $number < 4) {
         $i = 0;
        while ($i < $number) {
            echo 'I';
            $i++;
    }
        return;
    }
    else return;
}

$handle = fopen('php://stdin', 'r');

do {
    echo 'Enter a number', PHP_EOL;
    fscanf($handle, '%d', $n);
} while (!is_int($n) || $n <= 0);

echo toRoman($n);
