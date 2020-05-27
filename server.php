<?php
//print_r($_FILES);
$files = scandir("pictures_big");
//print_r(count($files)-1);

$path = "pictures_big/p".(count($files)-1).".jpg";
if(move_uploaded_file($_FILES['myFile']['tmp_name'],$path)){
    echo "Файл ".$_FILES['myFile']['name']." успешно загружен!";
}
else{
    echo "Ошибка при загрузке файла";
}

