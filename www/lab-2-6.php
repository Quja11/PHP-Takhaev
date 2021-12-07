<?php 

echo "Task 2.6 <br>Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов
соответствующего столбца матрицы А. Исходный и скорректированный массивы
вывести на экран.";

$arr=array();
$arr1=array();
$n=rand(1,10);
for ($i = 0; $i < $n; $i++) {
for ($j = 0; $j < $n; $j++) {
$arr[$i][$j] = rand(1,10); 
}
}
echo" Вывод массива в форме таблицы:";
?>

<HTML>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=$n; $i++) { 
echo ("<tr>"); 
for ($k=1; $k<=$n; $k++) { 
echo ("<td align=center>"); 

echo ($arr[$i-1][$k-1]); 
echo ("</td>"); 
}
echo ("</tr>"); 
}
?>
</TABLE>
</BODY>
</HTML>


<?php

echo"Скорректированный массив: "
?>
<HTML>
<BODY>
<TABLE border=1>
<?php

for ($k=1; $k<=$n; $k++) {
for ($i=1; $i<=$n; $i++){
$arr1[$k-1]=$arr1[$k-1]+$arr[$i-1][$k-1];
}

}
for ($i=1; $i<=$n; $i=$i+$n) { 
echo ("<tr>"); 
for ($k=1; $k<=$n; $k++) { 
echo ("<td align=center>"); 
echo ($arr1[$k-1]); 
echo ("</td>"); 
}
echo ("</tr>"); 
}
?>
</TABLE>
</BODY>
</HTML>