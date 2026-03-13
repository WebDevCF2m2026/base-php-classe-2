<?php
$nbr = mt_rand(0, 10);

if ($nbr >= 0 && $nbr <= 3){
    echo "{$nbr} : Nul, étudie la prochaine fois";
}elseif ($nbr >= 4 && $nbr <= 5){
    echo "{$nbr} : Peut mieux faire";
}elseif ($nbr >= 6 && $nbr <= 7){
    echo "{$nbr} : Bien";
}else{
    echo "{$nbr} : Très bien";
}