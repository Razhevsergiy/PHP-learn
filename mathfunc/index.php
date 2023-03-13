<!doctype html>
<html lang='ru'>
<head>
    <title>Математические функции</title>
    <meta charset="utf-8">
</head>
<body>
<?php
echo "<p>round 3.4:  ".round(3.4);
echo "<p>3.5:  ".round(3.5);
echo "<p>3.6:  ".round(3.6);

echo "<p>round 123.456, 2:  ".round(123.456, 2);
echo "<p>round 123.456, -2:  ".round(123.456, -2);

echo "<p>ceil 3.0:  ".ceil(3);
echo "<p>ceil 3.1:  ".ceil(3.1);

echo "<p>ceil -3.1:  ".ceil(-3.1);
echo "<p>ceil -3.0:  ".ceil(-3);

echo "<p>floor 3.4:  ".floor(3.4);
echo "<p>floor -3.4:  ".floor(-3.4);

echo "<p>mt_rand(0, 100):  ".mt_rand(0, 100);
echo "<p>mt_getrandmax:  ".getrandmax();

$ourfile = fopen("index.php", "r");
for ($i = 0; $s = fgets($ourfile, 1000000); $i++) {
    if (mt_rand(0,$i) == 0) $line = $s;
}

echo "<p>".$line;
//ни в какую не выводит html-tags!

mt_srand(2);
echo "<p>";
for ($i = 0; $i < 5; $i++) echo mt_rand()."  ";
echo "<p>";
mt_srand(2);
for ($i = 0; $i < 5; $i++) echo mt_rand()."  ";

echo "<p>".random_int(-100, 0);
echo "<p>".random_int(0, 100);

echo "<p>".base_convert("10", 11, 2);

echo "<p>".bindec("0100101100100111100");
echo "<p>".decbin("1234567");

mt_srand();
echo "<p>".min(mt_rand(), mt_rand(), mt_rand(), mt_rand(), 
mt_rand());

echo "<p>".(pow(0, -1));
//echo "<p>".var_dump(1/0);
//ошибка! не делит.

echo "<p>".(sqrt(1234098734857));
echo "<p>".(log(1234098734857));
echo "<p>".(exp(123));
echo "<p>".(pow(12, 34));

echo "<p>".(pi());

echo "<p>".(deg2rad(M_PI));
echo "<p>".(rad2deg(2342));
?>
</body>

</html>