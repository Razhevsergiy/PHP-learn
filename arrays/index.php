<?php

unset($nameList);
$nameList[] = "Yueng Wo Ping";
$nameList[] = "Geoffrey Darrow";
$nameList[] = "Hugo Weaving";

echo "А вот и первый элемент массива: ".
$nameList[2]."<br>";

for($i=0; $i < count($nameList); ++$i)
echo $nameList[$i]."<br/>";

?>

<p>
<?php
$names["Anderson"] = "Thomas";
$names["Weaving"] = "Hugo";
$names["Darrow"] = "Geofrey";

$f = "Anderson";
echo $names["Weaving"]." said: Hmmm, mr. "
.$names[$f]."...";
?>
</p>

<p>
<?php

$info = array("vasya", "popkin", 23);

list(, $surname, $age) = $info;

var_dump($surname, $age);
?>
</p>

<p>
<?php

unset($names);
$names["Weaving"] = 'Hugo';
$names['Chong'] = 'Marcus';

echo $names['Weaving'];
echo $names["ложка"];
?>
</p>
<p>
<?php
unset($names);
$names = [];

$names = ["Weaving" => "Hugo",
 "Chong" => "Marcus",];

echo $names['Weaving'];

unset($names);

$names=["Yuen Wo Ping", "Geofrey Darrow",
"Hugo Weaving"];
?>
<p>
<?php
$dossier["Anderson"] = 
["name" => "Thomas", "born" => "1962-03-11"];
$dossier["Reeves"] = 
["name" => "Keanu", "born" => "1962-09-02"];
?>
<pre><?php var_export($dossier);?></pre>
</p>
<p>
<?php
unset($dossier);
$dossier = [
    "Anderson" => 
    ["name" => "Thomas", "born" => "1962-03-11"],
    "Reeves" =>
    ["name" => "Keanu", "born" => "1962-09-02"],
];
var_dump($dossier);
?>
</p>

<p>
<?php
define (
    'DOSSIER',
    [
        "Anderson" => 
        ["name" => "Thomas", "born" => "1962-03-11"],
        "Reeves" =>
        ["name" => "Keanu", "born" => "1962-09-02"],
    ]);
echo "<p>".DOSSIER["Anderson"]["name"];

$c = count(DOSSIER);
echo "<p>".$c;
?>
</p>

<p>
<?php
$good = 
["Arahagna" => "Julian", "Doran" => "Matt"];
$bad = 
["Goddard" => "Paul", "Taylor" => "Robert"];
$add = $good + $bad;
var_dump($add);
unset($good, $bad, $add);


$good = 
["Julian Arahanga", "Matt Doran", "Belinda McClory"];
$bad = 
["Paul Goddard", "Robert Taylor"];
$ugly = ["Clint Eastwood"];

$all = $good + $bad + $ugly;
echo '<p>';
print_r($all);

$alltwo = array_merge($good, $bad, $ugly);
echo '<p>';
print_r($alltwo);

// $allfor = $good + $bad

foreach ($bad as $k => $v) $good[$k] = $v;
var_dump($good);
var_dump($bad);


?>
</p>

<p>

<?php
var_dump($nameList);
echo "<p>";
for ($i = 0; $i < count($nameList); $i++) {
    echo "{$nameList[$i]}<br>";
}

var_dump($nameList);
echo "<p>";
for (end($nameList); ($k = key($nameList)); prev($nameList))
echo $nameList[$k]."<br>";

// for (($nameList); ($k = key($nameList)); next($nameList))
// echo $nameList[$k]."<br>";
unset($k, $v);
echo "<p>";
$birthday = [
    "Sarah James" => "1985-03-23",
    "Lindsey Lourham" => "1993-04-02",
    "William Conley" => "2000-12-11",
];

foreach ($birthday as $k => $v) echo "$k родился $v<br>";

echo "<p>";
$magic = ["Шоколадка","Мороженое","Конфета"];
$magic = $magic[1];
foreach ([101, 3114, 606] as $magic)
echo "На стене было написано: $magick.<br>";

echo "<p>";
$numbers = [100, 313, 605];
foreach ($numbers as $v) 
{++$v; echo $v."<br>";};
echo "<p>";
foreach ($numbers as $elt) echo $elt." <br>";

unset($v, $elt, $numbers);
echo "<p>";
$numbers = [100, 313, 605];
foreach ($numbers as &$v) 
{++$v; echo $v."<br>";};
echo "<p>";
foreach ($numbers as $elt) echo $elt." <br>";
unset($v, $elt);
?>
</p>

<p>
<?php
$str = "usort — Сортирует массив по значениям используя пользовательскую функцию для сравнения элементов";
echo $str;
$str_array = explode(" ",$str, 100);
var_dump($str_array);

$new_str = implode(" | ", $str_array);
echo "<br> $new_str <br>";
?>
</p>

<p>
<?php
$st = serialize($str_array);
echo $st;
echo "<p>";
echo "<pre>";
var_dump( unserialize($st));
echo "</pre>";
echo "<br>".$st;

echo "<p>".phpinfo();

?>


</p>