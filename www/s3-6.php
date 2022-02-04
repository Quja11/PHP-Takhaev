<?php
//2 задача (done)

$a=$_GET["a"];
$b=$_GET["b"];

$ams=str_split($a);
$bms=str_split($b);

for($x=0; $x<=count($ams)-1; $x++){
	for($s=0; $s<=count($ams)-1; $s++){
		if($ams[$x] == $bms[$s]) unset($bms[$s]);
	}
}

if($a == null and $b == null){
}else{
if (empty($bms)) {
echo "Да, можно ";

}else echo "Нет, нельзя";
}

//23 задача
$ex=$_GET["tq"];

$out=strtr($ex,
array(
"<i>" => "<курсив>",
"<I>" => "<курсив>",
"</i>" => "<конец курсива>",
"</I>" => "<конец курсива>"
));
echo $out;

//20 задача (done)
function shift(array $array, int $n)
{
	for($count = 0; $count < $n; $count++){
		$tmp = array_pop($array);
		array_unshift($array, $tmp);
	}
	return $array;
}

$in=$_GET["tx"];
$inch=str_split($in);

$chg = (shift($inch, 3));
$res = implode("", $chg);
echo $res;