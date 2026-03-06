<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>
    <?php include "inc/menu.php"?>
    <h3>Contactez-nous</h3>
    <form action="" method="POST">
        <input type="text" name="nom" /><br>
        <textarea name="message"></textarea><br>
        <input type="submit" value="Envoyer" /><br>
</form>
<?php
var_dump($_POST);
?>
</body>
</html>