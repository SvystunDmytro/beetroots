<?php
/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 28.11.2017
 * Time: 19:09
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta  charset=utf-8">
    <title>DOCTYPE</title>
</head>
<body>

<p>Вернутся ко всем моим работам <input type="button" onclick="history.back();" style="background-color: gold"; value="Вернутся назад"</p>

</body>
</html>
<?php
////1. Задайте константу с вашим любимым месяцем и присвойте ей значение с его названием.
//
//const J = "June";
//
//echo "</br>Здесь выведу свою константу  ". J ;
//
////2. Заполните массив месяцами ['Янаварь','Февраль',.......]
////Выведите нужный месяц из массива используя для проверки контанту.
//
//$month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
//
//    foreach ($month as $v) {
//        if (J == $v) {
            echo "<pre>";
//            echo $v;
//            echo "</pre>";
//        }
//    }

//3. Используя цикл for() заполните массив  100 числами в диапазоне от 0-9
//Используя цикл foreach() запишите ЧЕРЕЗ ОДНО эти числа в файл и затем выведите на экран.

$num =[]; // Определили пустой масив
for ($a=0; $a <= 100; $a++) {
    $num [$a] = mt_rand(0, 9);
}
    echo "<pre>";
    print_r($num);
    echo "</pre>";


?>




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

function myPOST($po)
{
    if (!empty ($_POST ['name']) && empty($_POST['me'])) {
        echo "Вы успешно подписались на нас. Спасибо";
    } elseif (isset ($_POST['name']) || ($_POST['me']) === false) {
        echo "Подписка не оформлена, проверьте введенные данные и попробуйте еще раз";
    } else {
        echo " ";
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
<!--
enctype="multipart/form-data"

error_reporting(-1); - Зачем он его использует ? -->
<!--Если все успешно выводить сообщение: Спасибо ваша заявка принята.-->

<div id="form" style="text-align: -webkit-center;">
    <div class="content"
         style="width: 30%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
        <form method="POST" action="" enctype="multipart/form-data">
            <h2>Форма обратной связи</h2>
            <p> Оставьте свой еmail </p>
            <p>
                <input type="email" name="name" placeholder="Ваш еmail" autocomplete="on" class="content"
                       style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;">
            </p>
            <p>Введите свой текст</p>
            <p>
                <textarea type="text" name="me" placeholder="Ваше сообение" class="content"
                          style="width: 50%; text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 5px;"> </textarea>
            </p>
            <p>
                <input type="file" name="file">
            </p>
            <p></p>
            <p>
                <button type="submit" name="send" value="text" class="content" style="text-align: center;"> Подписатся
                </button>
            </p>
            <p> <?php echo myPOST($po); ?>
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