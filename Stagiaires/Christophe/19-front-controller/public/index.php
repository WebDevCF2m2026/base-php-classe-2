<?php
if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'actualites':
            include('../templates/actualites.php');
            break;
        case 'contact':
            include('../templates/contact.php');
            break;
        case 'mentions-legales':
            include('../templates/mentions-legales.php');
            break;
        default:
            include('../templates/page-404.php');
    }
} else {
    include('../templates/accueil.php');
}
