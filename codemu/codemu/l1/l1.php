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

$a = 1.5;
$b = 0.75;
pecho($a+$b);
pecho($a = -100);
pecho($a = -$a);

$a = 10;
$b = 3;
pecho($a%$b);
pecho(2**10);

pecho((3*2)**3);

pecho(strlen("abc     de"));

pecho("<i>".'asdf'."</i>");

for ($i = 1; $i <= 9; $i++) pecho($i);

$src = 'images.jpeg';
pecho('<img src="'.$src.'">');

$text = 'Текст';
pecho('<input type="text", value="'.$text.'">');
pecho('<textarea cols = "15", rows = "6">'.$text.'</textarea>');

$a = true;
pecho($a);
pecho(null);
var_dump($a = false);
pecho(null);
var_dump(null);
pecho(null);
var_dump($null);

pecho(1.2);

$test = (int) '1';
pecho(null);
var_dump($test);

$test = (int) '12345';
pecho(null);
var_dump($test);

$test = (float) '1.2345';
pecho(null);
var_dump($test);

$test = (int) '12.345';
pecho(null);
var_dump($test);

$test = (string) $test;
pecho(null);
var_dump($test);

$test = 12.345;
pecho(null);
var_dump((string)$test);

$str = 'abcde';
pecho($str[0].$str[2].$str[4]);
pecho($str[4].$str[3].$str[2].$str[1].$str[0]);
$num = 2;
pecho(null);
var_dump($str[$num]);

pecho($str[strlen($str)-1]);
pecho($str[strlen($str)-2]);
pecho($str[strlen($str)-3]);

$str = '12345';
$sum = 0;
for ($i = 0; $i <= strlen($str)-1; $i++) $sum = $sum+$str[$i];
pecho($sum);

$mul = 1;
for ($i = 0; $i <= strlen($str)-1; $i++) 
$mul = $mul*$str[$i];
pecho($mul);

$revstr = "";

for ($i = 1; $i <= strlen($str); $i++)
$revstr .= $str[strlen($str)-$i];
pecho($revstr);

$num = 10;
$num++;
$num++;
pecho(--$num);

$num1 = 3;
$num1++;
$num2 = $num1--;
pecho($num1++);
pecho(--$num2);

pecho(60*60*24);
pecho(60*60*24*30);
pecho(60*60*24*365);
pecho(60*24);
pecho(60*24*365);
pecho(1000000000);
$giga = 1000000000;
pecho(10*$giga);
pecho(1000*$giga);
pecho(1000*$giga/1000);

$r = 10;
$s = M_PI*($r**2);
pecho($s);

$a = 10;
$s = $a**2;
pecho($s);

$a = 10;
$b = 20;
$s = $a*$b;
pecho($s);

$cels= 20;
$fahr = ($cels*9/5) + 32;
pecho($fahr);



?>

