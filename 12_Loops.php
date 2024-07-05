<?php

// for loop
$table = 121;
for ($start = 1; $start <= 10; $start++) {
    echo ($table * $start) . "</br>";
}

// While loop


// break and continue keyword
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i, "</br>";
}

for ($i = 1; $i < 11; $i++) {
    if($i == 5 || $i == 7) {
        continue;
    } 
    echo $i. "</br>";
}

?>

<?php
    // Nested Loops
    for ($i = 1; $i <= 3; $i++) {
        for($j = 1; $j <= 3; $j++) {
            echo "Loop $i, $j </br>";
        }
        echo "</br>";
    }
?>