<?php

// while
$i = 0;
while ($i < 5) {
    echo '$i is ', $i, PHP_EOL;
    ++$i;
}

echo PHP_EOL;

// do...while
$i = 0;
do {
    echo '$i is ', $i, PHP_EOL;
    ++$i;
} while ($i < 5);

echo PHP_EOL;


// for
for ($i = 0; $i < 5; ++$i) {
    echo '$i is ', $i, PHP_EOL;
}
echo PHP_EOL;


$i = 5;
for (;;) {
    echo '$i is ', $i, PHP_EOL;
    if ($i == 0) {
        break;
    }
    --$i;
}

echo PHP_EOL;

$i = 0;
while ($i <= 10) {
    if ($i % 2 == 1) {
        echo $i, PHP_EOL;
    }
    $i++;
}

echo PHP_EOL;

// foreach
$arr = range(0, 4);
print_r($arr);

foreach ($arr as $i) {
    echo '$i is ', $i, PHP_EOL;
}
echo PHP_EOL;

$arr = [
    'first' => 1,
    'second' => 2,
    'other' => 42
];

foreach ($arr as $key => $value) {
    printf("%-' 7s => %' 3d \n", $key, $value);
}
echo PHP_EOL;
