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

// si il extiste une variable $_GET (URL)
// nommée 'page'
if(isset($_GET['page'])){

    // si elle est dans le tableau des pages acceptées depuis config.php
    if(in_array($_GET['page'], NOS_PAGES)){
        // on les charges
        include PATH_TO_PROJECT_ROOT."/view/".$_GET['page'].".php";
    }else{
        // sinon chargement de l'erreur 404
        include PATH_TO_PROJECT_ROOT.'/view/error-404.php';
    }

// page d'accueil
}else{
    // chargement de l'accueil
    include PATH_TO_PROJECT_ROOT.'/view/accueil.php';
}

