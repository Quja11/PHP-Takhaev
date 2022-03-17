<html>
<body>
    
<?php
 $link = mysqli_connect("localhost", "f0646857_users", "qqq", "f0646857_users") or die ("Невозможно подключиться к серверу");
 mysqli_set_charset($link, "utf8");
 

 $z="UPDATE nasp SET name_p='".$_GET['name'].
"', type_p ='".$_GET['typess']."', s_p ='"
.$_GET['ss']."', nas_p ='".$_GET['nas'].
"', reg_p ='".$_GET['reg']."' WHERE id_p="
.$_GET['id'];

 mysqli_query($link, $z);
 
 if (mysqli_affected_rows($link)>0){
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку пользователей </a>'; 
 }
 else{ 
 	echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку пользователей</a> ';
 	}
 	
 
?>
</body>
</html>