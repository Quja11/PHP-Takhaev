<?
if ($_POST["d"]=="plus") {
 $c=$_POST["a"]+$_POST["b"];
 echo ("Sum of numbers = $c");
} else {
 $c=$_POST["a"]*$_POST["b"];
 echo ("Product of numbers = $c");
 }
echo ("<BR> <A href='f3.html'> Return Back </A>");
?> 