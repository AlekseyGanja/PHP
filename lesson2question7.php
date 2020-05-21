<?php
$title="<TITLE>Homework2question7</TITLE>";
echo $title;
?>
<p>Текущее время</p1>
<?php
$timeHours=date("G");
//$timeHours=21; //Проверка работы
$timeMinutes=date("i");
//$timeMinutes=22; //Проверка работы
$strHours="часов";
$strMinutes="минут";
if($timeHours%10==0 || $timeHours%10 > 4){//Если посленняя цифра текущего часа "0,5,6,7,8,9"
	$strHours="часов";
	}elseif($timeHours%10==1){ //Если посленняя цифра текущего часа "1"
		$strHours="час";	
		}else{ //Оставшийся вариант, если посленняя цифра текущего часа "2,3,4"
			$strHours="часа"; 
			};
if($timeMinutes%10==0 || $timeMinutes%10 > 4){
	$strMinutes="минут";
	}elseif($timeMinutes%10==1){
		$strMinutes="минута";	
		}else{
			$strMinutes="минуты";
			};
echo date("G:i") ;//просто цифры через двоеточие
?>
<br>
<?php
echo $timeHours." ".$strHours." ".$timeMinutes." ".$strMinutes.".";//Итоговая строка
?>