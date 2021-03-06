<?php
/**
 * В днанном задании необходимо прочитать из стандратного ввода список студентов
 * и вывести на экран таблицу студентов.
 *
 * При выводе, ячейки таблицы должны быть разделены символом " | ",
 * имя и группа должны быть выравнены в ячейках по левому краю, а средний бал - по правому,
 * ширина колонки с именем 10 символов + пробел перед разделителем,
 * ширина колонки с номером группы 1 символ + 2 пробела после и перед разделителями,
 * ширина кололки со среднем балом 4 символа + пробел после разделителя
 * (одна цифра для целой части, десятичная точки и 2 цифры после точки)
 *
 * Вход:
 * N
 * Name1 Group1 Avg1
 * Name2 Group2 Avg2
 * ...
 * NameN GroupN AvgN
 *
 * Name# - имя студента, состоящее из одного слова без пробелов и знаков припенания не длинее 10 букв
 * Group# - название группы, состоящее из одного числа
 * Avg# - средний бал
 *
 * Пример:
 * > 4
 * > Vasya 1 4.512
 * > July 1 4.72
 * > Mike 2 3.92
 * > Olya 2 5.0
 *
 * Вывод:
 * >      Vasya | 1 | 4.51
 * >       July | 1 | 4.72
 * >       Mike | 2 | 3.92
 * >       Olya | 2 | 5.00
 */
$handle = fopen('php://stdin', 'r');
fscanf($handle,'%d', $n);

$table = '';
for ($i = 0; $i < $n; ++$i) {
    list($name, $group, $avg) = explode(' ', fgets($handle));
    $table .= sprintf("%' 10s | %d | %-' 3.2f\n", $name, (int)$group, (float)$avg);
}
fclose($handle);

echo $table;
