<?php
//20 задача
$tx=$_GET["tx"];
$arr=str_split($tx);
	for($c=0; $c<=count($arr); $c++){
		$y=count($arr)+$c-3;
		if(count($arr)+1==$y)$a[$c]=$arr[0];
		elseif(count($arr)+2==$y) $a[$c]=$arr[1];
		elseif(count($arr)+3==$y) $a[$c]=$arr[2];
		else $a[$c]=$arr[$y];
	}
$isk=implode($a);
echo $isk;

//2 задача

$a=$_GET["a"];
$b=$_GET["b"];

$ams=str_split($a);
$bms=str_split($b);

for($x=0; $x<=count($ams); $x++){
	for($s=0; $s<=count($bms); $s++){
		if($ams[$x] == $bms[$s]) unset($bms[$s]);
	}
}

if (count($bms) == 0) echo "Да, можно";
else echo "Нет, нельзя";



//23 задача
$tq=$_GET["tq"];
echo $tq;




?>