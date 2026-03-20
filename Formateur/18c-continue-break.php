<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue and break</title>
</head>
<body>
    <h1>Continue and break</h1>
<p><b>break</b> -> arrêt total de la boucle</p>
<p><b>continue</b> -> arrêt du tour actuel à cette ligne et lancement du tour suivant (ce qui suit n'est pas exécuté)</p>
    <?php
for ($i = 0; $i < 20; $i++) {
    if ($i == 15) break;       // Arrête la boucle à 15
    if ($i % 2 != 0) continue; // Arrête cette boucle à cette ligne et recommence le tour suivant
    // ces ligne ne sont pas affichées si le continue est activé
    echo "-) $i ";
    echo "est donc pair !<br> ";
}
// 0 2 4 6 8 10 12 14
?>
</body>
</html>