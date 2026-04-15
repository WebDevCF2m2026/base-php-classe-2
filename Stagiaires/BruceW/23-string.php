<?php
$prenom = $_GET['prenom'] ?? '';

$prenom_formate = '';

if (!empty($prenom)) {
    $prenom_formate = ucfirst(strtolower(trim($prenom)));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du Prénom</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .resultat {
            font-size: 2em;
            margin: 30px 0;
            color: #2c3e50;
        }
        form {
            margin: 20px auto;
            max-width: 400px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 1.1em;
            width: 70%;
        }
        button {
            padding: 10px 20px;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <h1>Affichage du Prénom</h1>

    <form method="GET">
        <label for="prenom">Entrez votre prénom :</label><br><br>
        <input type="text" id="prenom" name="prenom" placeholder="Ex: jEaN" value="<?= htmlspecialchars($prenom) ?>">
        <button type="submit">Afficher</button>
    </form>

    <?php if (!empty($prenom_formate)): ?>
        <div class="resultat">
            Bonjour <strong><?= htmlspecialchars($prenom_formate) ?></strong> !
        </div>
    <?php elseif (isset($_GET['prenom'])): ?>
        <p style="color: red;">Veuillez entrer un prénom.</p>
    <?php endif; ?>

</body>
</html>