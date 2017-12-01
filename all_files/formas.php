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

//function myPOST($po){
//        if (!empty ($_POST ['name']) && ($_POST['me']))
//        { echo "Вы успешно подписались на нас. Спасибо";}
//        elseif (isset ($_POST['name']) || ($_POST['me']) === false) {echo "Подписка не оформлена, проверьте введенные данные и попробуйте еще раз";
//    }
//        else {echo " ";
//        }
//}
    if (isset($_FILES)){
        $art = ($_FILES ['file']['size']<= 2000000);
        move_uploaded_file($art['file']['200'], 'files/' . $_FILES['file']['name']);
    }
   else {echo " Загружаемый файл слишком большого размера! ";}
var_dump($_FILES);



//echo isset ($_POST['name'| 'me']) ? 'Спасибо, Ваша подписка на новости оформленна' :  'Что то пошло не там('

//function myPost (){
//    if (isset($_POST['name'| 'me'])) {
//        echo "Спасибо, Ваша подписка на новости оформленна";
//    }
//    else echo "Что то пошло не там(";
//}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta  charset=utf-8">
    <title>DOCTYPE</title>
</head>
<body>
<p>Вернутся ко всем моим работам <a href="/index.php"; > <input type="button" style="background-color: gold"; value="Вернутся назад"</p></a>

<!--4.Реализовать форму обратной связи с записью данных каждый раз в новы-->
<!--Данные должны сохраняться в файле. *При каждой отправке  в новый файл!* (То как они будут структурированы в файле не важно)-->
<!--Поля:-->
<!--Email: провалидировать email-->
<!--Text: Не более 200 символов-->
<!--Файл: не более 10 МБ-->
<!-- 
enctype="multipart/form-data"

error_reporting(-1); - Зачем он его использует ? -->
<!--Если все успешно выводить сообщение: Спасибо ваша заявка принята.-->

<div id="form" style="text-align: -webkit-center;">
    <div class="content" style="width: 30%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
        <form method="POST" action="post_form.php" enctype="multipart/form-data" >
            <h2>Форма обратной связи</h2>
            <p> Оставьте свой еmail </p>
            <p>
                <input type="text" name="name" placeholder="Ваш еmail" autocomplete="on" class="content" style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
            </p>
            <p>Введите свой текст</p>
            <p>
               <textarea type="text" name="me" placeholder="Ваше сообение" class="content" style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;" > </textarea>
            </p>
            <p>
                <input type="file" name="file">
            </p>
            <p>
                <button type="submit" name="send" value="text" class="content" style="text-align: center;"> Подписатся </button>
<!--            </p>-->
<!--            <p> --><?php //echo myPOST($po);?>
<!--            </p>-->
        </form>
    </div>
</div>

</body>
</html>
