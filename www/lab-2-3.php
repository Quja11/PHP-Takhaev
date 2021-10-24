<p>Takhaev Arseniy PI-321</p>

<?php
$a = "A";
switch ($a){
	case 'A' : echo 'variable matters "A"';
	case 'B' : echo 'variable matters "B"'; break; 
	default:   echo 'no answer found ';
}


//Сообщение, что переменная имеет значение "B" будет выводится, т.к. мы убрали оператор break. Из-за этого все проверки игнорируются, несмотря на то что A!=B. 



?>