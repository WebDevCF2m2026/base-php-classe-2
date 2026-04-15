<?php
$stagiaires = [
    'nom' => 'Pitz',
    'prenom' => 'Micheal',
    'email' => 'gitweb2cf2m.be',
    'age' => 49
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            
            <?php
                foreach($stagiaires as $stagiaire):
            ?>
            <tr>
                <td><?= $stagiaire['nom'] ?></td>
            </tr>
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</body>
</html>