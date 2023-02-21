<!doctype html>
<html>
    <head>
        <title>Гарантированный приём значений
            от флажков.
        </title>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['doGo'])) {
            foreach ($_REQUEST['known'] as
            $k => $v) {
                if($v) echo "Вы знаете язык $k!<br />";
                else echo
                "Вы не знаете языка $k.<br />";
            }
        }
        ?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>"
    method = "get">
        <!-- <input type="hidden" name="known[PHP]" 
        value="0"> -->
        <input type = "checkbox" name = "known[PHP]"
        value="1">PHP</input>
        
        <!-- <input type="hidden" name="known[Perl]" 
        value="0"> -->
        <input type = "checkbox" name = "known[Perl]"
        value="1">Perl</input>

        <br>

        <input type="submit" name = "doGo" 
        value = "Go!">
        <br>

        <?php

        if (isset($_REQUEST['doGo'])) {

        echo "<p>$_REQUEST[known][PHP]";
        echo "<p>$_REQUEST[known][Perl]";
        };
        ?>

        <pre>
        <?php
        print_r($GLOBALS);
        ?>
        </pre>

    </form>
        
    </body>
</html>