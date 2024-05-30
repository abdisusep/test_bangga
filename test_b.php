<?php  

$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = $n; $j > $n - $i; $j--) {
        echo $j . " ";
    }
    echo "\n";
}

?>