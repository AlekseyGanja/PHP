<?php
$title="<TITLE>Homework3question6</TITLE>";
echo $title;

echo "
6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. <br>
Необходимо представить пункты меню как элементы массива и вывести их циклом. <br>
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
<hr><br>";

function Replace($str){
    $aWords = explode(' ', $str);
return implode('_', $aWords);
};

$string="Приветствую Вас дорогие друзья!";
echo $string."<br>";
$string = Replace($string);
echo $string;

?>