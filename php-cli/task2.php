<?php

// Задание 2

// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций 
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "add":
            return $arg1 + $arg2;
        case "sub":
            return $arg1 - $arg2;    
        case "mul":
            return $arg1 * $arg2;     
        case "div":
            return $arg1 / $arg2;     
        default:
            return "Неизвестная операция";    
    }
}



$a = 3;
$b = 2;

echo "a + b = {$a} + {$b} = " . mathOperation($a, $b, "add") . "\n\r";
echo "a - b = {$a} - {$b} = " . mathOperation($a, $b, "sub") . "\n\r";
echo "a * b = {$a} * {$b} = " . mathOperation($a, $b, "mul") . "\n\r";
echo "a / b = {$a} / {$b} = " . mathOperation($a, $b, "div") . "\n\r";

// docker run --rm -v ${pwd}/PHP/php-cli/:/cli php:8.2-cli php /cli/task2.php