<?php
$title="<TITLE>Homework3question1</TITLE>";
echo $title;
echo "С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка<hr><br>";
while ($i<101){
 if ($i % 3 == 0){
     echo $i." "; }
 $i++;
};

?>