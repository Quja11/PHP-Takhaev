<p>Takhaev Arseniy PI-321</p>

<?php
//1 задание
echo ("<b> 1) </b>");
$cust = array("cnum" => 2001,
			  "cname" => "Hoffman",
			  "city" => "London",
			  "snum" => 1001);
print_r($cust);

//2 задание
echo ("<br> <b> 2) </b>");
$cust["rating"] = 100; 
print_r($cust); // Каждое добавленное значение будет присоединяться в конце массива. В данном случае, в конце будет ключ "rating" со значением 100.

//3 задание
echo ("<br> <b> 3) </b>");
asort($cust);
print_r($cust);

//4 задание
echo ("<br> <b> 4) </b>");
ksort($cust);
print_r($cust);

//5 задание
echo ("<br> <b> 5) </b>");
sort($cust);
print_r($cust); //При выполнении функции sort, получается, что все ключи сбрасыватся до числовых значений 0,1,2 и т.д.



































?>