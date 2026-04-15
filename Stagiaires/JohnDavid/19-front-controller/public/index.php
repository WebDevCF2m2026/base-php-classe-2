<?php
if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'contact':
            include('../templates/contact.php');
            break;
        case 'actualites':
            include('../templates/actualite.php');
            break;
        case 'rgpd':
            include('../templates/mentions-legales.php');
            break;
        default:
            include('../templates/page-404.php');
    }
} else {
    include('../templates/accueil.php');
}