<?php
$nb_aleatoire = mt_rand(1,20);
if ($nb_aleatoire % 2 == 0) {
    echo ("le nombre {$nb_aleatoire} est paire");
} else {
    echo ("le nombre {$nb_aleatoire} est impaire");
}
