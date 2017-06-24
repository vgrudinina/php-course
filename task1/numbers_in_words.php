<?php
/**
 * Сумма прописью
 *
 * Как часто вы пишите различные бюрократические бумаги? Редко?
 * Как бы то ни было, часто нужно писать числа прописью. Это могут быть суммы, количество дней, - да всё что угодно.
 *
 * Программисты люди ленивые и любят всё автоматизировать. Давайте и мы напишем фунцию (а может быть не одну),
 * которая будет переводить числа в строки.
 *
 * Код должен работать корректно для чисед в диапазоне от -199 до 199
 *
 * Пример ввода и вывода:
 *
 * Ввод:
 * > 15
 *
 * Вывод:
 * > пятьнадцать
 *
 * Ввод:
 * > -49
 *
 * Вывод:
 * > минус сорок девять
 */

/**
 * @param int $number
 * @return string
 */
function toWords($number)
{
    // todo ваш код здесь
}

$handle = fopen('php://stdin', 'r');

do {
    echo 'Enter a number', PHP_EOL;
    fscanf($handle, '%d', $n);
} while (!is_int($n));

echo toWords($n);