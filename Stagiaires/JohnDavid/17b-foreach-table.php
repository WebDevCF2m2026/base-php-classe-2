<!-- créez un tableau associatif avec les données d'un stagiaire (nom, prénom, email, âge) et affichez-les dans un tableau HTML <table>. -->
<?php
$student = [
    "nom" => "Doe",
    "prénom" => "John",
    "email" => "john.doe@example.com",
    "âge" => 20
];
echo "<table>";
foreach ($student as $key => $value) {
    echo "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>";
}
echo "</table>";
?>