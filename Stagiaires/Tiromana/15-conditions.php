<?php

$nbr = mt_rand(0, 10);

if ($nbr <= 3) {
    echo "{$nbr} : Nul, étudie la prochaine fois";
} elseif ($nbr <= 5) {
    echo "{$nbr} : Peut mieux faire";
} elseif ($nbr <= 7) {
    echo "{$nbr} :  Bien";
} elseif ($nbr <= 10){
    echo "{$nbr} : Très bien";
} else {
    echo " Erreur!!";
}


