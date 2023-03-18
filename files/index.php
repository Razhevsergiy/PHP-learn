<?php
$filename = "/home/serg/PHP/files/txt.txt";
$f = fopen($filename, "r+t");
ftruncate($f, 0);
 
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
sometext');
fclose($f);
$f = fopen($filename, "r+t");
$str = fread($f, filesize($filename));
fclose($f);
echo $str;
?>