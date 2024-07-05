<?php

$name = "Ankit Kumar";
$age = 24;
$str1 = "Hii How are you ";

echo "My name is " . $name . " I am " . $age . "years old </br>";

// Concatenate two strings
echo ($str1.$name."</br>");

$str1 .= $name;
echo ($str1);
