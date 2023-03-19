<!doctype html>
<html>
<head>
    <title>Блокировка</title>
    <meta charset="utf-8">
</head>
<body>
<?php 
$filename=dirname(__FILE__)."/phpcommonway";
$str = file_get_contents($filename, false, null, 2, 12);
echo $str;


file_put_contents($filename, "asdfasdfasdfasdf");
$str = file_get_contents($filename);
echo "<p>".$str;

$file = "file.txt";
fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die ("Не могу открыть!");
flock($f, LOCK_EX);
fseek($f, 0);
file_put_contents($file, "asdfj;laksdjf;kj", FILE_APPEND);
fclose($f);
echo "<p>".file_get_contents($file);

$f=fopen($file, "r+") or die("Не могу открыть файл на запись!");
flock($f, LOCK_EX);
ftruncate($f, 1);
echo "<p>".file_get_contents($file);

$file = "file.txt";
fclose(fopen($file, "a+b"));
$f = fopen($file, "r+b") or die("Не открыть!");

// while (true) {
//     flock($f, LOCK_EX);
//     fflush($f);
//     flock($f, LOCK_UN);
//     sleep(10);
//     fclose($f);
// }

?>
</body>
</html>