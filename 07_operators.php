<?php
$a = 13;
$b = 2;

echo "Arithematic Operators <br/>";
echo $a + $b, "</br>";
echo $a - $b, "</br>";
echo $a * $b, "</br>";
echo $a / $b, "</br>";
echo $a % $b, "</br>";
echo $a ** $b;

echo ("<br/>Assignment Operators<br/>");
// $a = $a + $b;
$a += $b;
echo ($a."<br/>");

// $a = $a - $b;
$a -= $b;
echo $a. "<br/>";

$a = $a * $b;
echo $a *= $b , "<br/>";

// $a = $a / $b;

$a /= $b;
echo $a. "<br/>";

// $a = $a  % $b;
$a %= $b;
echo $a;
// $a = $a ** $b;

echo $a **= $b;
echo $a;

?>