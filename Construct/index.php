<!doctype html>
<html lang="ru">
<head>
    <title>Изучаем операторы!</title>
    <meta charset="utf-8">
</head>

<body>
    
<?php
$salary = 1;
if ($salary >= 100 && $salary <=5000)
echo "Вам ещё расти и расти!";
else echo "Ну и правильно - не в деньгах счастье.";

?>

<p>Divider</p>
<p>
<?php

$a = $salary;
$b = 0;

if ($a > $b) {
    print "a больше b";
    $c = $b;
} elseif ($a == $b) {
    print "a равно b";
    $c = $a;
} else {
    print "a меньше b";
    $c = $a;
}
?>
</p>
<p>Минимальное значение <?=$c?></p>

<?php
$i = 1;
$p = 1;

while ($i < 32) {
    echo $p, " ";
    $p = $p *2;
    $i = $i + 1;
}
echo "<p>";


?>

<p>
    <?php
     $i = 1;
     $p = 1;
        while ($i < 32):
            echo $p, " ";
            $p = $p *2;
            $i = $i + 1;
            
        endwhile;
        
    ?>
</p>

<?php
if (isset($_REQUEST["go"])):?>
<p>Привет, <?=$_REQUEST['name']?>!</p>
<?php else:?>
<form action="<?=$_SERVER['REQUEST_URI']?>"
method="POST">
Ваше имя: <input type="text" name="name"><br />
<input type="submit" name="go" value="Отослать!">
</form>
<?php endif?>

<?php
for ($i = 0, $j = 0, $k = "Points"; $i < 100;
$j++, $i += $j) $k = $k.".";
echo "<p> $k";
?>

<p>
<?php
$i = 0; $j = 0; $k = "Points";
while ($i < 100){
    $k .= ".";
    $j++;
    $i += $j;
}
echo $k
?>
</p>

<p>
<?php
for ($i = 0, $j = 0, $k = "Points"; $i < 100;
$j += 1, $i += $j):
 $k .= ".";
endfor;
echo $k;
?>
</p>

<p>
<?php
//for ($i = 0; $i < count($matrix); $i++) {
//    for ($j = 0; $j < count($matrix[$i]); $j++) {
//        if ($matrix[$i][$j] == 0) break(2);
//    }
//}
//
//if ($i < 10) 
//echo 'Найден нулевой элемент в матрице!';
//
//?>
</p>

<?php
$WasError = 0;
if (isset($_REQUEST['doSubmit'])) do {
    if ($_REQUESTp["reloads"] != 3)
    {$WasError = 1; break;}
    if ($_REQUEST["loader"] != "source") 
    {$WasError = 1; break;}
    else
    $responce = "Вы внимательный человек,
     поздравляем!<br />";
    exit();
}
while (false);
if ($WasError) {
$responce = "Вы ответили неверно, 
попробуйте ещё раз.";
}
?>

<form action="<?=$_SERVER['REQUEST_URI']?>"
method="POST">
Число перезагрузок:
<input type="text" name="reloads"><br>
Загрузочная программа:
<input type="text" name="loader"><br>
<input type="submit" name = "doSubmit"
value="Ответить на вопросы">
</form>
<p><?=$responce?></p>


<!-- <pre>
    <?php
    print_r($GLOBALS)
    ?></pre> -->

<?php ##Использование оператора goto
$i = 0;
begin:
$i++;
echo "$i<br>";
if ($i >= 10) goto finish;
goto begin;
finish:
?>

<?php
//require("head.html");
print_r($GLOBALS);
require('foot.html');
?>