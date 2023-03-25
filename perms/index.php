<!doctype html>
<html lang="ru">
<head>
    <title>Права доступа файлов</title>
    <meta charset="utf-8">
</head>
<body>
<?php

require_once("/home/serg/PHP/dumper.php");

$file = "file.txt";
fclose(fopen($file, "a+t"));
echo "<p>".fileowner($file);
echo "<p>".filegroup($file);
$perms = fileperms($file);
echo "<p>".decoct($perms);
echo "<p>".decbin(fileperms($file));

if (($perms&0xC000) == 0xC000)
    echo "<p>"."Сокет";
elseif (($perms&0xA000) == 0xA000)
    echo "<p>"."Символическая ссылка";
elseif (($perms&0x8000) == 0x8000)
    echo "<p>"."Обычный файл";
elseif (($perms&0x6000) == 0x6000)
    echo "<p>"."Специальный блочный файл";
elseif (($perms&0x4000) == 0x4000)
    echo "<p>"."Каталог";
elseif (($perms&0x2000) == 0x2000)
    echo "<p>"."Специальный символьный файл";
elseif (($perms&0x1000) == 0x1000)
    echo "<p>"."FIFO-канал";
else
    echo "Неизвестный файл";

$stats = stat($file);
dumper($stats);

echo "<p>".filesize("./index.php");
echo "<p>".filemtime("./index.php");
echo "<p>".fileatime("./index.php");
echo "<p>".filectime("./index.php");
$mtime = filemtime("./index.php");
echo "<p>Последнее изменение страницы: "
.date("Y-m-d H:i:s",$mtime);
echo "<p>".filetype($file);
echo "<p> ".is_readable($file)." ".is_writable($file)
." ".is_executable($file);
echo "<p>".file_exists($file);




?>
</body>
</html>