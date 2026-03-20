<?php
# Formateur/19-front-controller/public/index.php

/*****************************************
**
**          CONTROLLER FRONTAL
**
** Ce fichier va gérer toutes les requêtes 
** Vers les pages du site
**
******************************************/

// inclure les dependances, 
// ici le fichier de configuration
// require_once rend le chargement du fichier 
// obligatoire pour continuer (require plutôt qu'include)
// le _once fait que si il est déjà chargé, on utilisera
// celui qui est chargé, et pas celui-ci
require_once "../config.php";


echo 'Racine de notre projet :'.PATH_TO_PROJECT_ROOT;

