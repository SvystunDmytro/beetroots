<?php

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta  charset=utf-8">
    <title>DOCTYPE</title>
    <style>
        #but {
            float: left;
            margin-right: 25px;
            padding: 5px;
        }
    </style>
</head>
<body>
<div id="form" style="text-align: -webkit-center;">
    <div class="content" style="width: 70%; text-align: left; border: 1px solid black; padding: 20px; margin-bottom: 5px; #but: right">
            <h1 style="text-align: center">Список моих работ</h1>
            <p> Ниже буду делать список своих работ по програмированию PHP и сортировать их в каждый новый файл) </p>
        <form action="all_files/form_reges.php/">
            <p>Задание #1 сделать форму Регистрации на сайте <button type="submit" id="but" name="send" value="text" style="background-color: gold"; > Посмотреть форму </button></p>
        </form>
        </form>
        <form action="all_files/contakt_form_file_at_doc.php/">
            <p> Новая форма Контактная. Данные сохраняются в новый документ в папке.  <button type="submit" id="but" name="send" value="text" style="background-color: gold"; > Посмотреть форму  </button></p>
        </form>
        <form action="all_files/table_mySQL.php/">
            <p> D.B. Подключится к Б Д   <button type="submit" id="but" name="send" value="text" style="background-color: gold"; > Подключится  </button></p>
        </form>
        <form action="Contact%20form/con_form.php/">
            <p> Работа с DB. Форма отправляет данные на сервер, и по нажатию кнопки выводит на экран все данные БД   <button type="submit" id="but" name="send" value="text" style="background-color: rgba(255, 69, 0, 0.75)" ; > Подключится  </button></p>
        </form>

    </div>
</div>

</body>
</html>
