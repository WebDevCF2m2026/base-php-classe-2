<?php
function calcule($nombre1, $nombre2, $operateur)
{
    switch ($operateur) {
        case "+":
            return $nombre1 + $nombre2;
        case "-":
            return $nombre1 - $nombre2;
        case "*":
            return $nombre1 * $nombre2;
        case "/":
            if ($nombre2 === 0) {
                return "pas de division avec le chiffre 0";
            }
            return $nombre1 / $nombre2;
        default:
            return "opérateur invalide";
    }
}
echo calcule(7, 54, "/");
