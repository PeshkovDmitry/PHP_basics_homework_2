<?php

// Задание 4

// Объявить массив, индексами которого являются буквы русского языка, 
// а значениями – соответствующие латинские буквосочетания 
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). 
// Написать функцию транслитерации строк.

$charsArr = [
    "а" => "a", "е" => "ye", "й" => "y", "н" => "n", "с" => "s", "х" => "kh", "щ" => "shch", "э" => "e",
    "б" => "b", "ё" => "ye", "к" => "k", "о" => "o", "т" => "t", "ц" => "ts", "ъ" => "`",    "ю" => "yu", 
    "в" => "v", "ж" => "zh", "л" => "l", "п" => "p", "у" => "u", "ч" => "ch", "ы" => "y",    "я" => "ya",
    "г" => "g", "з" => "z",  "м" => "m", "р" => "r", "ф" => "f", "ш" => "sh", "ь" => "", 
    "д" => "d", "и" => "i",
];

function translate($text, $charsArr) {
    $result = "";
    for ($i = 0; $i < mb_strlen($text); $i++)  {
        $char = mb_substr($text, $i, 1, "UTF-8");
        $isUpper = ($char == mb_strtoupper($char));
        $char = mb_strtolower($char);
        $char = array_key_exists($char, $charsArr) ? $charsArr[$char] : $char;  
        $char = $isUpper ? mb_strtoupper($char) : $char; 
        $result = $result . $char;
    }
    return $result;
}

$text = "Привет, мир!";
echo translate($text, $charsArr) . "\n\r";


// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task4.php