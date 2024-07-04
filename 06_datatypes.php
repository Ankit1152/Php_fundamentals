<?php
$name = "Ankit Kumar";
echo var_dump($name);
echo "</br>";

$num = 50;
echo var_dump($num);
echo "</br>";

$numFloat = 50.925;
echo var_dump($numFloat);
echo "</br>";


$bool = true;
echo var_dump($bool);
echo "</br>";

$arr = ["Ankit", "Ravi", "Sunil", 10];
echo var_dump($arr);
echo "</br>";

$empty = null;
echo var_dump($empty);
echo "</br>";

// $user = new className();

$connection = ftp_connect("127.0.0.1") or die("local host not found");
echo var_dump($connection);
?>