<?php
// Initialisation des variables
$nom = $email = $message = '';
$erreurs = [];
$confirmation = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération et nettoyage des données
    $nom     = trim($_POST['nom'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation des champs
    if (empty($nom)) {
        $erreurs[] = "Le champ Nom est obligatoire.";
    }

    if (empty($email)) {
        $erreurs[] = "Le champ Email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "L'adresse email n'est pas valide.";
    }

    if (empty($message)) {
        $erreurs[] = "Le champ Message est obligatoire.";
    } elseif (strlen($message) < 10) {
        $erreurs[] = "Le message doit contenir au moins 10 caractères.";
    }

    // Si aucune erreur, on affiche le message de confirmation
    if (empty($erreurs)) {
        $confirmation = " Merci $nom ! Votre message a bien été envoyé.";
        
        // Optionnel : réinitialiser les champs après envoi
        $nom = $email = $message = '';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        /* style de la boite */
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
        }
        .erreur { color: red; }
        .confirmation { 
            color: green; 
            font-weight: bold;
            background: #d4edda;
            padding: 15px;
            border-radius: 5px;
        }
        form {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        button {
            margin-top: 20px;
            padding: 12px 25px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Formulaire de Contact</h1>

    <?php if (!empty($erreurs)): ?>
        <div class="erreur">
            <strong>Erreurs :</strong>
            <ul>
                <?php foreach ($erreurs as $erreur): ?>
                    <li><?= htmlspecialchars($erreur) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($confirmation): ?>
        <div class="confirmation">
            <?= $confirmation ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="nom">Nom complet :</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" required><?= htmlspecialchars($message) ?></textarea>

        <button type="submit">Envoyer le message</button>
    </form>

</body>
</html>