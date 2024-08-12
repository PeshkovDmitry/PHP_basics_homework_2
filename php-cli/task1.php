<?php

// Задание 1

// Реализовать основные 4 арифметические операции в виде функции с тремя параметрами
// – два параметра это числа, третий – операция. Обязательно использовать оператор return.

function add($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function mul($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}

$a = 3;
$b = 2;

echo "a + b = {$a} + {$b} = " . add($a, $b) . "\n\r";
echo "a - b = {$a} - {$b} = " . sub($a, $b) . "\n\r";
echo "a * b = {$a} * {$b} = " . mul($a, $b) . "\n\r";
echo "a / b = {$a} / {$b} = " . div($a, $b) . "\n\r";

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task1.php