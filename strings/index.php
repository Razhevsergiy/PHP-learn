<!doctype html>
<html lang = "ru">
<head>
    <meta charset = 'utf-8'>
</head>
<body>
<?php

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











?>
</body>
</html>
