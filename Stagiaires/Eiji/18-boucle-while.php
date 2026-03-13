<?php
$i = 1;
while ($i <= 20){
    if($i % 3 == 0){
        echo "<b> . $i . </b>";
    }else{
        echo "$i ";
    }
    $i++;
}