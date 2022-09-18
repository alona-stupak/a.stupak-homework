<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>11.02</title>
</head>
<body>
<?php
$test1 = true; //тип boolean
var_dump($test1);
print_r ($test1);
echo $test1;

$test2 = 78534; //integer
var_dump($test2);
print_r ($test2);
echo $test2;

$test3 = 2.649; //float
var_dump($test3);
print_r ($test3);
echo '$test3';

$str1 = 'Одинарні лапки'; //варіант1 string
var_dump($str1);
print_r ($str1);
echo ('$str1');

$str2 = "Подвійні лапки"; //варіант2 string
var_dump($str2);
print_r ($str2);
echo '$str2';

$str3 = <<<EOD
 Привіт, $str1. Це приклад рядка,
 що охоплює декілька рядків,
 з використанням heredoc-синтаксису.
EOD;  // варіант3 heredoc
var_dump($str3);
print_r ($str3);
echo '$str3';

$str4 = <<<'EOD1'
 Приклад тексту, який займає декілька рядків,
 за допомогою синтаксису nowdoc.
 Всі змінні (наприклад $str1) не будуть оброблені, а будуть виведені як є.
EOD1; // варіант4 nowdoc
var_dump($str4);
print_r ($str4);
echo '$str4';

$arr1 = ['Доброго', 'вечора', 'ми', 'з', 'України',]; // звичайний масив
var_dump($arr1);
print_r ($arr1);
echo '$arr1';

$arr2 = [
    'Good' => 'Доброго',
    'evening' => 'вечора',
    'we' => 'ми',
    'from' => 'з',
    'Ukraine' => 'України',
]; //асоціативний масив
var_dump($arr2);
print_r ($arr2);
//echo '$arr2;
$test_Null = null;
var_dump($test_Null);
print_r ($test_Null);
echo $test_Null;
?>
</body>
</html>