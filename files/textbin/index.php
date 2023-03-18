<?php
function makeHex($st)
{
    for ($i = 0; $i < strlen($st); $i++)
        $hex[] = sprintf("%02X", ord($st[$i]));
    return join(" ", $hex);
}

$f=fopen(__FILE__, "rb");
echo "<p>".makeHex(fgets($f, 100));
$f=fopen(__FILE__, "rb");
echo "<p>".makeHex(fgets($f, 100));

?>  
