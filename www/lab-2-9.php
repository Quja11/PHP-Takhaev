<!DOCTYPE html>
<html>
<head>
	<title>MULTIPLICATION TABLE</title>
</head>
<body bgcolor="green">
<table border="1">
	<?php
for ($i=1; $i<=10; $i++){
	echo ("<tr>");
for ($k=1; $k<=10; $k++){
	echo ("<td align=center>");
	$p=$i*$k;
	echo ($p);
	echo ("</td>");
}	
	echo ("</tr>");
}


	?>




</table>
</body>
</html>