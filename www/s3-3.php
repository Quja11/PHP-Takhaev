<HTML>
<HEAD><TITLE>Задача 3.3</TITLE>
</HEAD>
<BODY>
<p>Вариант 20 (Четный)</p>
<FORM action="<?php print $PHP_SELF?>" method="post">
 Введите число: <INPUT type="text" name="N" size="7">
 Выберите действие:
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1"> Четные делители
 <OPTION VALUE="2"> Нечетные делители
 <OPTION VALUE="3"> Простые делители
 <OPTION VALUE="4"> Составные делители
 <OPTION VALUE="5"> Все делители
 </SELECT>
 <P><INPUT type="submit" name="vip" value="Выполнить">
</FORM>

<?php
if (isset($_POST["vip"])){

switch ($_POST["z"]) {
 case 1:
 $r=$_POST["N"];
 echo ("Список четных делителей: ");
 	for($c=2;$c<=$r;$c+=2){
 		if($r%$c==0) echo ($c . " ");
 };break;

 case 2:
 $x=$_POST["N"];
 echo ("Список нечетных делителей: ");
 	for($q=1;$q<=$x;$q+=2){
 		if($x%$q==0) echo ($q . " ");
 };break;

 case 3:
 $a=$_POST["N"];
 echo ("Список простых делителей: ");
 	for($s=5;$s<=$a;$s+=1){
 		if($a%$s==0 && !($s%2==0 or $s%3==0)) echo (1 . " " . 3 . " " . $s . " ");
 	};break;

 case 4:
 $h=$_POST["N"];
 echo ("Список составных делителей: ");
 	for($w=4;$w<=$h;$w+=1){
 		if($h%$w==0 && ($w%2==0 or $w%3==0)) echo ($w . " ");
 	};break;

 case 5:
 $v=$_POST["N"];
 echo ("Список всех делителей: ");
 	for($e=1;$e<=$v;$e+=1){
 		if($v%$e==0) echo ($e . " ");
 	};break;	

}
}

?>
</BODY> 
</HTML>