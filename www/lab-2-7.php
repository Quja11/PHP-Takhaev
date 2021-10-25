<p>Takhaev Arseniy PI-321</p>

<?php
$a = rand(-5,0);
$b = rand(0,5);
print("<p> numbers from segment [" . $a ."," . $b . "]: <br>");
	do{
		echo ($a . "<br>");
		$a = ++$a;
	}
	while($a<=$b);




?>