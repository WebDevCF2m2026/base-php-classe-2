<?php
$stagiaires = [
    [
        'nom'     => 'Wuthrich',
        'prenom'  => 'Bruce',
        'email'   => 'bruce.wuthrich@exemple.com',
        'age'     => '28',
        'ville'   => 'Lausanne'
    ],
    [
        'nom'     => 'boris',
        'prenom'  => 'nonostan',
        'email'   => 'boris.nonostant@exemple.com',
        'age'     => '24',
        'ville'   => 'madrid'
    ],
    [
        'nom'     => 'bibi',
        'prenom'  => 'noloik',
        'email'   => 'bibi@exemple.com',
        'age'     => '25',
        'ville'   => 'venise'
    ]
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
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>age</th>
                <th>ville</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($stagiaires as $stagiaire):     
        ?>
        <tr>
            <td><?= $stagiaire['nom'] ?></td>
            <td><?= $stagiaire['prenom'] ?></td>
            <td><?= $stagiaire['email'] ?></td>
            <td><?= $stagiaire['age'] ?></td>
            <td><?= $stagiaire['ville'] ?></td>
        </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
 <?php var_dump($stagiaire) ?>

</body>
</html>
