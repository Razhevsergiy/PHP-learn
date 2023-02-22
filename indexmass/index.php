<!doctype html>
<html lang="ru">
    <head>
        <title>Индекс массы тела</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        if (isset($_REQUEST['doGo'])) {
            //$indexmass = ;
            echo "<p>Ваш индекс массы тела равен ".
            $height/($mass**2)." .";
        }
        ?>
        <form action=<?=$_SERVER['SCRIPT_NAME']?> method="post">
        <label for="height">Введите рост в сантиметрах:
            <input type="text" name="height" value="1" id="height">
        </input></label>
        <label for="mass">Введите вес в килограммах:
            <input type="text" name="mass" value="1" id="mass">
        </input></label>
        <input type="submit" value="Рассчитать" name="doGo">
        </form>
    </body>
</html>