<html>
<body>

<?php
 $link = mysqli_connect("localhost","root","", "users");
 mysqli_set_charset($link, "utf8");
 
 $zapros="UPDATE user SET user_name='".$_GET['name']. "', user_login='".$_GET['login']."', user_password='" .$_GET['password']."', user_e_mail='".$_GET['e_mail']. "', user_info='".$_GET['info']."' WHERE id_user=" .$_GET['id_user'];
 mysqli_query($link, $zapros);

 if (mysqli_affected_rows()>0){
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку пользователей </a>'; 
}
 else { 
 	echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку пользователей</a> '; 
 }
?>
</body> 
</html>
