<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Работа с файлами</title>
    <meta charset="utf-8">
</head>
<body>
<?php
// $f = fopen("/home/serg/file.txt", "rt") 
// or die ("Ошибка!");
// echo "<p>".$f;
// $f = fopen("http://www.php.net", "rt") or die("Ошибка!");
// echo "<p>".$f;
// $f = fopen("ftp://user:pass@example.com/a.txt", "wt")
// or die("Ошибка!");
// echo "<p>".$f;

function makeHex($st)
{
    for ($i = 0; $i < strlen($st); $i++)
        $hex[] = sprintf("%02X", ord($st[$i]));
    return join(" ", $hex);
}

$f=fopen(__FILE__, "rb");
echo "<p>".makeHex(fgets($f, 100));
$f=fopen(__FILE__, "rt");
echo "<p>".makeHex(fgets($f, 100));
//С text работает также как и с bin 
//вставляет 0A потому что это не шиндовс

tmpfile();
fclose($f);

copy("/home/serg/PHP/files/textbin/index.php", 
"/home/serg/PHP/files/textbin/kindex.php");
$f = fopen("/home/serg/PHP/files/textbin/kindex.php"
, "r+t");
echo "<p>".fread($f, 1);
//обрабатывает только первый символ

$f = fopen("/home/serg/PHP/files/textbin/seva"
, "r+t");
echo "<p>".fread($f, 100);
//тоже не читает
for ($i=0; $i==100; $i++)
fclose($f);


$file = fopen("/home/serg/PHP/files/textbin/seva.zip"
, "rt");
echo "<p>".fread($file, 100);
fclose($file);
for ($i=0; $i==100; $i++)
fclose($f);

$f = fopen("/home/serg/PHP/files/txt.txt", "a+t");

fwrite($f, 'sometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometextsometextsometextsometextsometextsometextsometext
sometext', 1100);
$str = fread($f, filesize($f));
fclose($f);
echo "$str"; //как сделать чтобы она файл прочитала????

$f = fopen("/home/serg/PHP/files/txt.txt", "r+b");
echo "<p>".fgets($f);
fclose($f);

$f = fopen("txt.txt", "r");
fseek($f, -10, SEEK_END);
while (!feof($f)) {
    $st = fgets($f);
    echo "<p>".$st;
}
fclose($f);

$filename = "/home/serg/PHP/files/txt.txt";
$f=fopen($filename, "r+");
ftruncate($f, 0);
fclose($f);










?>    
</body>
</html>