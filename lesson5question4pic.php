<title>Полноразмерная картинка и просмотры</title>
<?php
$id = $_GET['id'];

include "lesson5question3config.php";//подключаемся к БД
$sql = "select * from `pictures` where id=$id";//Шаблон запроса на выбоку нужной строки из таблицы из бд
$res=mysqli_query($connect,$sql);//Запрос на выборку
$cat = mysqli_fetch_all($res,MYSQLI_ASSOC); //формируем ассоциативный массив
$pathNameFile=$cat[0]["path"]."/".$cat[0]['name'];
$views = $cat[0]["views"]+1;
//print_r($cat[0]["views"]);
//print_r($views);
$sql = "update `pictures` set views = $views where id=$id";
$res=mysqli_query($connect,$sql);//Запрос на обновление
//echo $pathNameFile;
?>
<div>
    <!--    Полноразмерное фото-->
    <img width=100% src="<?=$pathNameFile?>">
    <!--    Просмотры фотографии-->
    <h2 align=center>Просмотров картинки: <?=$views?></h2>
</div>
<?php
mysqli_close($connect); //закрываем базу
?>

