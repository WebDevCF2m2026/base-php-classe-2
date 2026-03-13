<?php
$nombre = mt_rand(0, 20);

if ($nombre <= 3) {
    echo "X : Nul, étudie la prochaine fois";
} 
 elseif($nombre > 3 && $nombre < 6) {
    echo "X : Peut mieux faire";
} elseif($nombre >= 6 && $nombre < 8) {
    echo "X : Peut mieux faire";
}else {
    echo "X : Très bien";
}