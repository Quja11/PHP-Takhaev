<?php

 $link = mysqli_connect("localhost", "f0646857_users", "qqq", "f0646857_users") or die ("Невозможно подключиться к серверу");
 mysqli_set_charset($link, "utf8");
 
 $z="DELETE FROM nasp WHERE id_p=".$_GET['id'];
 mysqli_query($link,$z);
 header("Location: index.php");
 exit;
?>