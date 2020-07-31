<?php
$line = readline('Введите натуральные числа через пробел');
echo 'Вы ввели: ' . $line;
$array = explode(" ",$line);
//print_r($array);
sort($array);
print_r($array);