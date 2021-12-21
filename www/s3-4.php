<HTML>
<HEAD><TITLE>Задача 3.4</TITLE>
</HEAD>
<BODY>

<FORM action="<?php print $PHP_SELF?>" method="post">
 Введите логин: <INPUT type="text" name="N" size="7">
<P><INPUT type="submit" name="vip" value="Вход">
 </SELECT>
 
</FORM>
<?php
if (isset($_POST["vip"])){

switch ($_POST["N"]) {
 case "Ivan_php": echo ("Здравствуйте, Иванов Иван Иванович");break;
 case "Petr_php": echo ("Здравствуйте, Петров Петр Петрович");break;
 case "Mihail_php": echo ("Здравствуйте, Михайлов Михаил Михайлович");break;
 case "Victor_php": echo ("Здравствуйте, Викторов Виктор Викторович");break;
 default: echo "Вы не зарегистрированный пользователь";
}
}

?>
</BODY> 
</HTML>