<!doctype html>
<html lang = "ru">
<head>
    <meta charset = 'utf-8'>
</head>
<body>
<?php

require_once "/home/serg/PHP/dumper.php";


// for ($code = 257; $code < 512; $code++) {
//     $code1 = $code + 128;
//     echo "<p>code ($code) = ".chr($code).
//     "   code ({$code1}) = ".chr($code1);
// }

echo "<p>\u{1f422}   \u{1f400}   \u{1f424}   \u{1f425}";
$str = "Hello world!";
echo "<p>$str[2]";
$str = "Привет мир!";
echo "<p>$str[2]";
echo "<p>".strlen($str);
//echo "<p>".mb_strlen($str); //надо бы установить php.mbstring

$a = [10, 20, 30];

//echo "<p> {$a}";
$day = $a[0];
$month = $a[1];
$year = $a[2];

$hour = "11";
$min = "01";
$sec = "11";

echo "<p>Всё началось $day.$month $year года, 
в $hour:$min:$sec";

 $one = 1;
 $zero = 0;

 if ($one == "") echo "<p>"."1";
 if ($zero == false) echo "<p>"."2";
 if ("" == $zero) echo "<p>"."3";
 if ("$zero" == "") echo "<p>"."4";
 if (strval($zero) == "") echo "<p>"."5";
 if ($zero === "") echo "<p>"."6";

// ничего из примера в книжке не печатает
// false работает

// for ($i = 0; $i <= strlen("aaaadssss"); $i++)
echo "<p>".strpos("aaaadssss",'a');

$str = '<?php

// for ($code = 257; $code < 512; $code++) {
//     $code1 = $code + 128;
//     echo "<p>code ($code) = ".chr($code).
//     "   code ({$code1}) = ".chr($code1);
// }';

if (strpos($str, "<?") !== false)
echo "<p>Это PHP программа";


$str = '

// for ($code = 257; $code < 512; $code++) {
//     $code1 = $code + 128;
//     echo "<p>code ($code) = ".chr($code).
//     "   code ({$code1}) = ".chr($code1);
// }';

$str = trim($str, " \n\r\t\v\x00\//f\x0B");
echo "<p>".$str;

$lstr = ltrim($str, " }//for");
echo "<p>".$lstr;

$chopstr = chop($str, " \n\r\t\v\x00\//f\x0B}//for");
echo "<p>".$chopstr;

$pos = strpos($str, 5);
echo "<p>".$pos;

$rpos = strrpos($str, 5);
echo "<p>".$rpos;

$strcmp = strcmp($pos, $rpos);
echo "<p>".$strcmp;

echo "<p>".$pos<=>$rpos;

$subst = substr($str, 10, 10+$pos);
echo "<p>".$subst;

$rsubstr = substr($str, 10, 10+$rpos);
echo "<p>".$rsubstr;

$strcamp = strcasecmp($subst, $rsubstr);
echo "<p>".$strcamp;
echo "<p>".$subst<=>$rsubstr;

$str = "Святитель Николай Сербский говорит, что 
«дар Божий» можно понимать и в материальном, и в духовном
 смысле. В материальном — это все, что Бог дает человеку:
 различные вещи, жизненные обстоятельства, людей. 
 Та же вода, которую Иисус Христос просит у самарянки, 
 является даром. Ее сотворил Господь и дал нам в 
 пользование.29 мая 2021 г.";

$str = 

$str = str_replace(" ", "+", $str, $chn);
$str = str_ireplace("дар+божий", "яичница", $str);
echo "<p>".$str;
echo "<p>".$chn;

$from = ["{TITLE}", "{BODY}"];
$to = 
["Философия",
        "Представляется логичным, что сомнение 
        представляет онтологический смысл жизни. 
        Отношение к современности поразительно."
];

$template = <<<MARKER
<!doctype html>
<html lang = 'ru'>
<head>
    <title>{TITLE}</title>
    <meta charset = 'utf-8'>
</head>
<body>{BODY}</body>
</html>
MARKER;
echo str_replace($from, $to, $template);

$a = "asdf";
$b = "fdsa";

$st = "asdf";
$st = strtr($st, $a, $b);
echo "<p>".$st;

$arr = ['a' => "ф", 's' => "ф", 'd' => "ф", 'f' => "ф",];
$st = strtr($st, $arr);
echo "<p>".$st;
$brr = ['ф' => "s", 'ы' => "y"];

$st = "фф ыы вафы";
$st = strtr($st, $brr);
echo "<p>".$st;
//тут всё работает. Где-то есть ошибка в функции.
//будем поискать.

$text = "matrix has you";
$repl = ["matrix" => "you", "you" => "matrix"];
echo "<p>str_replace():  "
.str_replace(array_keys($repl), array_values($repl),
 $text);

echo "<p>strtr()   :".strtr($text, $repl);




?>
</body>
</html>
