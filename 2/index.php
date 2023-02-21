<?php
$a = 5;
$b = $a;

$a = ($b = 10);
$a = $b = 10;

$c = $a;
$d = $b;
$a = 3*sin($b = $c + 10)/* + $d*/;

echo"<p>";
echo $a;echo"<p>";
echo $a;
$a = 10*20;
$b = "".(10*20);

echo "<p>";
echo "$a:".gettype($a)." $b: ".gettype($b);

$less = 10 < 5;
$equals = $b==1;
$between = $s >=1 && $b <= 10;
$x = !($b||$c) &&$d;

$x = 3;

$between = $x >= 1 && $x <=7;
if ($between) echo "<p>x в нужном диапазоне". 
" значений";


$multiline = "Одна строка
Вторая строка
Третья строка";

echo "<p>$multiline";

$multiline = 'Одна строка 
Вторая строка
Третья строка
$multiline';

echo "<p>$multiline";

$hello = "Hello, ";
echo "<p>$hello 
           world      world";


$some = "Hell";
echo "<p>";
echo $some."o world!";
echo "<p>";
echo "{$some}o wirld";
echo "<p>";
echo "${some}o wurld";


$action = array(
    "left" => "survive",
    "right" => "kill'em all",
);

echo "<p>Выбранный элемент: {$action['left']}";
echo "<p>Выбранный элемент: $action[left]";

$name = "Гейтс Гейтс Гейтсович";
$text = <<<asdf
Далее идёт какой-то текст
идёт себе и идёт
И дальше так идёт с переменными, 
которые интерполируются. Например, $name
интерполируется. Маркер может быть любым, кстати. 
asdf;


echo "<p>$text";


//$text2 = var_export($text);
echo "<p><br>";
echo "<br>";
?>

<p>

<?php

$a = ($b = 4) + 5;

$n = 6;
$n += 1;

$message = "Подъём";
echo "$message";
?>
<p>
<?php

$a = 10;
$b = $a++;
echo "<p>a = $a", " b = $b";

$a = 10;
$b = ++$a;
echo "<p>a = $a", " b = $b";

//echo "asf".$text2;
echo $text;

?>
<p>

<?php

echo 2**9;

/*
a & b = одновременно а и б;

a | b = либо в а, либо в б одновременно;

a ^ b = либо в а, либо в б;

~a = нули вместо единиц
*/






define ('LINE', 0);
define ('CURVE', 1);
define ('RECTANGLE', 2);
define ('ELLIPSE', 3);

define ('BLACK', 0);
define ('BLUE', 4);
define ('GREEN', 8);
define ('YELLO', 12);
define ('ORANGE', 16);
define ('RED', 20);
define ('WHITE', 24);

echo "<p>Жёлтый прямоугольник в десятичном
 формате: ";
echo RECTANGLE|GREEN;

echo "<p>Жёлтый прямоугольник в двоичном
 формате: ";
echo decbin(RECTANGLE|GREEN);


$angle = 45<<5;
$height = 15<<(5+9);
$width = 14<<(5+9+9);

echo "<p>";
echo RECTANGLE|GREEN|$angle|$height|$width;
echo "<p>";
$draw = decbin(RECTANGLE|GREEN|
$angle|$height|$width);
echo $draw;

// обратно получаем из числа составляющие

echo "Примитив:  ".   ($draw&3). "<br>";
echo "Цвет:  ". (($draw & 28)>>2). "<br>";
echo "Угол поворота:  "; 
echo "Высота:  ";
echo "Ширина:  ";



?>

<!-- Навязчивые предупреждения -->

<form action = "warn.php">
    <input type = "submit" name = "doGo"
     value = "Click!">
</form>

<?php
if ($val = $_REQUEST["doGo"]??false) echo "Вы нажали кнопку!";

?>