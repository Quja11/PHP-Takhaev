<?
if ($_POST["d"]=="plus"){
	$c=$_POST["a"]+$_POST["b"];
 	echo ("Сумма чисел = $c");
}else{
 	$c=$_POST["a"]*$_POST["b"];
 	echo ("Произведение чисел = $c");
}
	echo ("<BR> <A href='f3.html'>Вернуться назад</A>");
?> 