<!DOCTYPE html>
<html>
<head>
    <title>Передача JSON данных</title>
    <meta charset="utf-8">
    <script 
    src = "//code.jquery.com/rquery-1.11.3.min.js">
    </script>
    <script src = "/json_index.js"></script>
</head>
<body>
    <p id = 'js-hello'>Здравствуйте!</p>
    <form action="/json_answer.php" method="GET">
    <p>Имя: <input type="text" name="name"
    value="" /></p>
    <p>Фамилия: <input type="text" name="family"
    value=""></p>
    <p><input type="submit" value="Представиться"></p>
    </form>
</body>
</html>

<!--форма. Ссылки на скрипты. -->