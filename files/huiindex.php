<?php

require_once("/home/serg/PHP/dumper.php");

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
$f = fopen($filename, "r");
echo "<p>".ftell($f);
fclose($f);

echo "<p>".basename(__FILE__, ".php");
echo "<p>".dirname(__FILE__, 3);
echo "<p>".dirname("/index.php");
echo "<p>".dirname("index.php");
// $fname=tempnam(dirname(__FILE__), "qq").getmypid();
// $f=fopen($fname, "a");
// fclose($f);
echo "<p>".realpath("../"); 

dumper(file($filename));
echo "<p>".ini_get("include_path");
dumper(file("/usr/share/php8.1-common/common/calendar.ini"));

// $s = phpinfo();
// echo "<p>".$s;
// $filename="/etc/php/8.1/cli/php.ini"; 
// dumper(file("/etc/php/8.1/cli/php.ini"));




?>