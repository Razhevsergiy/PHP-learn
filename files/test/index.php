<?php
$filename = "/home/serg/PHP/files/test/txt.txt";
$f = fopen($filename, "a+t");
 
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
echo "<p>".fseek($f, 10);
$str = fread($f, 10);
fclose($f);
echo "$str";


?>