<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$prenoms =['Eiji','Moha','Irina','Fatemeh','Bruce','Max','Chris','Tiro','JD','Mika'];
?>

<ul>
<?php foreach ($prenoms as $prenom): ?>
<li><?= $prenom ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>