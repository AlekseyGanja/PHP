<title>Галерея миниатюр</title>
<?php
include "lesson5question1form.html"; //включаем форму

$files = scandir("pictures_small");

for($i=2;$i<count($files);$i++):?> <!--  Перебираем все файлы в папке миниатюр "pictures_small"-->
    <a href="lesson5question1pic.php?pic=<?=$i-1?>" target="_blank"><img width=30% src="pictures_small/p<?=($i-1)?>.jpg"></a> <!-- Выводим маленькие картинки в виде ссылок-->
<?php
endfor;

?>