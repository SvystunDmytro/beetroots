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
//
//function myPOST($po)
//{
//    if (!empty ($_POST ['name']) && empty($_POST['me'])) {
//        echo "Вы успешно подписались на нас. Спасибо";
//    }
//    elseif (!empty($_POST['name']) || empty($_POST['me']) == false) {
//        echo "Подписка не оформлена, проверьте введенные данные и попробуйте еще раз";
//    }
//    else {
//        echo " ";
//    }
//}


function qw($q1)
{
            if (!empty ($_POST ['name']) && empty($_POST['me'])) {
            }
            elseif (!empty($_POST['name']) || empty($_POST['me']) == false) {
                echo "Подписка не оформлена, проверьте введенные данные и попробуйте еще раз";
            }
}

function qwe($q2)
{
    if (!empty($_FILES ['file']['size'] <= 10485760)) {
        move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name']);
    }
    elseif (!empty($_FILES ['file']['size'] > 10485760)) {
        echo "Подписка не оформлена, размер файла более 10 Мб";
    }
}
function myPOS($po1){
    if (qw($q1) && qwe($q2) === true ){
        echo "Вы успешно подписались на нас. Спасибо";
    }
}
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
<!-- enctype="multipart/form-data"

error_reporting(-1); - Зачем он его использует ? -->
<!--Если все успешно выводить сообщение: Спасибо ваша заявка принята.-->

<div id="form" style="text-align: -webkit-center;">
    <div class="content"
         style="width: 30%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
        <form method="POST" action="" enctype="multipart/form-data">
            <h2>Форма обратной связи</h2>
            <p> Оставьте свой еmail </p>
            <p>
                <input required type="email" name="name" placeholder="Ваш еmail" autocomplete="on" class="content"
                       style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
            </p>
            <p>Введите свой текст</p>
            <p>
                <textarea required name="me" placeholder="Ваше сообение" class="content" cols="2"
                          style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;"> </textarea>
            </p>
            <p>
                <input required type="file" name="file">
            </p>
            <p></p>
            <p>
                <button type="submit" name="send" value="text" class="content" style="text-align: center;"> Подписатся
                </button>
            </p>
            <p> <?php echo myPOS($po1);?>
            </p>
        </form>
    </div>
</div>

<?php
//
//if (!empty($_FILES ['file']['size'] <= 20000)) {
//    //var_dump($_FILES);die;
//    move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name']);
//} else {
//    echo " Загружаемый файл слишком большого размера! ";
//}
//echo "<pre>";
////var_dump($_FILES);
//echo "</pre>";

?>

</body>
</html>
