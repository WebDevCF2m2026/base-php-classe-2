<?php
$pi = "3.14";

$entier = (int) $pi;       // 3
$decimal = (float) $pi;    // 3.14
$booleen = (bool) $pi;     // true
$tableau = (array) $pi;    // ["3.14"]
$redevientChaine = (string) 42;// "3.14"

var_dump($pi, $entier, $decimal, $booleen, $tableau, $redevientChaine);