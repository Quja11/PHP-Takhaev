<?php

  $link = mysqli_connect("localhost", "f0646857_users", "qqq", "f0646857_users") or die ("Невозможно подключиться к серверу");
  mysqli_set_charset($link, "utf8");  
 

 $sql_add = "INSERT INTO nasp SET name_p='" . $_GET['name']
."', type_p='".$_GET['typess']."', s_p='"
.$_GET['ss']."', nas_p = '".$_GET['nas'].
"', reg_p='".$_GET['reg']. "'";

 mysqli_query($link, $sql_add);
 
 if (mysqli_affected_rows($link)>0)
 { 
     print "<p>Спасибо, вы зарегистрированы в базе данных.";
     print "<p><a href=\"index.php\"> Вернуться к списку пользователей </a>"; 
     
 }
 else { 
 print "Ошибка сохранения. <a href=\"index.php\">
        Вернуться к списку книг </a>"; 
     
 }
?>