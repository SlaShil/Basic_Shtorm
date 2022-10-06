<?php
//найти мин и макс зарплату, средний возраст
$arr = [
    ['name'=>'John', 'age'=>25, 'salary'=>500],
    ['name'=>'Kate', 'age'=>33, 'salary'=>700],
    ['name'=>'Ivan', 'age'=>21, 'salary'=>300]
];
$minSalary = 0;
$maxSalary = 0;
$arrSalary = [];
$ageCount = count($arr);
$halfAge = 0;
foreach($arr as $value) {
    $arrSalary[] = $value['salary'];
    $halfAge += $value['age'];
}
$minSalary = min($arrSalary);
$maxSalary = max($arrSalary);
echo $minSalary;
echo '<br>';
echo $maxSalary;
echo '<br>';

$halfAge = $halfAge/$ageCount;
echo $halfAge;
echo '<br>';

