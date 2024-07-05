<?php

$age = 20;
// 1. If statement
if ($age > 18) {
    echo ("Display adult content </br>");
}

// If-else statement 
$name = "Ankit Kumar";
if ($name == "Ankit Kumar") {
    echo ("Hello Ankit Kumar");
} else {
    echo ("Hello Guest");
}

// else if statement
$country = "Japan";
if ($country == "India") {
    echo ("Welcome to India");
} else if ($country == "Canada") {
    echo ("Welcome to Canada");
} else if ($country == "France") {
    echo ("Welcome to France");
} else {
    echo ("Unknown country");
}


// switch statement
$color = "Orange";

switch ($color) {
    case "Orange":
        echo "Color is Orange";
        break;
    case "Blue":
        echo "Color is Blue";
        break;
    case "Green":
        echo "Color is Green";
        break;
    default:
        echo "Color is not recognized";
        break;
}
