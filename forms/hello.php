<!doctype html>
<html lang = "ru">
    <head>
        <title>Использование данных формы</title>
        <meta charset = 'utf-8'>
    </head>

    <body>
        <?php
        if ($_REQUEST['login'] == "root" &&
        $_REQUEST['password'] == "Z10N0101")
        {
            echo "Доступ открыт для пользователя
            {$_REQUEST['login']}";
        } else {
            echo "Доступ закрыт!";
        }
        ?>
    </body>

</html>