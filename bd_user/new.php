<html>
<head>
	<title>Добавление нового пользователя</title>
</head>
<body>

<H2>Регистрация на сайте:</H2>
<form action="save_new.php" metod="get">
 	Имя: <input name="name" size="50" type="text"><br><br>
	Логин: <input name="login" size="20" type="text"><br><br>
	Пароль: <input name="password" size="20" type="password"><br><br>
	Е-mail: <input name="e_mail" size="30" type="text"><br><br>
	Информация: <textarea name="info" rows="7" cols="45"></textarea>

<p>
<input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить">
</p>
</form>

<p>
<a href="index.php">Вернуться к списку пользователей</a>
</body>
</html>
