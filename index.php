<?php

$fileName = 'sam.txt';
$fileData = 'New text';
$rig = 'w';

if (fileGetContents($fileName, $fileData, $rig))
{
    echo "File complete";
} else {
    echo "Not found file";
}

/**
 * Put data to some file with assecc rigts
 * @param string $fileName
 * @param string $fileData
 * @param string (Optional) $rig
 * @return bool
 */
function fileGetContents($fileName, $fileData, $rig = NULL)
{
    $fp = fopen("file.txt", "w");
    fwrite($fp, $fileData);
    fclose($fp);

    return true;
}


?>