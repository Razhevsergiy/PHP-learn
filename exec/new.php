<?php
header("Content-type: text/plain");
$spec = [
    0 => ["pipe", "r"],
    1 => ["pipe", "w"],
    2 => ["file", "/tmp/error-output.txt", "a"]
];

$proc = proc_open("cat", $spec, $pipes);
for ($i=0; $i < 100; $i++)
fwrite($pipes[0], "Hello World #$i!\n");
fclose($pipes[0]);
while (!feof($pipes[1])) echo fgets($pipes[1], 1024);
fclose($pipes[1]);
proc_close($proc);//deadlock
?>


