<?php
$filename = "/usr/share/php8.1-common/common/calendar.ini";
$filename2 = "/home/serg/PHP/files/calendar.ini";
copy($filename, $filename2);
$handle = fopen($filename2, "r");
$contents = fread($handle, filesize($filename2));
fclose($handle);
echo $contents;
?>