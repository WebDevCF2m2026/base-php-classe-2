<?php
// echo sans concaténation
echo "Hello World";
echo "<br>";
echo "Hello friends","!"; /* concaténation avec , 
! ne fonctionne qu'avec echo -> déconseillé */

// on peut simplement écrire en fermant les balises
// c'est donc immédiatement de l'html 
?>
<hr>
<?php
// print sans concaténation
print "Hello World";
print "<br>";
print "Hello friends"."!"; // concaténation avec . -> recommandé