<?php  

$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= 2 * $i - 1; $j += 2) {
        echo $j . " ";
    }
    echo "\n";
}

?>