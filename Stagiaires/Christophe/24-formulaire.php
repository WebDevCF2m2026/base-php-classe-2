<?php
$erreurs = [];
$succes = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Un email valide est obligatoire.";
    }
    if (empty($message)) {
        $erreurs[] = "Le message est obligatoire.";
    }

    if (empty($erreurs)) {
        $succes = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 24 - Formulaire de contact</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 15px; padding: 10px 20px; background: #2c3e50; color: white; border: none; cursor: pointer; }
        .erreur { color: red; }
        .succes { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Formulaire de contact</h1>

    <?php if ($succes): ?>
        <p class="succes">Merci <?= $nom ?>, votre message a bien été envoyé !</p>
        <p>Email : <?= htmlspecialchars($email) ?></p>
        <p>Message : <?= $message ?></p>
    <?php else: ?>
        <?php if (!empty($erreurs)): ?>
            <div class="erreur">
                <?php foreach ($erreurs as $erreur): ?>
                    <p><?= $erreur ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>

            <button type="submit">Envoyer</button>
        </form>
    <?php endif; ?>
</body>
</html>
