<?php 

echo "Task 2.6 <br>Problem conditions: given a matrix A (m, n). Find a vector В (n), each element of which is equal to the sum of the elements corresponding column of matrix A. Original and corrected arrays display";

$arr=array();
$arr1=array();
$n=rand(1,10);
for ($i = 0; $i < $n; $i++) {
for ($j = 0; $j < $n; $j++) {
$arr[$i][$j] = rand(1,10); 
}
}
echo" Displaying an array in the form of a tab:";
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

echo"Array processing according to option 4: "
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