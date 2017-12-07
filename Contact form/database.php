<?php
/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 08.12.2017
 * Time: 0:52
 */

$conection = mysqli_connect("localhost", "root" /*login*/, ""/*password*/, "computer_firm"/*name DB*/);
$db = mysqli_set_charset($conection, "utf8");

 if (!$conection || !$db ){
     exit(mysqli_error());

 }

$result = mysqli_query("SELECT * FROM `con_form` ");

mysqli_close();

$row = mysql_fetch_array($result);

while ($row = mysql_fetch_array($result)) {
    echo $row."</br>";
}

?>

<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset=utf-8">
    <title>DOCTYPE</title>
</head>
<body>
<p>Вернутся ко всем моим работам <a href="/Contact%20form/con_form.php" ;> <input type="button" style="padding: 5px; background-color: rgba(255, 69, 0, 0.75)" ; value="Вернутся назад"</p></a>



</body>
</html>
