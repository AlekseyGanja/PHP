<?php
$title="<TITLE>Homework2question4</TITLE>";
echo $title;
$arg1 = rand(0,15);
$arg2 = rand(1,15);
$mOperation = ["+","-","/","*"];
$operation = $mOperation[rand(0,3)];
echo"\$arg1=$arg1";
?>
<br>
<?="\$arg2=$arg2";?>
<br>
<?="\$operation=\"$operation\"";?>
<br><br>

<?php
function funcSum($a,$b){
	//echo"+++++++++";
	return $a+$b;
};
function funcDifference($a,$b){
	return $a-$b;
};
function funcMultiplications($a,$b){
	return $a*$b;
};
function funcDivision($a,$b){
	If ($b!=0){
		return $a/$b;
	}else {echo "делить на ноль нежелательно меняем делитель на 1";
		return $a;
		}
};
function mathOperation($arg1, $arg2, $operation){
	switch ($operation){
		case "+":
			echo "Сумма ";
			echo funcSum($arg1,$arg2);
			break;
		case "-":
			echo "Разность ";
			echo funcDifference($arg1,$arg2);
			break;
		case "*":
			echo "Произведение ";
			echo funcMultiplications($arg1,$arg2);
			break;
		case "/":
			echo "Деление ";
			echo funcDivision($arg1,$arg2);
			break;
	}
};
mathOperation($arg1, $arg2, $operation);
?>
