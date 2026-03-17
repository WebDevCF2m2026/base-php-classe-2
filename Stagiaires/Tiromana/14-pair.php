<?php

$nbr = mt_rand();

if ($nbr % 2 ) {
    echo "Le nombre {$nbr} est pair";
} else {
    echo "Le nombre {$nbr} est impair";
}