<!doctype html>
<html lang="ru">
<head>
    <title>Пример функции и её использования</title>
    <meta charset="utf-8">
</head>
<body>
<?php



$names = [
    "Weaving" => "Hugo",
    "Goddard" => "Paul",
    "Taylor" => "Robert",
];

if (isset($_REQUEST['surname'])) {
    $name = $names[$_REQUEST['surname']];
    echo "Вы выбрали: {$REQUEST['surname']}, {$name}";
}

?>

<form action="<?=$_SERVER['SCRIPT_NAME']?>"
method="post">
<label for="sel">Выберите имя:
<select name="surname" id="sel">
    <?=selectItems($names, $_REQUEST['surname'])?>
</select></label>
</form>
<p>
<?php
function mySqr ($n)
{
    return $n * $n;
}

$value = mySqr(4);
echo "<p>";
echo $value;
echo "<p>";
echo mySqr(10);

function silly() {
    return [1, 2, 3];
}

$arr = silly();
echo "<p>";
var_dump($arr);

list ($a, $b, $c) = silly();
echo "<p>";
echo gettype(silly());
echo "<p>";
echo silly()[2];
echo "<p>";
echo $a;
?>
</p>

<p>
<?php
function f(){}
var_dump(f());
function SelectItems($items, $selected = 0) {
    $text = "";
    foreach ($items as $k => $v) {
        if ($k === $selected)
        $ch = " selected";
        else
        $ch = "";
        $text .= "<option$ch value = '$k'>$v<option>";
    }
    return $text;

}
?>
</p>
<p>
<?php
echo SelectItems($names, "Goddard");
echo SelectItems($names);
echo "<p>";

?>

</p>
asdfasdf
<p>
<?php
function increment (&$a)
{
    echo "<p>Текущее значение: $a";
    $a += 1;
    echo "<p>После увеличения: $a";
}



$num = 10;
echo "<p>Начальное значение: $num";
increment($num);
echo "<p>После вызова функции: $num";
#Не работает как надо!
?>
</p>

<p>
<?php
function myecho ()
{
    foreach (func_get_args() as $v) {
        echo "<p>".$v."\n";
    }
}

myecho("Меркурий", "Венера", "Земля", "Марс");
?>
</p>
<p>
<?php
function planets (...$planets)
{
    foreach ($planets as $v) {
        echo "<p>$v";
    }
}
?>


<?php
function add_some_extra(&$string)
{
    $string .= ". И кое-что ещё!";
}
$str = 10;
add_some_extra($str);
echo $str;    // выведет '10. и кое-что ещё.'
?>
</p>
<p>
<?php
planets("Меркурий", "Венера", "Земля", "Марс");
function toomanyargs($st, $snd, $thd, $fth)
{
    echo "<p>Первый параметр: $st";
    echo "<p>Второй параметр: $snd";
    echo "<p>Третий параметр: $thd";
    echo "<p>Четвёртый параметр: $fth";
}

$planets = ['Меркурий','Венера','Земля', 'Марс'];

toomanyargs(...$planets);

?>
</p>
<p>
<?php
function sum(int $fst, int $snd): int
{
    return $fst + $snd;
}

echo "<p>".sum(2,2);
echo "<p>".sum('2.5','2.5');
?>
</p>
<p>
<?php
$a = 100;
function test($a) {
    echo $a;
    $a++;
}
test(1);
echo "<p>".$a;

function sil () 
{
    $i = mt_rand();
    echo "<p>".$i;
}

for ($i = 0; $i != 10; $i++) sil();
?>
</p>
<p>
<?php
$monthes = [
    1 => "Январь",
    2 => "Февраль",
    3 => "Март",
    4 => "Апрель",
    5 => "Май",
    6 => "Июнь",
    7 => "Июль",
    8 => "Август",
    9 => "Сентябрь",
    10 => "Октябрь",
    11 => "Ноябрь",
    12 => "Декабрь",
];

function getMonthName($n) {
    global $monthes;
    return $monthes[$n];
};
function getMonthName2($n) {
    return $GLOBALS["monthes"][$n];};

echo "<p>".getMonthName(6);
echo "<p>".getMonthName2(8);
unset($GLOBALS[$GLOBALS]);
//var_dump($GLOBALS);
 $anna = 1;
function anna () {
    global $anna;
    $anna = 10;
    //$GLOBALS['anna'] = 10;
    return $anna;
}
echo "<p>".anna();
echo "<p>".$anna;
echo"<pre>";
//var_dump($GLOBALS);
echo"</pre>";
?>
</p>
<p>
<?php
function selfcount(){
    static $count = 0;
    $count++;
    echo $count;
}
for ($i = 0; $i<5; $i++) selfcount();
?>
</p>
<p>
<?php
function fact($n){
if ($n <= 0) return 1;
else return $n*fact($n - 1);
}
echo fact(10);

function factor($n) {
    //$fa = 1;    
    if ($n <= 1)
    return 1; else {
    for ($i = 1; $i <=$n; $i++) {
        static $fa = 1;
        $fa = $fa*$i;
    };
    return $fa;}
};
echo "<p>".factor(10);

//var_dump($GLOBALS);
?>
</p>
<p>
<?php
function dumper($obj) {
    echo
        "<pre>",
        htmlspecialchars(dumperGet($obj)),
        "</pre>";
}

function dumperGet($obj, $leftSp = ""){
    if (is_array($obj)) {
        $type = "Array[".count($obj)."]";
    } elseif (is_object($obj)) {
        $type = "Object";
    } elseif (gettype($obj) == "boolean") {
        return $obj?"true":"false";
    } else {
        return "\"$obj\"";
    }
    $buf = $type;
    $leftSp .= "    ";
    foreach ($obj as $k => $v) {
        if ($k === "GLOBALS") continue;
        $buf .= "\n$leftSp$k => ".dumperGet($v, $leftSp);
    }
    return $buf;
}

dumper($monthes);
dumper(selfcount());
print_r($monthes);


?>
</p>

<p>
<?php
function father($a){
    echo "<p>$a";
    function child($b){
        echo "<p>".$b+1;
        return $b+$b;
    }
    return $a + $a + child($a);
}

father(10);
child(30);
// child(40);
//father(20);
?>
</p>

<p>
<?php
if (PHP_OS == "WINNT") {
    function myChown (){};
} else {
    function myChown($fname, $attr) {
        return chown($fname, $attr);
    }
}

?>
</p>

<p>
<?php
// if (!function_exists("virtual")){
//     echo "virtual";
//     function virtual($uri){
//         $url = "http://".$_SERVER["HTTP_HOST"].$uri;
//         echo file_get_contents($url);
//     }
// }

//virtual("/");
?>
</p>

<p>
<?php

function A($i) {echo "Вызвана A($i)\n";}
function B($i) {echo "Вызвана B($i)\n";}
function C($i) {echo "Вызвана C($i)\n";}
$F = "A";
$F(303);

function fCmp($a, $b){
    return strcmp(strtolower($a), strtolower($b));
}
$riddle = [
    "g" => "Not", "o" => "enough", "d"=>"ordinaries",
];

uasort($riddle,"fCmp");
dumper($riddle);    //Не работает с utf-8!

function al($i){echo "Вызвана al($i)\n";}
function bl($i){echo "Вызвана bl($i)\n";}
function cl($i){echo "Вызвана cl($i)\n";}

$f = "al";
call_user_func($f, 101);
?>
</p>

<p>
<?php
function myeho(...$str){
    foreach ($str as $v){
        echo"<p>".$v;
    }
}

function tabber($spaces, ...$planets){
    $new = [];
    foreach ($planets as $planet) {
        $new[] = str_repeat("&nbsp;", $spaces).$planet;
    }
    call_user_func_array("myeho", $new);
}

tabber(10, "Меркурий", "Венера","Земля","Марс",);
?>
</p>

<h1>
###Анонимные функции###
</h1>
<p>
<?php
##Анонимная функция
$myecho = function(...$str)
{
    foreach ($str as $v) {
        echo "<p>$v\n";
    
    }
};

$myecho("Меркурий","Венера","Земля","Марс",);

function tabber2($spaces, $echo,...$planets){
    $new = [];
    foreach ($planets as $planet) {
        $new[]=str_repeat("&nbsp;", $spaces).$planet;
    }
    $echo(...$new);
}

$planets = ["Меркурий","Венера","Земля","Марс",];

tabber2(10, function(...$str){
    foreach ($str as $v){
        echo "<p>$v\n";
    }
}, ...$planets);

$message = 
"<p>Работа не может быть продолжена из-за ошибок";
$check = function(array $errors) use ($message){
    if (isset($errors) && count($errors) > 0) {
        echo $message;
        foreach($errors as $error) {
            echo "<p>$error\n";
        }
    }
};

$errors[] = "Заполните имя пользователя";
$check($errors);

$message = "Список требований";
$errors = ["PHP", "MySQL", "memcache"];
$check($errors);

?>
</p>

<p>
<?php
$a = 100;
function &r() {
    global $a;
    return $a;
}

$b = &r();
$b = 0;
echo "<p>$a\n";
?>
</p>

<h1>Технология отложенного копирования</h1>
<p>
<?php
// // Передача по значению без изменения параметра
// function takeVal($a) {$x = $a[1234];}
// //Передача по ссылке без изменения параметра
// function takeRef(&$a) {$x = $a[1234];}
// //Передача по значению с изменением параметра
// function takeValAndModif($a) {$a[1234]+=100;}
// //Передача по ссылке с изменением параметра
// function takeRefAndModif(&$a) {$a[1234]+=100;}

// echo "<p>";
// test2("takeVal");
// echo "<p>";
// test2("takeRef");
// echo "<p>";
// test2("takeValAndModif");
// echo "<p>";
// test2("takeRefAndModif");

// function test2($func){
//     $a = [];
//     for ($i = 1; $i <= 100000; $i++) $a[$i] = $i;
//     for ($t = time();$t == time(););
//     for ($N = 0, $t = time(); time() == $t; $N++) $func($a);
//     printf("<p><tt>$func</tt> заняло %d itr/sec", $N);
// }


// dumper($a);
$massiv[12345] = 3;
dumper($massiv); 

function fac($n){
    if ($n<=0) return 1; else {
    $fac = 1;
    for ($i = 1; $i <=$n; $i++) {
        $fac = $fac * $i;
    }
    return $fac;
}
}

echo "<p>".fac(2);
echo "<p>".fac(3);

echo"<pre>";
var_dump(!1);
var_dump(!0);
var_dump(!true);
var_dump(2 && 3);
var_dump(5 && 0);
var_dump(3 || 0);
var_dump(5 / 1);
var_dump(1 / 5);
var_dump(5 + '5string');
var_dump('5' == 5);
var_dump('05' == 5);
var_dump('05' == '5');
echo"</pre>";

?>
</p>





</body>
</html>