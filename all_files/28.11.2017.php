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
//1. Задайте константу с вашим любимым месяцем и присвойте ей значение с его названием.

define('j', 'June');

echo "</br>Здесь выведу свою константу  ".june;

//2. Заполните массив месяцами ['Янаварь','Февраль',.......]
//Выведите нужный месяц из массива используя для проверки контанту.

$month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

foreach ($month as $v) {

    if (j == $v){
        echo "<pre>";
        echo $v;
        echo "</pre>";

    }
    
}

//3. Используя цикл for() заполните массив  100 числами в диапазоне от 0-9
//Используя цикл foreach() запишите ЧЕРЕЗ ОДНО эти числа в файл и затем выведите на экран.

$s =[0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

for ($a=$s; $a <= 100; $a++){
    $a=$s[$value]
    echo "<pre>";
    echo $a;
    echo "</pre>";

}
?>
