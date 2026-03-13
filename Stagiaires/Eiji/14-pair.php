<?php
$nbr = mt_rand(1, 20);

if ($nbr % 2 == 0){
    echo "le nombre {$nbr} est pair";
}else{
    echo "le nombre {$nbr} est impair";
}