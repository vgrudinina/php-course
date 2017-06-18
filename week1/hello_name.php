<?php
$handle = fopen("php://stdin", "r");

echo "Enter your name?", PHP_EOL;

$name = fgets($handle);

echo "Hello, $name";
