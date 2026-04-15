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
                return "Erreur : division par zéro !";
            }
            return $a / $b;
        default:
            return "Opérateur inconnu : {$operateur}";
    }
}

// Tests
echo "5 + 3 = " . calculSimple(5, 3, '+') . "<br>";
echo "10 - 4 = " . calculSimple(10, 4, '-') . "<br>";
echo "6 * 7 = " . calculSimple(6, 7, '*') . "<br>";
echo "20 / 4 = " . calculSimple(20, 4, '/') . "<br>";
echo "10 / 0 = " . calculSimple(10, 0, '/') . "<br>";
echo "5 ^ 2 = " . calculSimple(5, 2, '^') . "<br>";
