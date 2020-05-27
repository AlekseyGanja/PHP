<title>Галерея</title>
<?php

$files = scandir("pictures_big");

for($i=2;$i<count($files);$i++):?> <!--  Перебираем все файлы в папке "pictures_big"-->
    <a href="lesson4question1pic.php?pic=<?=$i-1?>" target="_blank"><img width=30% src="pictures_big/<?= $files[$i]?>"></a> <!-- Выводим картинки в виде ссылок-->
<?php
endfor;

include "form.html"; //включаем форму
?>