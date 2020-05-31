<title>Заполнение базы данных</title>
<?php
$files = scandir("pictures_big");
include "lesson5question2config.php";//подключаемся к БД
for($i=2;$i<count($files);$i++):
    $name=$files[$i];
    $path="php/pictures_big";
    $size=filesize('pictures_big/'.$files[$i]);
    $sql="INSERT INTO `pictures` (`name`, `path`, `size`) VALUES ('".$name."','".$path."',".$size.")";//здесь был бой с кавычками
    if (mysqli_query($connect, $sql)){
        echo "файл ".$name." успешно внесён в таблицу \"pictures\" базы данных.<br>";
    };
//    echo $result."<br>";
endfor;

mysqli_close($connect);
?>