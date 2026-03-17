<?php

$nbr = mt_rand(0, 10);

switch ($nbr) {
    
    case ($nbr <= 3) :
        echo "{$nbr} : Nul, étudie la prochaine fois";
    break;
    case ($nbr <= 5) :
        echo "{$nbr} : Peut mieux faire";
    break;
    case ($nbr <= 7) :
        echo "{$nbr} :  Bien";
    break;
    case ($nbr <= 10) :
        echo "{$nbr} : Très bien";
    break;
    default :
    echo " Erreur!!";
}


