<?php
$resultat = "";

if (isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
    if ($prenom === "") {
        $resultat = ""
    }else {
        $prenomFormat = ucfirst(strtolower($prenom));
        $resultat = "Bonjour " . $prenomFormat;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prénom</title>
</head>
<body>

<form method="GET">
    <label for="prenom">Entrez votre prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <button type="submit">Envoyer</button>
</form>

<p><?php echo $resultat; ?></p>

</body>
</html>