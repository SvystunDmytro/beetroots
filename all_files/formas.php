<?php
/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 30.11.2017
 * Time: 12:52
 *  Вопросы.... function myPOST($po)
 * Правильно ли я обратился к функции? можно ли это сделать как то по другому?
 * Когда обращаешься к функции, нужно указывать имя функции и переменную внутри нее? обезательно ли переменная?
 * Как сделать так чтобы не выводилось сначало отрицание в функции, а было пусто, и реагировало на пустоту?
 *
 *
 *
 */
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

function validationForm($data)
{
    $error = [];

    if (empty($data['email'])) {
        $emailFilter = filter_var($data, FILTER_VALIDATE_EMAIL);
        $error['email'] = 'Заполните поле Email';
    }

    if (empty($data['text'])) {
        $error['text'] = 'Заполните поле TEXT';
    }

    if (!empty($_FILES ['file']['size'] <= 10485760)) {
        move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name']);
    } else {
        $error['file'] = 'Размер файла более 10 Мб';
    }

    //Если ошибка то возвращаем массив и выходим из функции через return
    if ($error) {
        return [
            'success' => false,
            'error' => $error
        ];
    }

        return [
            'success' => true,
            'message' => 'Вы успешно подписались на нас. Спасибо'
        ];
    }
    $form =  $_POST;
    if ($form['send']) {
        $namefile = md5(uniqid());
        file_put_contents($namefile, $_POST);
    }
//Это не работает форма.
//function newFile($newf){
//    $newf = $namefile."."."txt";
//    $namefile = random_int(0, 10000);
//    file_put_contents($newf, $_POST);
//}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset=utf-8">
    <title>DOCTYPE</title>
</head>
<body>
<p>Вернутся ко всем моим работам <a href="/index.php" ;> <input type="button" style="background-color: gold" ; value="Вернутся назад"</p></a>

<!--4.Реализовать форму обратной связи с записью данных каждый раз в новы-->
<!--Данные должны сохраняться в файле. *При каждой отправке  в новый файл!* (То как они будут структурированы в файле не важно)-->
<!--Поля:-->
<!--Email: провалидировать email-->
<!--Text: Не более 200 символов-->
<!--Файл: не более 10 МБ-->

<div id="form" style="text-align: -webkit-center;">
    <div class="content"
         style="width: 30%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
        <form method="POST" action="" enctype="multipart/form-data">
            <h2>Форма обратной связи</h2>
            <p> Оставьте свой еmail </p>
            <p>
                <input  type="email" name="email" placeholder="Ваш еmail" autocomplete="on" class="content"
                       style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
            </p>
            <p>Введите свой текст</p>
            <p>
                <textarea name="text" maxlength="200" placeholder="Ваше сообение" class="content"  style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;"> </textarea>
            </p>
            <p>
                <input type="file" name="file">
            </p>
            <p></p>
            <p>
                <button type="submit" name="send" value="text" class="content" style="text-align: center;"> Подписатся
                </button>
            </p>
            <p>
                <?php
                $formData = $_POST;
                if ($formData['send']){
                $response = validationForm($formData);

                if ($response['success']) {
                    echo $response['message'];
                } else {
                foreach ($response['error'] as $value) { ?>
            <p style="color:red"><?= $value ?><p>
                <?
                }
                echo '<b style="color:red">Подписка не оформлена.';
                }
                }
                ?>
            </p>
        </form>
    </div>
</div>


</body>
</html>
