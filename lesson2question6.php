<?php
$title="<TITLE>Homework2question6</TITLE>";
echo $title;
$val = rand(1,10);
$pow = rand(1,5);
echo"\$val=$val  \$pow=$pow";
?>
<br><br>
при помощи рекурсии степень =
<?php
function power($val, $pow, $a, $b){
	if ($a<$pow){//Пока счётчик не сравняется с заданной степенью
		$a++;
		$b=$b*$val; //умножаем накопитель на значение возводимого числа
		if ($a==$pow){//Искомая степень достигнута
			echo $b;
		}
		power($val, $pow, $a, $b);//Рекурсия - (вызываем саму себя)
	}else{
	return $b;
	};
};
power($val, $pow, 0, 1);
?>