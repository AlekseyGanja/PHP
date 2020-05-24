<?php
$title="<TITLE>Homework3question5</TITLE>";
echo $title;

echo "
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
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