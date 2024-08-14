<?php

// Задание 6

// Написать функцию, которая вычисляет текущее время и возвращает его в 
// формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты.

function showCurrentTime() {

    $hoursArr = ["час" =>   [1, 21],
                 "часа" =>  [2, 3, 4, 22, 23, 24],
                 "часов" => [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]];
    $minutesArr = ["минут" => [0,  5,  6,  7,  8,  9,  10, 11, 12, 13, 14, 15, 16, 17, 18, 
                               19, 20, 25, 26, 27, 28, 29, 30, 35, 36, 37, 38, 39, 40, 45, 
                               46, 47, 48, 49, 50, 55, 56, 57, 58, 59],
                   "минута" =>[1,  21, 31, 41, 51],
                   "минуты" =>[2,  3,  4,  22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54]];             

    $result = "";
    $today = getdate();
    $hours = $today["hours"];
    $minutes = $today["minutes"];
    $result = $result . $hours . " ";
    foreach ($hoursArr as $key => $value) {
        if (in_array($hours, $value)) {
            $result = $result . $key . " ";
        }
    }
    $result = $result . $minutes ." ";
    foreach ($minutesArr as $key => $value) {
        if (in_array($minutes, $value)) {
            $result = $result . $key;
        }
    }
    return $result;
}

echo showCurrentTime() . PHP_EOL;

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task6.php