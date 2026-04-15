<!-- créez une fonction estPair($n) qui retourne true si le nombre est pair, false sinon. Testez-la avec plusieurs nombres.  -->
<?php
function estPair($n) {
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}