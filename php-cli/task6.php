<?php

// Задание 6

// Написать функцию, которая вычисляет текущее время и возвращает его в 
// формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты.

function showCurrentTime() {
    $today = getdate();
    $hours = $today["hours"];
    $minutes = $today["minutes"];
    $result = $hours;
    if ($hours )

}


echo showCurrentTime();

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task6.php