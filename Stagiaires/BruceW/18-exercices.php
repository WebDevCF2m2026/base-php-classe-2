<?php
$i = 1;
while ($i <= 20) {
    if ($i % 3 ===0){    
        echo "<strong>" . $i . "</strong> ";
    } else {
        echo $i . " ";
    }
    $i++;       
} 