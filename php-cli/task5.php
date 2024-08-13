<?php

// Задание 5

// С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    return $val * power($val, $pow - 1); 
}

echo power(2, 8);



// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task5.php