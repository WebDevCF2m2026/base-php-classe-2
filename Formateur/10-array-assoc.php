<?php
// tableau associatif, contient key => value
$monTabAssoc = [
    "prenom" => "Michaël", 
    "nom" => "Pitz", 
    "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux associatifs</title>
</head>
<body>
    <h1>Tableaux associatifs</h1>
    <p>Tableau contenant des clef non automatiques et des valeurs, il faut passer la clef, comme pour un indexé, pour récupérer une valeur</p>
    <h3>Simples echos</h3>
    <pre><code>echo $monTabAssoc["prenom"];
echo "&lt;hr>";
echo $monTabAssoc["nom"];
echo "&lt;hr>";
echo $monTabAssoc["caracteristique"];
echo "&lt;hr>";
echo $monTabAssoc["dateDeNaissance"];
echo "&lt;hr>";</code></pre>
    <?php
echo $monTabAssoc["prenom"];
echo "<hr>";
echo $monTabAssoc["nom"];
echo "<hr>";
echo $monTabAssoc["caracteristique"];
echo "<hr>";
echo $monTabAssoc["dateDeNaissance"];
echo "<hr>";
?>
<h3>Simple concaténation avec .</h3>
<pre><code>echo $monTabAssoc["prenom"] . "&lt;hr>" . $monTabAssoc["nom"] . "&lt;hr>" . $monTabAssoc["caracteristique"] . "&lt;hr>" . $monTabAssoc["dateDeNaissance"] . "&lt;hr>";</code></pre>
<?php
echo $monTabAssoc["prenom"] . "<hr>" . $monTabAssoc["nom"] . "<hr>" . $monTabAssoc["caracteristique"] . "<hr>" . $monTabAssoc["dateDeNaissance"] . "<hr>";
?>
<h3>Concaténation dans les ""</h3>
<p>C'est possible, car au dans une url (en get) ou dans un formulaire (post), il peut exister des tableaux associatifs/et/ou indexé, il suffit de retirer les ' ou " :</p>
<p>
    <a href="?section=contact&pg=1&tab[]=bonjour&tab[]=les&tab[]=amis">mon exemple</a> (tableau associatif et tableau indexé via l'URL- existe donc avant la création de PHP)
</p>
<pre><code>echo "$monTabAssoc[prenom]&lt;hr>$monTabAssoc[nom]&lt;hr>$monTabAssoc[caracteristique]&lt;hr>$monTabAssoc[dateDeNaissance]&lt;hr>";</code></pre>
<?php
echo "$monTabAssoc[prenom]<hr>$monTabAssoc[nom]<hr>$monTabAssoc[caracteristique]<hr>$monTabAssoc[dateDeNaissance]<hr>"
.$monTabAssoc["prenom"];// ici on ne peut pas le faire
?>

<h3>Concaténation moderne, fonctionne même pour l'orienté objet { } dans les ""</h3>
<p>Mais aussi les tableaux</p>
<pre><code>
echo "{$monTabAssoc['prenom']}&lt;hr>{$monTabAssoc['nom']}&lt;hr>{$monTabAssoc['caracteristique']}&lt;hr>{$monTabAssoc['dateDeNaissance']}&lt;hr>";
</code></pre>
<?php
echo "{$monTabAssoc['prenom']}<hr>{$monTabAssoc['nom']}<hr>{$monTabAssoc['caracteristique']}<hr>{$monTabAssoc['dateDeNaissance']}<hr>";

    var_dump($monTabAssoc,$_GET);
    ?>
</body>
</html>