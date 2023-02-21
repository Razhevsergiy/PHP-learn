<!doctype html>
<html lang="ru">
    <head>
        <title>Индекс массы тела</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

use function PHPSTORM_META\type;

        if (isset($_REQUEST['doGo'])) {
            if (type())
            $indexmass = $height/($mass**2);
        }
        ?>
        <form action=<?=$_SERVER['SCRIPT_NAME']?> method="get">
        <input type="text" name="height"></input>
        </form>
    </body>
</html>