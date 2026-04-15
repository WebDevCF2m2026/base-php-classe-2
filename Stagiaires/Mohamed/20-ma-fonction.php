<?php
function estPair($nombre) {
    return $nombre % 2 === 0;
}

if (estPair(4)) {
    echo "4 est pair";
    echo("<br>");
}

if (4%2===0) {
    echo("4 est pair <br>");
}