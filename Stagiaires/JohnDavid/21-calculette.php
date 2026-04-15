<!-- créez une fonction calculSimple($a, $b, $operateur) qui calcule +, -, *, / selon l'opérateur passé en paramètre. Gérez le cas de la division par zéro. -->
<?php
function calculSimple($a, $b, $operateur) {
    switch ($operateur) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            } else {
                return $a / $b;
            }
        default:
            return "Opérateur non valide";
    }
}