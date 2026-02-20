<?php

// commentaire sur une ligne

# commentaire sur une ligne

/*
Commentaires sur plusieures lignes
deuxième ligne
*/

/**
 * ceci est un commentaire qui peu être lu si un système d'annotation est installé
 * est encore utilisé par PHPdoc, 
 */

echo "<!-- ceci sera un commentaire front -->";
?>
<p>ceci est d'html</p>
<?php
echo "<p>ceci aussi mais traité en ".strtoupper("backend")."</p>";
?>