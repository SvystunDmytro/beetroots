<?php

$myc = array(-25, 20, 6, -15, 10, -35, 47, 20, 10);

    echo "Всего значений в Масиве = ".(count ($myc))."</br>";
//Задача 1: Реализуйте функцию подсчета количества элементов в массиве.



    echo "Значения положительные и кратные 5:</br>";
    echo arrayCount($myc);

//Задача 2: Реализуйте функцию вывода положительных значений массива кратных «5».
// Не могу вывести числа кратные 5. Просто не понимаю как.

function arrayCount($myc)
{
    foreach ($myc as $value) {
        If ($value >= 0) {
            echo "$value</br>";
        }
    }
    return true;
}

// Задача 3: Инициализируйте массив с целочисленными значениями.
// Реализуйте функцию записи положительных и отрицательных значений в разные файлы использую оператор *switch*
// Проблемма: В папку позитивных значений проходит только позитивные, а вот в папку негативных все подряд, даже если указывать условия.


function swith1($myc){
    foreach ($myc as $value) {
        switch ($value) {
            case ($value > 0):
                file_put_contents('vse+.txt', $value, FILE_APPEND | LOCK_EX);
            case ($value < 0):
                file_put_contents('vse---.txt', $value, FILE_APPEND | LOCK_EX);
        }
    }
}
echo swith1($myc);




//$fileName = 'sam.txt';
//$fileData = 'New text';
//$rig = 'w';
//
//function fileGetContents($fileName, $fileData, $rig = NULL)
//{
//    $fp = fopen("file.txt", "w");
//    fwrite($fp, $fileData);
//    fclose($fp);
//
//    return true;
//}





//    echo "Всего значений в Масиве = " . (count($myc)) . "</br>";
//    echo "Сумма всех значений в Масиве = " . (array_sum($myc));
//    echo "</pre>";


//echo "<pre>";
//echo(my($myc));
//echo "</pre>";



//$fileName = 'sam.txt';
//$fileData = 'New text';
//$rig = 'w';
//
//if (fileGetContents($fileName, $fileData, $rig))
//{
//    echo "File complete";
//} else {
//    echo "Not found file";
//}

//function fileGetContents($fileName, $fileData, $rig = NULL)
//{
//    $fp = fopen("file.txt", "w");
//    fwrite($fp, $fileData);
//    fclose($fp);
//
//    return true;
//}


?>