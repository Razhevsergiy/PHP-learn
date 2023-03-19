<?php
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
$dir = "d1/d2/d3";

if (!mkdir($dir, 0777, true)) die("Не удалось создать
дитекторию");



?>


