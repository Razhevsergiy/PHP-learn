
<!DOCTYPE html>

<html lang = "ru">
## Проверочный скрипт Hello World.
<head>
<title>Простейший PHP-сценарий</title>
<meta charset = 'utf-8'>
</head>
<body>
<h1>Здравствуйте!</h1>
<p>
<?php
//Вычисляем текущую дату в формате день.месяц.год

$dat = date("d.m.y");

//Вычисляем текущее время
$tm = date("h:i:s");

#выводим их

echo "<p>Текущая дата: $dat года\n";
echo "<p>Текущее время: $tm\n";

#Выводим цифры

echo "<p>А вот квадраты и кубы первых 5
 натуральных чисел</p>\n";

echo "<ul>\n";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>$i в квадрате = ".($i*$i);
    echo ", $i в кубе = ".($i*$i*$i)."</li>\n";
}
?>
</ul>
</p>

<?php
echo "<p>";
echo PHP_INT_MAX;
echo "<p>";
echo PHP_INT_MIN;


$x = 0.00012;
$y = 1.2e-4;
echo "<p> x = $x; y = $y";

$x = 346.1256;
$y = 3.461256e+2;

echo "<p> x = $x; y = $y";

$string = "";

$string = $string."Привет, Серж!";

echo "<p> $string";

#Создадим массив с ключами 0, "surname" и "name"

 $a = array (
    0 => "Нулевой элемент",
    "surname" => "Гейтс",
    "name" => "Билл",
 );

echo "<p>";
echo $a["surname"];

$boo = false;

$boo = $boo+1;
echo "<p>".$boo;

if (isset($boo)) {
    echo "<p>";
    echo "Такая переменная есть. 
    Её значение $boo.";
}

if (isset($string)) {
    unset($string);
}

echo "<p>";
echo "Значение \$string: $string";

$s = gettype($string);
echo "<p>";
echo "Тип: $s";

$a = 0;
$b = 1;

if ($a = $b) echo "<p>a и b одинаковые\n";
else echo "<p> a и b различные\n";

$a = 10;
$b = &$a;

echo "<p> b = $b, a = $a";
unset($a); $a = 10;
echo "<p> b = $b, a = $a";

class AgentSmith{};
$first = new AgentSmith();
$first -> $mind = 0.123;

$second = $first;

$second -> $mind = 100;

echo "<p> First mind: {$first->$mind},
 second: {$second->$mind}";

// echo $first;

$a = PHP_OS;

echo "<p> $a";


define("pi", 3.14);
define("str", "Test string");
echo "<p>";
echo sin(pi/4);
echo "<p>";
echo str;

$a = defined("pi");
echo "<p> $a";

$index = mt_rand(1, 10);

$name = "Value{$index}";

define($name, 1);

echo "<p>";
echo "$name, ".constant($name);

$a = array("a"=>"apple", "b"=>"banana",
"c"=>array("x", "y", "z"));

echo "<pre>";
print_r($a);
echo "<pre>";


echo "<pre>";
var_dump($a);
echo "<pre>";


echo "<pre>";
var_export($a);
echo "<pre>";



class SomeClass
{
    private $x = 100;
}

$a = array(1, array ("Programs hacking programs. \nWhy?", "д'Артаньян"));

echo "<p>";var_dump($a); echo "</p>";
echo "<pre>";var_export($a); echo "</pre>";
$obj = new SomeClass();
echo "<pre>";var_export($obj); echo "</pre>";





?>

</body></html>



