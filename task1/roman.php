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
    $m1 = (int)($number / 1000);
    echo M($m1);
    //остаток от тысяч
    $m2 = (int)($number % 1000);
    
    //вычисляем полусотни
    $d1 = (int)($m2 / 500);
    echo D($d1);
    //вычисляем остаток от полусотни
    $d2 = (int)($m2 % 500);
    
    //вычисляем сотни
    $c1 = (int)($d2 / 100);
    echo C($c1);
    //вычисляем остаток от сотни
    $c2 = (int)($d2 % 100);
    
    //вычисляем полусотни
    $l1 = (int)($c2 / 50);
    echo L($l1);
    //вычисляем остаток от полусотни
    $l2 = (int)($c2 % 50);
    
    //вычисляем десятки
    $x1 = (int)($l2 / 10);
    echo X($x1);
    //вычисляем остаток от десятка
    $x2 = (int)($l2 % 10);
    
    //вычисляем пятерки
    $v1 = (int)($x2 / 5);
    echo V($v1);
    //вычисляем остаток от пятерки
    $v2 = (int)($x2 % 5);
    
    //вычисляем единицы
    $j1 = (int)($v2 / 1);
    echo J($j1);
    //вычисляем остаток от единиц
    $j2 = (int)($v2 % 1);
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
        return 'CM';
    }
    elseif ($number == 0) {
        return;
    }
    else {
        return 'D';
    }
}

function C($number) {
    if ($number == 4) {
        return 'CD';
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
        return 'XC';
    }
    elseif ($number == 0) {
        return;
    }
    else {
        return 'L';
    }
}
function X($number) {
    if ($number == 4) {
        return 'XL';
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
        return 'IX';
    }
    elseif ($number == 0) {
        return;
    }
    else {
        return 'V';
    }
}

function J($number) {
    if ($number == 4) {
        return 'IV';
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

toRoman($n);
