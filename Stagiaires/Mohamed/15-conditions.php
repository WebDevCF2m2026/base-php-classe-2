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
echo("<br>");
$nb_random = rand(0, 10);
switch ($nb_random) {
    case 0:
    case 1:
    case 2:
    case 3:
        echo ("Nul, étudie la prochaine fois");
        break;
    case 4:
    case 5:
        echo ("Peut mieux faire");
        break;
    case 6:
    case 7:
        echo ("Bien");
        break;
    case 8:
    case 9:
    case 10:
        echo ("Très bien");

    default:
        echo("erreur");
        break;
}
echo('<br>');
