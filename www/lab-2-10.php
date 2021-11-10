<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<p>Takhaev Arseniy PI-321</p>

<table border="1">

<?php

for ($i=0; $i<=9; $i++){
	echo ("<tr>");
	





for ($k=1; $k<=10; $k++){
	echo ("<td align=center>");
	$z=($i*10)+$k;

	if($z%2==0){ 
		echo ('<p style="color:red">' . $z  . '</p>');
	}else{
		echo ($z);
	}
	



	echo ("</td>");
}	



	echo ("</tr>");
}




?>




</table>
</body>






</html>