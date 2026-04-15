<?php

function estPair($n) {
    return is_int($n) && $n % 2 === 0;
}

echo "Tests estPair()   \n";

$tests = [0, 1, 2, 3, 4, 5, -2, -3, 42];

foreach ($tests as $test) {
    echo "estPair($test) = " . (estPair($test) ? 'true' : 'false') . "\n";
}