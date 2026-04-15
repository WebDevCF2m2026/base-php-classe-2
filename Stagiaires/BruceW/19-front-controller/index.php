<?php
// fichier de redirection vers public
// inutile si on a bien fait pointer 
// un hote virtuel ou un nom de domaine 
//vers public

header("location: public");
//sécurité pour être certain d arreter le serveur php 
//serveur php, bonne pratique 
exit;


