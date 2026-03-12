<?php
$temperature = rand(-100,300);
if ($temperature < 0 ) {
    echo("glace");
}elseif($temperature >= 99){
    echo("vapeur");
}else{
    echo("eau");
}
?>