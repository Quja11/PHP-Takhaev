<?php
if($_GET["first"] > $_GET["second"]) echo("Большее число первое, значение: " . $_GET["first"]);
elseif ($_GET["second"] > $_GET["first"]) echo("Большее число второе, значение: " . $_GET["second"]);
else echo("Оба числа равны");
?>