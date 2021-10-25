<p>Takhaev Arseniy PI-321</p>

<?php
$N=rand(); $M=rand();
echo ($N . "          -first                " . $M . "              -second" . "<br>");


if ($N<$M){

	for($k=$N; $k<=$M; $k++){

$numlength = strlen((string)$k);



switch($numlength){
	case 2 : if ($k%($k/10 + $k%10)==0){
		echo($k . "<br>");
	}break;

	case 3 : if ($k%($k/100 + $k/10%10 + $k%10)==0){
		echo($k ."<br>");
	}break;

	case 4 : if ($k%($k/1000 + $k/100%10 + $k/10%10 + $k%10)==0){
		echo($k . "<br>");
	}break;

	case 5 : if ($k% ($k/10000 + $k/1000%10 + $k/100%10 + $k/10%10 + $k%10)==0){
		echo($k . "<br>");
	}break;



	default : 'its a one number111';
}



}


}























?>