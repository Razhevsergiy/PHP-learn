<doctype text-html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Array functions</title>
</head>
<body>
<?PHP
require_once"/home/serg/PHP/dumper.php";
//void asort(array &$array [,int $sort_flag])
//void ksort, arsort, krsort
$A = [
    "a" => "Zero",
    "b" => "Weapon",
    "c" => "Alpha",
    "d" => "Processor",
];
dumper($A);

asort($A, SORT_STRING);
dumper($A);

echo "<p>hello!";

ksort($A);
dumper($A);

arsort($A);
krsort($A);
dumper($A);

//void uksort, uasort (array &$array, string $callback)
$d = opendir("../");
while (false !== ($e = readdir($d))) {
    if (is_dir($e)) $files[$e] = 0;
    else $files[$e] = filesize($e);
}
dumper($files);

uksort($files, function($f1, $f2)
{
    if (is_dir($f1) && !is_dir($f2)) return -1;
    if (!is_dir($f1) && is_dir($f2)) return 1;
    return $f1 <=> $f2;
});

dumper($files);

//куча предупреждений
// callback Функция сравнения должна возвращать целое, 
//которое меньше, равно или больше нуля, если первый 
//аргумент является соответственно меньшим, равным или 
//большим, чем второй. 

dumper($A);
asort($A);
array_reverse($A);
dumper($A);

arsort($A);
dumper($A);

$files = [
    "img10.gif",
    "img1.gif",
    "img2.gif",
    "img20.gif",
];

//asort($files);
natsort($files);
dumper($files);

$files = [
    "Img10.gif",
    "iMg1.gif",
    "imG2.gif",
    "img20.gif",
];

//asort($files);
natcasesort($files);
dumper($files);

$A = ['One', 'Two', 'Three', 'Four'];
dumper($A);
sort($A);
dumper($A);
rsort($A);

$A = [
    'a' => 'Zero',
    'b' => 'Weapon',
    'c' => 'Alpha',
    'd' => 'Processor',
];

sort($A);
dumper($A);

$tools = ['One', 'Two', 'Three', 'Four',];
usort($tools, function($a, $b){return $a <=> $b;});
dumper($tools);

$arr1 = [3,4,2,7,1,5,];
$arr2 = ['world', 'Hello', 'yes', 'no', 'apple', 'wet'];
dumper($arr1);
dumper($arr2);
array_multisort($arr1, $arr2);
dumper($arr1);
dumper($arr2);
$arr1 = [3,4,2,7,1,5,];
$arr2 = ['world', 'Hello', 'yes', 'no', 'apple', 'wet'];
array_multisort($arr1, SORT_DESC, SORT_NUMERIC, $arr2);
dumper($arr1);
dumper($arr2);

$concept = ['Banana', 'Coffee', 'Ice cream', 'Throat'];
shuffle($concept);
print_r($concept);

$names = [
    'Joel' => 'Silver',
    'Grant' => 'Hill',
    'Andrew' => 'Mason',
];
echo"<p>";
print_r($names);
echo"<p>";
print_r(array_flip($names));

echo"<p>";

$knames = array_keys($names);
print_r($knames);
echo"<p>";

$vnames = array_values($names);
print_r($vnames);
echo"<p>";

$files = [
    "Img10.gif",
    "iMg1.gif",
    "imG2.gif",
    "img20.gif",
];
natcasesort($files);
$files = array_values($files);
dumper($files);
echo "<p>".in_array('img20.gif', $files);

$list = [1, 'hello', 1, 'world', 'hello'];
dumper(array_count_values($list));

$L1 = [10, 20, 30,];
$L2 = [100, 200, 300];
$L = array_merge($L1, $L2);
dumper($L);

$input = ['a', 'b', 'c', 'd', 'e'];
dumper($input);
$output = array_slice($input, 2);
dumper($output);
$output = array_slice($input, 1, -1);
dumper($output);
$output = array_slice($input, -2, 2);
dumper($output);
$output = array_slice($input, 0, 2);
dumper($output);

$colors = ['red', 'green', 'blue', 'yello'];
dumper($colors);
array_splice($colors, 2);
dumper($colors);
$colors = ['red', 'green', 'blue', 'yello'];        
array_splice($colors, 1, -1);
dumper($colors);

$colors = ['red', 'green', 'blue', 'yello'];        
array_splice($colors, 1, -1, ['black', 'nigger']);
dumper($colors);

$colors = ['red', 'green', 'blue', 'yello'];        
array_splice($colors, 1, count($colors), "orange");
dumper($colors);

$array = [];
echo "<p>".array_push($array, 1000);
dumper($array);
$array[] = 2000;
dumper($array);
echo "<p>".array_pop($array);
dumper($array);

$garbage = [10, "a" => 20, 30];
echo "<p>".array_unshift($garbage, "!", "?");
dumper($garbage);

echo "<p>".array_shift($garbage);
dumper($garbage);

$a = 'Test string';
$b = 'Some string';
$A = compact('a', 'b');
dumper($A);

$a = 'Test';
$b = 'text';
$c = 'CCC';
$d = 'DDD';
$list = ['b', ['c', 'd']];
$A = compact('a', $list);
dumper($A);

$B = ['a' => 'echo'];
extract($A);
extract($B, EXTR_SKIP);
echo "<p>".$a;
?>

<table width ="100%">
    <?php 

    $book = [
        [
            'name' => "Serg", 
            'url' => 'Serg.sr', 
            "text" => "asdfasdfasdfasdf"]];
    
    foreach ($book as $entry) {extract($entry, 
        EXTR_OVERWRITE)?>
    <tr>
        <td>Имя: <?=$name?></td>
        <td>Адрес: <?=$url?></td>
    </tr>
    <tr><td colspan = "3"><?=$text?></td></tr>
    <tr><td colspan = "3"><hr /></td></tr>
    <? } ?>
</table>

<table width = 100%>
<?php foreach ($book as $entry) {?>
<?php extract(array_change_key_case($entry, CASE_UPPER))
?>
<tr>
        <td>Имя: <?=$NAME?></td>
        <td>Адрес: <?=$URL?></td>
    </tr>
    <tr><td colspan = "3"><?=$TEXT?></td></tr>
    <tr><td colspan = "3"><hr /></td></tr>

<?}?>
</table>
<table>
    <?PHP foreach (range(1, 100) as $i) {?>
        <tr>
            <td><?= $i ?></td>
            <td>Это строка номер <?= $i ?></td>
        </tr>
    <?}?>
</table>

<?php
$native = ["green", "red", "blue",];
$colors = ["red", "yello", "green", "cyan", "black"];
$inter = array_intersect($colors, $native);
dumper($inter);

$diff = array_diff($colors, $native);
dumper($diff);
$diff = array_diff($native, $colors);
dumper($diff);

$union = array_merge($native, $colors);
$union = array_unique($union);
dumper($union);

$arr = [
    "employee" => "Иван Иванов",
    "phones" => [
        "916 153 2854", "916 643 8420"
    ]
];
echo "<p>".json_encode($arr);
echo "<p>".json_encode($arr, JSON_UNESCAPED_UNICODE);

$str = json_encode($arr, JSON_UNESCAPED_UNICODE);
$arr2 = json_decode($str, true, 512);
dumper($arr2);
?>
</body>
</html>