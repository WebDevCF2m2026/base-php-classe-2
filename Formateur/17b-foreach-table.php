<?php
// tableau indexé contenant des tableaux associatif
// mode de récupération courante de valeurs via SQL
$stagiaires = [
    // 0
    [
        'nom' => 'Pitz',
        'prenom' => 'Michaël',
        'email' => 'gitweb@cf2m.be',
        'age' => 49,
    ],
    // 1
    [
        'nom' => 'Degrave',
        'prenom' => 'Jean',
        'email' => 'jdegrave@cf2m.be',
        'age' => 26,
    ],
    // 2
    [
        'nom' => 'Kazaar',
        'prenom' => 'Léa',
        'email' => 'lkazar@cf2m.be',
        'age' => 31,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>device-width</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($stagiaires as $stagiaire):
        ?>
            <tr>    
                <td><?= $stagiaire['nom'] ?></td>
                <td><?= $stagiaire['prenom'] ?></td>
                <td><?= $stagiaire['email'] ?></td>
                <td><?= $stagiaire['age'] ?></td>
            </tr>
        <?php
            endforeach;
        ?>
        </tbody>
    </table>
<?php
var_dump($stagiaires);
?>
</body>
</html>