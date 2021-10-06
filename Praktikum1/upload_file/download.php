<?php

$myDir="c:/xampp/htdocs/PWD/Praktikum1/upload_file/";
$dir=opendir($myDir);
echo"Isi folder (Klik link untuk download ): <br>";
while ($tmp = readdir($dir)){
    echo"<a href = '$tmp'target='_blank'>$tmp</a><br>";
}
closedir($dir);
