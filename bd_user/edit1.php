<html>
<head>
    <title>Редактирование данных о пользователе</title>
    <meta charset="utf-8">
</head>
<body>

<?php

  $link = mysqli_connect("localhost", "f0646857_users", "qqq", "f0646857_users") or die ("Невозможно подключиться к серверу");
  mysqli_set_charset($link, "utf8");
 
 
 $rows = mysqli_query($link, "SELECT id_p, name_p, type_p,
 s_p, nas_p, reg_p FROM nasp WHERE 
id_p = ".$_GET['id']);

while ($st = mysqli_fetch_array($rows)) {
 $id=$_GET['id'];
 $name = $st['name_p'];
 $type = $st['type_p'];
 $s = $st['s_p'];
 $nas = $st['nas_p'];
 $reg = $st['reg_p'];
 }

print "<form action='save1_edit.php' metod='get'>";
print "Наименование: <input name='name' size='50' type='text'
value='".$name."'><br><br>";

print "Тип: <select name = 'typess'>
                <option value = 'first'>Первый тип</option>
                <option value = 'second'>Второй тип</option>
                <option value = 'third'>Третий тип</option>
            </select><br><br>";
            
print "Площадь: <input name='ss' size='20' type='text'
value='".$s."'><br><br>";
print "Население: <input name='nas' size='30' type='text'
value='".$nas."'><br><br>";
print "Регион: <input name='reg' size='30' type='text'
value='".$reg."'><br><br>";


print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>";

?>

</body>
</html>