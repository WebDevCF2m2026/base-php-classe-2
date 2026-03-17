<?php
 $note =  rand(0,10);

 if ($note <= 3) {
    echo " Nul, étudie la prochaine fois";
  } elseif ($note <= 5) {
    echo "peut mieux faire";
  } elseif ($note <=7) {
    echo "bien";
  }
  elseif ($note <=10) {
    echo "très bien";
  } else {
    echo "note invalide";
  }
?>