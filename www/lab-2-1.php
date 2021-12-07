<p>Тахаев Арсений ПИ-321</p>

<?php
//1 задание
echo ("<b> 1) </b>");
$treug = array();
	
	for($n=1; $n<=10; $n++){
		$treug[$n] = ($n*($n+1))/2;
		echo ($treug[$n] . " ");
	}

//2 задание
echo ("<br> <b> 2) </b>");
$kvd = array();

	for($x=1; $x<=10; $x++){
		$kvd[$x-1] = $x*$x;
		echo ($kvd[$x-1] . " ");
	}

//3 задание, (также можно было бы вывести значения функцией print_r или var_dump)
echo ("<br> <b> 3) </b>");
$rez = array_merge($treug,$kvd);
	for($z=0; $z <= count($rez)-1; $z++){
		echo ($rez[$z] . " ");
	}

//4 задание
echo ("<br> <b> 4) </b>");
	sort($rez);
	for ($q=0; $q<= count($rez)-1; $q++){
		echo ($rez[$q] . " ");
	}

//5 задание
echo ("<br> <b> 5) </b>");
	unset($rez[0]);
	for ($a=0; $a<= count($rez)-1; $a++){
		echo ($rez[$a] . " ");
	}

//6 задание
echo ("<br> <b> 6) </b>");
	$rez1 = array_unique($rez);
	for ($w=0; $w<= count($rez1)-1; $w++){
		echo ($rez1[$w] . " ");
	}
	



























?>
