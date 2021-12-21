<HTML>
<HEAD><TITLE>Задача 3.2</TITLE>
</HEAD>
<BODY>

<FORM action="<?php print $PHP_SELF?>" method="post">
 1 число:<INPUT type="text" name="a" size="5">
 2 число:<INPUT type="text" name="b" size="5"><br><br>
 Выберите действие:
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1"> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
 <OPTION VALUE="4"> разделить
 </SELECT>
 <P><INPUT type="submit" name="vip" value="Выполнить">
</FORM>

<?php
if (isset($_POST["vip"])){
$c=$_POST["a"]+$_POST["b"];	
$w=$_POST["a"]-$_POST["b"];
$x=$_POST["a"]*$_POST["b"];	
$y=$_POST["a"]/$_POST["b"];

echo ("Результат:" . "<br>");

switch ($_POST["z"]) {
 case 1:echo $c;break;
 case 2:echo $w;break;
 case 3:echo $x;break;
 case 4:echo $y;break;
}

}
?>

</BODY> 
</HTML>