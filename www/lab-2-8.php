<p>Takhaev Arseniy PI-321</p>

<?php
$a = rand(1,10);
$b = rand(10,20);
print("<p> numbers from segment [" . $a ."," . $b . "]: <br>");
	for($i = $a; $i<=$b; ++$i){
		echo ($a . "<br>");
		$a = ++$a;
	}




?>