<?php
$nbr = mt_rand(0,10);

switch ($nbr){
    case 0: case 1: case 2: case 3:            
        echo "{$nbr} : Nul, étudie la prochaine fois";
        break;
    case 4: case 5:    
        echo "{$nbr} : Peut mieux faire";
        break;
    case 6: case 7:    
        echo "{$nbr} : Bien";
        break;
    default:
        echo "{$nbr} : Très bien";       
}

