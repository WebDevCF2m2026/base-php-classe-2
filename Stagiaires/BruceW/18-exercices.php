<?php
$i=0;
while ($i <= 20) {
    if ($i % 3 ==0){    
        echo "<strong>" . $i . "</strong> ";
    } else {
        echo $i . " ";
    }
    $i++;       
} 