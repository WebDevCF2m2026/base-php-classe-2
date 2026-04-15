<!-- créez un tableau de 10 prénoms et affichez-les dans une liste HTML <ul><li>. -->
<?php
$names = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Heidi", "Ivan", "Judy"];
echo "<ul>";
foreach ($names as $name) {
    echo "<li>" . $name . "</li>";
}
echo "</ul>";
?>