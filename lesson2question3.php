<?php
$title="<TITLE>Homework2question3</TITLE>";
echo $title;
$a=rand(0,15);
$b=rand(0,15);
echo"\$a=$a \$b=$b";
?>
<br><br>
сумма
<br>
<?php
function funcSum($a,$b){
	return $a+$b;
};
echo funcSum($a,$b);
?>
<br><br>
разность
<br>
<?php
function funcDifference($a,$b){
	return $a-$b;
};
echo funcDifference($a,$b);
?>
<br><br>
произведение
<br>
<?php
function funcMultiplications($a,$b){
	return $a*$b;
};
echo funcMultiplications($a,$b);
?>
<br><br>
деление
<br>
<?php
function funcDivision($a,$b){
	return $a/$b;
};
echo funcDivision($a,$b);
?>