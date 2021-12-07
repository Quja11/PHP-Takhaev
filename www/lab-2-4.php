<p>Тахаев Арсений ПИ-321</p>

<?php
//Самостоятельная работа, вариант 4
$aqua = array();
$N = rand();
$count = 0;
$ds = 0;

	for($m=0; $m<=$N; $m++){
		$aqua[$m] = rand(-32768,32767);
		echo $aqua[$m] . " ";

		if($aqua[$m] > 0) $count++;
		else $count = 0;
		
		if ($count > $ds) $ds++;

	}
echo (" <br> The maximum number of consecutive positive: " . $ds);







?>