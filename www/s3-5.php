<HTML>
<HEAD><TITLE>Задача 3.5</TITLE>
</HEAD>
<BODY>
<H1>Анкета "Ваш характер"</H1>

<FORM action="<?php print $PHP_SELF?>" method="post">
 Введите ваше имя: <INPUT type="text" name="N" size="20">
<P>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</P><br>
<INPUT type="radio" name="a" value="да" CHECKED>Да
<INPUT type="radio" name="a" value="нет">Нет

<P>2. Раздражают ли Вас мелкие повседневные обязанности?</P><br>
<INPUT type="radio" name="b" value="да" CHECKED>Да
<INPUT type="radio" name="b" value="нет">Нет

<P>3. Верите ли Вы, что ваши друзья преданы Вам?</P><br>
<INPUT type="radio" name="c" value="да" CHECKED>Да
<INPUT type="radio" name="c" value="нет">Нет

<P>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</P><br>
<INPUT type="radio" name="d" value="да" CHECKED>Да
<INPUT type="radio" name="d" value="нет">Нет

<P>5. Способны ли Вы ударить собаку или кошку?</P><br>
<INPUT type="radio" name="f" value="да" CHECKED>Да
<INPUT type="radio" name="f" value="нет">Нет

<P>6. Часто ли Вы принимаете лекарства?</P><br>
<INPUT type="radio" name="q" value="да" CHECKED>Да
<INPUT type="radio" name="q" value="нет">Нет

<P>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</P><br>
<INPUT type="radio" name="w" value="да" CHECKED>Да
<INPUT type="radio" name="w" value="нет">Нет

<P>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</P><br>
<INPUT type="radio" name="e" value="да" CHECKED>Да
<INPUT type="radio" name="e" value="нет">Нет

<P>9. Тяготят ли Вас общественные обязанности?</P><br>
<INPUT type="radio" name="r" value="да" CHECKED>Да
<INPUT type="radio" name="r" value="нет">Нет

<P>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</P><br>
<INPUT type="radio" name="s" value="да" CHECKED>Да
<INPUT type="radio" name="s" value="нет">Нет

<P>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</P><br>
<INPUT type="radio" name="g" value="да" CHECKED>Да
<INPUT type="radio" name="g" value="нет">Нет

<P>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</P><br>
<INPUT type="radio" name="h" value="да" CHECKED>Да
<INPUT type="radio" name="h" value="нет">Нет

<P>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</P><br>
<INPUT type="radio" name="u" value="да" CHECKED>Да
<INPUT type="radio" name="u" value="нет">Нет

<P>14. Нравится ли Вам семейная жизнь?</P><br>
<INPUT type="radio" name="y" value="да" CHECKED>Да
<INPUT type="radio" name="y" value="нет">Нет

<P>15. Злопамятны ли Вы?</P><br>
<INPUT type="radio" name="v" value="да" CHECKED>Да
<INPUT type="radio" name="v" value="нет">Нет

<P>16. Находите ли Вы, что стоит погода, типичная для данного времени года?</P><br>
<INPUT type="radio" name="m" value="да" CHECKED>Да
<INPUT type="radio" name="m" value="нет">Нет

<P>17. Случается ли Вам с утра быть в плохом настроении?</P><br>
<INPUT type="radio" name="k" value="да" CHECKED>Да
<INPUT type="radio" name="k" value="нет">Нет

<P>18. Раздражает ли Вас современная живопись?</P><br>
<INPUT type="radio" name="j" value="да" CHECKED>Да
<INPUT type="radio" name="j" value="нет">Нет

<P>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</P><br>
<INPUT type="radio" name="i" value="да" CHECKED>Да
<INPUT type="radio" name="i" value="нет">Нет

<P>20. Надоедает ли Вам делать лабораторные по PHP?</P><br>
<INPUT type="radio" name="o" value="да" CHECKED>Да
<INPUT type="radio" name="o" value="нет">Нет
 
 

<P><INPUT type="submit" name="vip" value="Узнать результаты">
</FORM>


<?php
if (isset($_POST["vip"])){

$arr = array(
    0=>$_POST["a"],
    1=>$_POST["b"],
    2=>$_POST["c"],
    3=>$_POST["d"],
    4=>$_POST["f"],
    5=>$_POST["q"],
    6=>$_POST["w"],
    7=>$_POST["e"],
    8=>$_POST["r"],
    9=>$_POST["s"],
    10=>$_POST["g"],
    11=>$_POST["h"],
    12=>$_POST["u"],
    13=>$_POST["y"],
    14=>$_POST["v"],
    15=>$_POST["m"],
    16=>$_POST["k"],
    17=>$_POST["j"],
    18=>$_POST["i"],
    19=>$_POST["o"],
);

$sum1=0;
$sum2=0;
$k=0;
$m=0;
while($k<20){
	if($arr[2]=="да" or $arr[8]=="да" or $arr[9]=="да" or $arr[12]=="да" or $arr[13]=="да" or $arr[18]=="да") $sum1++;
	$k++;
}

while($m<20){
	if($arr[0]=="нет" or $arr[1]=="нет" or $arr[3]=="нет" or $arr[4]=="нет" or $arr[5]=="нет" or $arr[6]=="нет" or $arr[7]=="нет" or $arr[10]=="нет" or $arr[11]=="нет" or $arr[14]=="нет" or $arr[15]=="нет" or $arr[16]=="нет" or $arr[17]=="нет" or $arr[19]=="нет") $sum2++;
	$m++;
}
$sum3=$sum1+$sum2;

if($sum3>15) echo ($_POST["N"] . " У вас покладистый характер");
if($sum3>=8 && $sum3<=15) echo ($_POST["N"] . " Вы не лишены недостатков, но с вами можно ладить");
if($sum3<8) echo ($_POST["N"] . " Вашим друзьям можно посочувствовать");


}
?>
</BODY> 
</HTML>