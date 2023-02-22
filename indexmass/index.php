<!doctype html>
<html lang="ru">
    <head>
        <title>Индекс массы тела</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        require_once"/home/serg/PHP/dumper.php";
        
        if ((isset($_REQUEST['doGo']))) {
            
            $indexmass = $_REQUEST["var"]["mass"]/
            (($_REQUEST["var"]["height"]/100)**2);
            echo "<p>Ваш индекс массы тела равен: ".$indexmass
            ." .";
        }

        
        //dumper($GLOBALS);
        ?>
        <form action=<?=$_SERVER['SCRIPT_NAME']?> method="post">
        <label for="height">Введите рост в сантиметрах:
            <input type="text" name="var[height]" value="1" id="height">
        </input></label>
        <label for="mass">Введите вес в килограммах:
            <input type="text" name="var[mass]" value="1" id="mass">
        </input></label>
        <input type="submit" value="Рассчитать" name="doGo">
        </form>
    </body>
</html>