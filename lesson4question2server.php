<?php
$filesBig = scandir("pictures_big"); //Читаем каталог big и предполагаем, что файлов в обоих каталогах поровну, поэтому small не читаем.
$bigfileName="pictures_big/p".(count($filesBig)-1).".jpg"; //Формируем имя файла в папку big.
$smallfileName="pictures_small/p".(count($filesBig)-1).".jpg"; //Формируем имя файла в папку small.

//echo $bigfileName;
//echo $smallfileName;
//print_r($_FILES);

if(copy($_FILES['myFile']['tmp_name'],$bigfileName)){ //Копирование в большую папку без изменений
    echo "Файл ".$_FILES['myFile']['name']." успешно загружен в папку pictures_big! <br>";
}
else{
    echo "Ошибка при загрузке файла";
}

if(move_uploaded_file($_FILES['myFile']['tmp_name'],$smallfileName)){ //Копирование в большую папку без изменений
    echo "Файл ".$_FILES['myFile']['name']." успешно загружен в папку pictures_small!<br>";
}
else{
    echo "Ошибка при загрузке файла";
}
include('classes/classSimpleImage.php');//подгружаем библиотеку
$image = new SimpleImage();
$image->load($smallfileName);
$image->resizeToWidth(800);//меняем радмер пропорционально до ширины 800px
$image->save($smallfileName);
echo "Картинка уменьшена";
