<?php
echo "Задание №1";
echo '<br/>';
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
var_dump(count($arr));
echo '<br/>';
function slice(array $arr, int $start, int $count);
{
    for ($i = 0; $i < $count; $i++) {
        $arr[] = $arr[$i + $start - 1];
        unset($arr[$i + $start - 1]);
        echo '<br>';
    }
    return $arr;
}
$arr1 = slice([1,2,3,4,5,6,7,8,9,10], 3, 2);
echo '<br/>';
function get_sum(array $arr, $n) {
    $sum = 0;
    for ($i = 3; $i <= $n; $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}
$n = 5;
echo get_sum($arr, $n);
echo '<br/>';
echo "Задание №2";
echo '<br/>';
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
$result = array_diff($secondArr, $firstArr);
print_r($result);
echo '<br/>';
$result = array_diff($firstArr, $secondArr);
print_r($result);
echo '<br/>';
$result = array_intersect($firstArr, $secondArr);
print_r($result);
echo '<br/>';
//с 4-ым перебробывал все - ничего не получилось:(
echo "Задание №3";
echo '<br/>';
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
echo $firstArr["two"]['seven'];
echo '&nbsp;';
echo $firstArr["three"]['two'];
echo '&nbsp;';
echo $firstArr["five"]['four'];
echo '<br/>';
echo count($firstArr, COUNT_RECURSIVE);
echo '<br/>';
$sum = 0;
array_walk_recursive($firstArr, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum;