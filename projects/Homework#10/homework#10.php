<?php
//Написать скрипт который будет создавать простой массив (список) с рандомными числами, длина массива 50 элементов.
$arr = [];
$a = 1;
while ($a <= 50){
    $arr[] = $a;
    $a++;
}
$i = shuffle ($arr);
echo implode(', ', $arr);
echo '<br>';
/*Вывести на экран*/
//1) Сумму всех элементов массива.
$sumArr = 0;
$sumArr += array_sum($arr);
echo $sumArr;
echo '<br>';
//2) Среднее всех элементов массива (среднее арифметическое).
$arithmeticMean = 0;
$countArr = count ($arr);
$arithmeticMean = $sumArr/$countArr;
echo $arithmeticMean;
echo '<br>';
//3) Вывести 5 минимальных чисел из массива.
sort($arr);
$result = array_slice($arr, 0, 5);
var_dump ($result);
echo '<br>';
/* еще один вариант:
$array = [];
foreach ($arr as $key => $number) {
    if ($key < 5) {
        $array[] = $number;
    } else {
        if (($min = max($array)) > $number) {
            $key = array_search($min, $array);

            unset($array[$key]);

            $array[] = $number;
        }
    }
}
var_dump($array);*/
//4) Вывести 5 максимальных чисел из массива.
sort($arr);
$result = array_slice($arr, -5);
var_dump ($result);
echo '<br>';
//5) Отсортированный массив по возрастанию.
asort ($arr);
var_dump ($arr);
echo '<br>';
//6) Отсортированный массив по убыванию.
arsort ($arr);
var_dump ($arr);