<?php
error_reporting(E_ALL);
//error_reporting(0);
ini_set('display_errors', 'on');
require_once('/home/serg/PHP/pecho.php');

$a = ['a', 'b', 'c'];
pecho($a[0]);
pecho($a[1]);
pecho($a[2]);

$b = ['a','b','c','d'];
pecho($b[0].'+'.$b[1].'+'.$b[2].'+'.$b[3]);

$c = [1,2,3];
pecho($c[0]+$c[1]+$c[2]);

$d = [2,5,3,9];
$result = $d[0]*$d[1]+$d[2]*$d[3];
pecho($result);

$month = [1 => 'Январь', 'Февраль', 'Март', 'Апрель',
'Май', 'Июнь', 'Июль','Август','Сентябрь','Октябрь',
'Ноябрь','Декабрь'];

$user = ['name'=>'Sergiy', 'surname'=>'Razew',
'patronymic'=>'Anatolievich'];

pecho($user['surname'].' '.$user['name'].' '
.$user['patronymic']);

$date = ['year'=>2023, 'month'=>03, 'day'=>31];
pecho(date('Y m d'));

$arr = [3=>13, 5=>15, 10=>2023];
//for ($i = 0; $i <=10; $i++) pecho($arr[$i]);

pecho(count($arr));
$arr = ['a','b','c','d','e'];
pecho(count($arr));

$arr = ['a'=> 1,'b'=> 2,'c'=> 3,'d'=> 4,];
pecho(count($arr));

$arr = ['a','b','c','d','e',];
pecho($arr[count($arr)-1]);
pecho($arr[count($arr)-2]);

$arr = ['a','b','c'];
$arr[0]='!';
pecho(null);
var_dump($arr);

$arr = ['a'=>1,'b'=>2,'c'=>3];
$arr['a'] = 3;
$arr['b'] = 0003;
$arr['c'] = 1;
pecho(null);
var_dump($arr);

$arr = ['a'=>1,'b'=>2,'c'=>3];
pecho(null);
foreach ($arr as $val) {$val = $val+3 ;};
var_dump($arr);

pecho(null);
$arr['a'] += 3;
$arr['b'] += 3;
$arr['c'] += 3;
var_dump($arr);

$arr = ['a' => 1, 'b' => 2, 'c' 
=> 3]; 

$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;
pecho(null);
var_dump($arr);

$arr = [];
$arr[]=1;
$arr[]=2;
$arr[]=3;
$arr[]=4;
$arr[]=5;
pecho(null);
var_dump($arr);

$arr = [1,2,3];
$arr[]=4;
$arr[]=5;
pecho(null);
var_dump($arr);

$arr = [];
$arr['year']='2023';
$arr['month']='march';
$arr['day']='31';
pecho(null);
var_dump($arr);

$arr = [1,2,3,4,5,];
$key1 = 1;
$key2 = 2;
pecho($result=$arr[$key1]+$arr[$key2]);

$arr = ['a' => 1, 'b' => 2, 'c' 
=> 3];
$key = 'c';
pecho($arr[$key]);





?>