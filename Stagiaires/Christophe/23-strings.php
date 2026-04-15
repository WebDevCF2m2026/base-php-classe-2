<?php
$prenom = $_GET['prenom'] ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 23 - Strings</title>
</head>
<body>
    <h2>Formatage de prénom</h2>
    <p>Entrez un prénom dans l'URL : <code>?prenom=jEaN</code></p>

    <?php if ($prenom): ?>
        <?php
        $prenomFormate = ucfirst(strtolower(trim($prenom)));
        ?>
        <p>Prénom saisi : <strong><?= htmlspecialchars($prenom) ?></strong></p>
        <p>Prénom formaté : <strong><?= htmlspecialchars($prenomFormate) ?></strong></p>
    <?php else: ?>
        <p>Aucun prénom fourni. Essayez : <a href="?prenom=jEaN">?prenom=jEaN</a></p>
    <?php endif; ?>
</body>
</html>
