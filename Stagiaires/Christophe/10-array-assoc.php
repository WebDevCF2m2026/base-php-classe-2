
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$monTabAssoc = ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02"];

?>
<body>
  <h1><?php echo $monTabAssoc["prenom"];?> <hr> </h1>
  <h1><?php echo $monTabAssoc["nom"];?> <hr> </h1>
  <h1><?php echo $monTabAssoc["caracteristique"];?> <hr> </h1>
  <h1><?php echo $monTabAssoc["dateDeNaissance"];?> <hr> </h1>  
</body>
</html>