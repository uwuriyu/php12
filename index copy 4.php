<?php

// Массив с температурой для каждого дня недели
$temperatures = array(
    "Понедельник" => 22,
    "Вторник" => 23,
    "Среда" => 21,
    "Четверг" => 20,
    "Пятница" => 24,
    "Суббота" => 25,
    "Воскресенье" => 26
);

// Выводим массив с использованием цикла foreach
foreach ($temperatures as $day => $temperature) {
    echo "Температура в городе в $day: $temperature градусов Цельсия\n";
}

?>