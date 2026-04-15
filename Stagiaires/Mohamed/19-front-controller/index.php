<?php
# Formateur/19-front-controller/index.php

// fichier de redirection vers public
// inutile si on a bien fait pointer
// un hôte virtuel ou un nom de domaine 
// vers public
header("Location: public");
// sécurité pour être certain d'arrêter
// le serveur PHP, bonne pratique
exit;