<?php
$temperature = mt_rand(-100, 200);

if ($temperature <= 0) {
    echo "L'eau est solide à {$temperature}°";
} elseif ($temperature < 100) {
    echo "L'eau est liquide à {$temperature}°";
} else {
    echo "L'eau est gazeuse à {$temperature}°";
}