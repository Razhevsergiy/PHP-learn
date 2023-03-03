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
$day = $a[1];
$month = $a[0];
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

$a = 10;
$b = &$a;
$b = 5;

$a = "https://www.ozon.ru/search/?text=53 Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно. ";
echo "<p>".urlencode($a);


echo "<p>".urldecode('https://www.ozon.ru/search/?text=%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F+%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0+Linux&from_global=true');

$example = <<<EXAMPLE
<?php
    echo &quotHello world!";
?>
EXAMPLE;

echo "<p>".$example;

echo "<p>".htmlspecialchars($example, ENT_COMPAT, false);

$str = "HTML characters to check the <b>bold</b> text.&amp";
echo "<p>". htmlspecialchars(htmlspecialchars(htmlspecialchars($str), false), $double_encode = false);

echo "<p>";
$trans = array_flip(get_html_translation_table());
$str = strtr($str, $trans);
echo $str;

$str = "53\ \ \ \ \ \ \ \ ''''''''''''' Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно.";
echo "<p>".addslashes($str);
$str = addslashes($str);
echo "<p>".stripslashes($str);
$str = "Представляется логичным, что сомнение 
представляет онтологический смысл жизни. 
Отношение к современности поразительно.";
echo "<p>".addslashes($str);

$str = "Folk culture by country, Folk art, 
Chinese fortune telling, Folk dance, Europeade, 
Folk festivals, Folklore, Folk games, Gavari, 
Folk groups, Folk magic, Folk museums, Folk music, 
Newweling, Folk religion, Traditional music, 
Traditional songs, Folk wrestling. ";

echo "<p>".strtolower($str);
echo "<p>".strtoupper($str);
echo "<p>".ucfirst(strtolower($str));
//работает только in English
echo "<p>";

setlocale(LC_ALL, '');

$str = "Представляется логичным, что сомнение 
представляет онтологический смысл жизни. 
Отношение к современности поразительно.";
echo "<p>".strtolower($str);
echo "<p>".strtoupper($str);
echo "<p>".ucfirst(strtolower($str));
//setlocale ничего не меняет

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
echo "<p>$money";
echo "<p>".sprintf("%h", 10*$money);


$isodate = printf("<p>%04d-%02d-%02d", $year, $month, $day);

$str = "Представляется логичным, что сомнение \n
представляет онтологический смысл жизни. \n
Отношение к современности поразительно.\n";

$str = "3M \nThinsulate \nPlatinum \ninsulation";

echo "<p>".$str; 
echo "<p>".NL2BR($str, true); 

function cite($ourText, $maxlen = 60, $prefix = ">") {
    $st = wordwrap($ourText, $maxlen - strlen($prefix), "<br>\n");
    //$st = nl2br($st);
    $st = $prefix.str_replace("\n", "\n$prefix", $st);
    return $st;
}

echo "<pre>";
echo cite("Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно.");
echo "</pre>";


$str = "Представляется логичным, что сомнение представляет онтологический смысл жизни. Отношение к современности поразительно.";
// echo "<pre>";
echo cite(cite(cite($str)));
// echo "</pre>";

$st =<<<HTM
<b>Жирный текст</b>
<tt>Моноширинный текст</tt>
<a href = 'http://www.dklad.ru'>Ссылка</a>
a<x && y>d
HTM;

echo "<p>Исходный текст: ".$st;
echo "<hr>После удаления тегов: ".strip_tags($st);

$format = "nvc*";
$bindata = pack($format, 0x1234, 0x5678, 65, 66);
echo "<p>".$bindata;

$array = unpack("c2chars/nint", $bindata);
dumper($array);

echo "<p>".md5($st);
echo "<p>".crc32($st);
//echo "<p>".crypt($st, "ad"); не понятно
//это ключ или что-то другое и как работает алгоритм
//echo "<p>".crypt($st);

flush();






?>
</body>
</html>
