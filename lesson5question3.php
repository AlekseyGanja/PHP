<title>Галерея миниатюр</title>
<?php
include "lesson5question3config.php";//подключаемся к БД
$sql = "select * from `pictures` where 1";//Шаблон запроса на выбоку всех элементов таблицы из бд
$res=mysqli_query($connect,$sql);//Запрос на выборку
$cat = mysqli_fetch_all($res,MYSQLI_ASSOC); //формируем ассоциативный массив
//print_r(count($cat));

for($i=0; $i < count($cat); $i++): //перебираем строки массива
    $id=$cat[$i]['id'];
    $fileName=$cat[$i]['name'];
    //echo $id." ".$fileName." ".$views."<br>";
    ?>
    <!--    Выводим маленькие картинки в виде ссылок-->
    <a href="lesson5question3pic.php?id=<?=$id?>" target="_blank"><img width=30% src="pictures_small/<?=$fileName?>"></a>
<?php
endfor;




mysqli_close($connect); //закрываем базу
?>