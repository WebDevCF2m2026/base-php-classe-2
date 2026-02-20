<?php
  // Code PHP en début de fichier
  $date = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Ma page - <?= date("H:i") ?></title>
</head>
<body>
  <h1>Date : <?= $date ?></h1>
  <p>Il est <?= date("H:i:s") ?></p>
</body>
</html>
