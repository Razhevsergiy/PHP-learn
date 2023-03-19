<?php
require_once("../dumper.php");


$file = "file.txt";
fclose(fopen($file, "a+b"));
$f = fopen($file, "r+b") or die("Ну погоди!");

flock($f, LOCK_EX);
fflush($f);
flock($f, LOCK_UN);
sleep(1);
//echo "<p>Привет!";
fclose($f);
?>

<?php
$file = "file.txt";
fclose(fopen($file, "a+b"));

$f = fopen($file, "r+b") or die ("Кукареку!");
flock($f, LOCK_SH);
fclose($f);

$f = fopen($file, "r+b");
 While (!flock($f, LOCK_EX | LOCK_NB)) {
    echo "<p>"."Получаем доступ к файлу.";
    sleep(1);
}
file_put_contents($file, "asdfasdf\n");
fflush($f);
flock($f, LOCK_UN);
fclose($f);
?>
<?php
$file="counter.dat";
fclose(fopen($file, "a+b"));
$f=fopen($file, "r+t");
flock($f, LOCK_EX);
$count = fread($f, 100);
$count = (int) $count;  //Преобразование строки к числу
$count = $count+1;
ftruncate($f, 0);
fseek($f, 0, SEEK_SET);
fwrite($f, $count);
fclose($f);
echo "<p>Эта страница была загружена ".$count." раз.";
?>
<?php
$dir = "d1";

mkdir($dir, 0777, true) or die("Не удалось создать
директорию");
rmdir("d1");
echo "<p>".getcwd();
?>

<?php
$d = opendir(dirname(__FILE__));
echo "<p>";
while (($e = readdir($d))!==false) {echo $e."<br />";}
rewinddir($d);
closedir($d);
?>

<?php
function printTree($level=1) {
    $d=@opendir(".");
    if (!$d) return;
    while (($e=readdir($d))!==false) {
        if ($e == '.' || $e == '..') continue;
        if (!@is_dir($e)) continue;
        for ($i=0; $i<$level; $i++) echo " ";
        echo "$e\n";
        if (!chdir($e)) continue;
        printTree($level + 1);
        chdir("..");
        flush();
    }
    closedir($d);
}

echo "<pre>/\n";
//chdir("/");
chdir($_SERVER['DOCUMENT_ROOT']);
printTree();
echo "</pre>";

dumper(glob("*.php"));

?>



