<?php
$num1 = 10;
$num2 = 20;
$num3 = "10";
$num4 = 15;

echo "Comparison Operators </br>";
(var_dump($num1 == $num2));
(var_dump($num1 === $num3));
var_dump($num1 !== $num2);
var_dump($num1 <> $num2);
var_dump($num1 <= $num4);
var_dump($num1 >= $num4);
var_dump($num1 <=> $num4);   // spaceship operator

echo "Increment Decrement operator";


?>