<?php
    // créeation d'une variable
    $date = date("Y-m-d H:i:s");
    // creation d'une varable contenant un micro time
    $temps = microtime(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date et heur du jour</title>
</head>
<body>
    <h1>La date du jour est : <?=$date?> </h1>
    <h1>date du jour depuis le prmeier janvier 1970 : <?= $temps?></h1>
</body>
</html>