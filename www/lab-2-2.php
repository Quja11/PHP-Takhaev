<p>Takhaev Arseniy PI-321</p>

<?php
//1 задание
echo ("<b> 1) </b>");
$x = rand(3,20);
	echo $x;

//2 задание, заполнение массива и его вывод сделал в 3 задании, чтобы не выводить массив через функции, а сделать это через for
echo ("<br> <b> 2) </b>");
$mass = array();
	echo "array is full";

//3 задание
echo ("<br> <b> 3) </b>");
echo ("An array of $x elements filled with random numbers: ");

	for($q=0; $q <= $x-1; $q++){
		$mass[$q] = rand(10,99);
		echo ($mass[$q] . " ");
	}

//4 задание
echo ("<br> <b> 4) </b>");
sort($mass);

	for($v=0; $v <= $x-1; $v++){
		echo($mass[$v] . " ");
	}

//5 задание
echo ("<br> <b> 5) </b>");
$mass = array_reverse($mass);
	
	for($s=0; $s <= $x-1; $s++){
		echo($mass[$s] . " ");
	}

//6 задание
echo ("<br> <b> 6) </b>");
array_pop($mass);

	for($c=0; $c <= $x-1; $c++){
		echo($mass[$c] . " ");
	}

//7 задание
echo ("<br> <b> 7) </b>");
	$sum = 0;
	$count = -1;
	for($c=0; $c <= $x-1; $c++){
		$sum = $sum + $mass[$c];
		$count += 1;
	}
echo ("sum of array elements: " . $sum . " <br> " . "the number of elements in the array: ". $count);

//8 задание
echo ("<br> <b> 8) </b>");
echo ($sum/$count);

//9 задание
echo ("<br> <b> 9) </b>");

	 if ((in_array(50, $mass))==1){
	 	echo "There is";
	 }else{
	 	echo "No number 50";
	 }

//10 задание
echo ("<br> <b> 10) </b>");
$mass = array_unique($mass);
echo ("Array of unique values: ");

	for($vq=0; $vq <= $x-1; $vq++){
		echo($mass[$vq] . " ");
	}
	
	

























?>	