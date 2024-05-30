<?php  

$n = 3;

for ($i = $n; $i >= 1; $i--) {
    for ($j = $n; $j > $n - $i; $j--) {
        echo $j . " ";
    }
    echo "\n";
}

for ($i = 2; $i <= $n; $i++) {
    for ($j = $n; $j > $n - $i; $j--) {
        echo $j . " ";
    }
    echo "\n";
}

?>