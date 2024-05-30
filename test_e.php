<?php  

function is_prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$primes = array();
$num = 2;
while (count($primes) < 5) {
    if (is_prime($num)) {
        $primes[] = $num;
    }
    $num++;
}

foreach ($primes as $prime) {
    echo $prime . " ";
}
echo "\n";

?>