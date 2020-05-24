<?php
$title="<TITLE>Homework3question8</TITLE>";
echo $title;

echo "
8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

<hr><br>";

$country = [
    "Московская область" =>["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" =>["Санкт-Петербург", "Всеволожск", "Кронштадт"],
    "Тверская область" =>["Тверь", "Калязин", "Кашин"]
];
/*foreach ($country as $obl => $siti){
    $string .= "$obl: <br>";
}*/

foreach ($country as $obl => $sitis){
    $string .= "$obl: <br>";
    foreach ($sitis as $key => $siti){
        if(substr_count($siti, 'К' , 0, 2)) {
            if ($key != count($sitis) - 1) {
                $string .= $siti.", ";
            } else {
                $string .= $siti."<br><br>";
            };
        };
        //$string .= "<br>";
    }
}
echo $string;

?>