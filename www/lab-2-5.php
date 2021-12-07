<p>Тахаев Арсений ПИ-321</p>

<?php
//Task 2.5

function abc($u,$t){
	if ($u >= 0 and $t >= 0) return ($u);
	if ($u < 0 and $t >= 0) return ($t);
	if ($u >= 0 and $t < 0) return ($u - 2*$t);
	if ($u < 0 and $t < 0) return ($u*$t + 3*$t);              
}

$a = rand(-100,100);
$b = rand(-100,100);
echo ("a = " . $a . " b = " . $b . "<br>");

$u = abc($a - $b*$b, $b - $a);
$t = abc($a, $b - $a*$a);

echo ("Результат 1 функции:" . $u);
echo ("<br> Результат 2 функции:" . $t);


$z = $u + $t;
echo ("<br> Значение переменной z равно $z");

?>