<?php
require_once "/home/serg/PHP/dumper.php";
?>
<p>
<?php
function simple($from = 0, $to = 100){
    for ($i = $from; $i < $to; $i++) {
        echo "<p>Значение = $i";
        yield $i;
    }
}

foreach (simple() as $val){
    echo "<p>Квадрат = ".($val * $val);
    if ($val >= 5) break;
}
?>
</p>

<p>
<?php
function generator(){
    echo "<p>Перед первым yield";
    yield 1;
    echo "<p>Перед вторым yield";
    yield 2;
    echo "<p>Перед третьим yield";
    yield 3;
    echo "<p>После третьего yield";
}

foreach (generator() as $i) {
    echo "<p>$i";
};

foreach (generator() as $i) {
    echo "<p>$i";
};
?>
</p>
<p>
<?php
function collect($arr, $callback){
    foreach($arr as $value){
        yield $callback($value);
    }
};

function select($arr, $callback){
    foreach ($arr as $value) {
        if($callback($value)) yield $value;
    }
};

function reject($arr, $callback){
    foreach($arr as $value){
        if(!$callback($value)) yield $value;
    }
}

$arr = [1,2,3,4,5,6,];
$collect = collect($arr, function($e){return $e * $e;});
foreach($collect as $val) echo "$val\n";
echo"<p>";



$select = select($arr, function($e){
    return $e%2 == 0 ? true : false;
});
foreach($select as $val) echo "$val  ";
echo "<p>";

$reject = reject($arr, function($e){
    return $e%2 == 0? true:false;
});
foreach($reject as $val) echo "$val  ";
echo "<p>";
?>
</p>
<p>
<?php
function square($value){
    yield $value * $value;
}
function even_square($arr){
    foreach ($arr as $value){
        if ($value % 2 == 0) yield from square($value);
    }
}

foreach(even_square($arr) as $val) echo "$val  ";
echo "<p>";

function generator1(){
    yield 1;
    yield from [2, 3];
}

foreach(generator1() as $i) echo "$i  ";
?>

</p>

<p>
<?php
function crange($size){
    $arr = [];
    for ($i = 0; $i < $size; $i++){
        $arr[] = $i;
    }
    return $arr;
}

function crange1($size){
    for ($i = 1; $i < $size; $i++){
        yield $i;
    }
}

// $range = crange(1024000);
// foreach($range as $i) echo $i;
// echo "<p>".memory_get_usage();
?>
</p>

<p>
<?php
function collect2($arr, $callback){
    foreach($arr as $key => $value){
        yield $key => $callback($value);
    }
}

$arr = [
    "first" =>  1,
    "second" => 2,
    "third" =>  3,
    "fourth" => 4,
    "fifth" =>  5,
    "sixth" =>  6];

$collect2 = collect2($arr, function($e){return $e*$e;});
foreach($collect2 as $key => $value) echo "$val  ($key)  ";
//Не работает!


?>  
</p>

<p>
<?php
function &reference(){
    $value = 3;
    while ($value > 0) {
        yield $value;
    }
}

foreach(reference() as &$number) {
    echo (--$number).' ';
}
?>
</p>

<p>
<?php


$hello = simp();
echo gettype($hello);
echo "<p>";
function simp($from = 0, $to = 100){
    for ($i=$from; $i < $to; $i++){
        echo  "<p>значение = $i";
        yield $i;
    }
}


function block() 
{
    while(true) {
        $string = yield;
        echo $string;
    }
}

$block = block();
$block -> send("<p>Hello world!");
$block -> send("<p>Hello PHP!");

function gener(){
    yield 1;
    return yield from two_three();
    yield 5;
}

function two_three(){
    yield 2;
    yield 3;
    return 4;
}

$gener = gener();

foreach($gener as $i){
    echo "<p>".$i;
}
echo "<p>return = ".$gener -> getReturn();

?>
</p>
