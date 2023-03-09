<?php
$arr = json_decode($_POST['json'], true);
$name = trim(implode(" ", $arr));

$result = "Здравствуйте";
if (!empty($name))
    $result .= ", $name";
$result .= "!";

echo htmlspecialchars($result);
/* здесь хотя бы понятно то, что эта программа извлекает
из переменной $_POST['json'] массив, потом делает из
массива строку при помощи трим и имплод, а потом
формирует переменную $result, где формирует вывод,
и выводит эту строку вывода на экран.
?>

