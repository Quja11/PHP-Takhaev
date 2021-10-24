<p>Greatest Number: </p>
<p>

<?php
$x=rand(1,10);
$y=rand(1,10);
	print ('$x = ' . $x . "<br>");
	print ('$y = ' . $y . "<br>");

if ($x>$y){
	echo ("Greatest = " . $x);
}
elseif ($x<$y) {
	echo ("Greatest =" . $y);
}else{
	print("There is no greatest");
}





?>
