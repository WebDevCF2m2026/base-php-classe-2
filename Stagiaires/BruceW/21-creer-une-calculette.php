<?php

function calculSimple($a, $b, $operateur) {
    

    if (!is_numeric($a) || !is_numeric($b)) {
        return "Erreur : Les deux valeurs doivent être des nombres.";
    }

    switch ($operateur) {
        case '+':
            return $a + $b;

        case '-':
            return $a - $b;

        case '*':
        case 'x':
        case 'X':
            return $a * $b;

        case '/':
        case ':':
            if ($b == 0) {
                return "Erreur : Division par zéro impossible !";
            }
            return $a / $b;

        default:
            return "Erreur : Opérateur non valide. Utilisez +, -, * ou /";
    }
}


echo "=== Tests de la fonction calculSimple() ===\n\n";

$tests = [
    [10, 5, '+'],
    [10, 5, '-'],
    [10, 5, '*'],
    [10, 5, '/'],
    [20, 0, '/'],
    [7, 3, '+'],
    [15, 4, '*'],
    [100, 0, '-'],
    [8, 2, ':'],
    [42, 10, 'x'],
    [999, 5, '%'],     
    ["abc", 5, '+'],   
];

foreach ($tests as $test) {
    $a = $test[0];
    $b = $test[1];
    $op = $test[2];
    
    $resultat = calculSimple($a, $b, $op);
    
    echo "calculSimple($a, $b, '$op') = ";
    
    if (is_numeric($resultat)) {
        echo $resultat;
    } else {
        echo "\"$resultat\"";
    }
    
    echo "\n";
}