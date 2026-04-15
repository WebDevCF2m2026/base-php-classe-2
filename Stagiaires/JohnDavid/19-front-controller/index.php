<!-- coit l'architecture :
 
projet/
├── index.php           → redirige vers public/
├── public/
│   ├── index.php       → CONTRÔLEUR FRONTAL
│   ├── css/style.css
│   ├── js/script.js
│   └── img/
├── templates/
│   ├── inc/
│   │   ├── menu.php
│   │   └── footer.php
│   ├── accueil.php
│   ├── contact.php
│   ├── actualites.php
│   └── page-404.php
-->

<!-- avec l'architecture ci-dessus. Créez un site de 4 pages (accueil, actualités, contact, mentions légales)
  avec un menu de navigation par $_GET et une page 404. -->
<?php
// index.php
header("Location: public/");
exit();
?>
