<?php
function estPair($n) {
    return $n % 2 === 0;
}

// Tests
$tests = [2, 7, 0, 15, 42, 99, 100];

foreach ($tests as $nombre) {
    if (estPair($nombre)) {
        echo "{$nombre} est pair<br>";
    } else {
        echo "{$nombre} est impair<br>";
    }
}
