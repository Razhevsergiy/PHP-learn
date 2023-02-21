<!doctype html>
<html lang = "ru">
    <head>
        <title>Усовершенствованный скрипт
             блокировки сервера
        </title>
        <meta charset = 'utf-8'>
    </head>
    <body>
        <?php if (!isset ($_REQUEST['doGo'])) {?>
            <form action="<?=$_SERVER['SCRIPT_NAME']
            ?>" method = "get">
            Логин: <input type = "text" 
            name = "login" value = ""> <br />
            Пароль: <input type = "password"
            name = "password" value = ""><br />
            <select name="Sel[]" multiple>
                <option >First</option>
                <option >Second</option>
                <option >Third</option>
            </select>
            
            <section>
                
                <input type="checkbox" name = "Arr[]"
                value="Checkbox 1">
                <input type="checkbox" name = "Arr[]"
                value="Checkbox 2">
                <input type="checkbox" name = "Arr[]"
                value="Checkbox 3">
                
                <input type="text" name = "Arr[]"
                value="Some text">
                <textarea name="Arr[]"
                id="" cols="30" rows="10">
                Какой-то текст
            </textarea>
            
        </section>

        <section>
            Имя: <input type="text" 
            name = "Data[name]"><br />
            Адрес: <input type="text" 
            name = "Data[address]"><br />
            Город: <br />

            <input type="radio" name = "Data[city]"
            value="Moscow">Москва<br />
            <input type="radio" name = "Data[city]"
            value="Peter">Санкт-Петербург<br />
            <input type="radio" name = "Data[city]"
            value="Kiev">Киев<br />
           



        </section>

        <input type = "submit" name = "doGo"
        value="Нажмите на кнопку!">
        
        
    </form>
    <?php } else {
        if ($_REQUEST['login'] == "qwer" &&
            $_REQUEST['password'] == "serg") {
                echo "Доступ открыт
                 для пользователя 
                 $_REQUEST[login]";
            } else {
                echo "Доступ закрыт!";
            }
        } ?>
        <p>Ваш IP адрес <?= $_SERVER["REMOTE_ADDR"]?>
        </p>
        <p>Ваш браузер <?= $_SERVER['HTTP_USER_AGENT']?>
        </p>


        <?php ##Демонстрация работы с массивом $_COOKIES
        $count = 0;
        if (isset($_COOKIE['count']))
        $count = $_COOKIE['count'];
        $count += 1;

        setcookie("count", $count, 0x7fffffff, "/");
        echo "<p> $count";
        ?>

        <p>Обработка списков Select</p>

        <?php
        echo "<p>";
        echo $_REQUEST['Sel'][0];
        echo "<p>";
        echo $_REQUEST['Sel'][2];
        ?>

        <?php
        echo "<p>";
        echo $_REQUEST['Arr'][0];
        echo "<p>";
        echo $_REQUEST['Arr'][1];
        echo "<p>";
        echo $_REQUEST['Arr'][2];
        echo "<p>";
        echo $_REQUEST['Arr'][3];
        echo "<p>";
        echo $_REQUEST['Arr'][4];
        ?>

        <?php
        echo "<p>";
        echo $_REQUEST['Data']['name'];
        echo "<p>";
        echo $_REQUEST['Data']['address'];
        echo "<p>";
        echo $_REQUEST['Data']['city'];
        ?>

        <pre>
        <?php
        print_r($GLOBALS);
        ?>
        </pre>



            
    </body>

</html>