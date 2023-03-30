<meta charset="utf-8">

<?php

error_reporting(E_ALL);
//error_reporting(0);
ini_set('display_errors', 'on');
//mb_internal_encoding('UTF-8');

function pecho($x) {
    echo "<p>".$x;

};

$var = 'hello';
echo '<p>'.$var[0];
echo '<p>'.$var[1];
echo '<p>'.$var[4];

define('Minsec', 60);
define('Hourmin', 60);
$quant = Minsec*Hourmin;
echo "<p>".$quant;

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo "<p>".$var;

$a = 3;
$a = 10; $b = 2;
echo "<p>".$a + $b;
echo "<p>".$a - $b;
echo "<p>".$a * $b;
echo "<p>".$a / $b;

$c = 15; $d = 2;
$result = $c + $d;
echo "<p>".$result;

$a = 10; $b = 2; $c = 5;
$result = $a+$b+$c;
echo "<p>".$result;

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
echo "<p>".$result = $c + $d;

$text = 'Привет, Мир!';
pecho($text);
$text1 = 'Hello, ';
$text2 = 'world!';
$text = $text1.$text2;
pecho($text);

$name = 'Serg';
pecho($text1.$name."!");



?>