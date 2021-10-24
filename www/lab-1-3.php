<head>Takhaev Arseniy PI-321</head>
<p>Const NUM_E</p>
<?php
define(NUM_E, 2.71828);
	echo ('Number e equals is ' . NUM_E . '<br>');
$num_e1 = NUM_E;
	echo ('$num_e1 = ' . "$num_e1" . ' - ' . gettype($num_e1) . '<br>');

settype($num_e1, string);
	echo ('$num_e1 = ' . "$num_e1" . ' - ' . gettype($num_e1) . '<br>');

settype($num_e1, int);
	echo ('$num_e1 = ' . "$num_e1" . ' - ' . gettype($num_e1) . '<br>');

settype($num_e1, bool);
	echo ('$num_e1 = ' . "$num_e1" . ' - ' . gettype($num_e1));	


	












?>