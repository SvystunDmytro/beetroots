<?php
/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 03.12.2017
 * Time: 12:39
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta  charset=utf-8"> <title>DOCTYPE</title>
</head>
<body>
<p>Вернутся ко всем моим работам <input type="button" onclick="history.back();" style="background-color: gold"; value="Вернутся назад"</p>
</body>
</html>
<?php

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'Test');

   $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        exit('Ошибка соединения с БД');
    } else {
       echo "<pre>";
        echo 'Conection OK ! ';
       echo "</pre>";
    }
    $mysqli->set_charset('utf8');

   $mysqli->close();





















?>