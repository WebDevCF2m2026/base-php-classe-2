<?php
#Formateur/19-front-controller/index.php

//fichier de redirection vers public
//inutile so on a bien fait pointer
//un hote virtuel  ou un nom de domaine
//vers public
header("location: public");
//securite pour etre certain d'arreter le serveur PHP,bonne pratique
exit;
'''
- Creation du controleur frontal.

### public/index.php -> Front Controller

Ce fichier est ceui ou **TOUTES les requetes http vers les pages vont transiter**.

Pour voir le chemin, on peut utiliser :
```php
//contantes magiques __DIR__,
//nous donne le chemin du serveur depuis la racine
echo__DIR__;




///index 2

<?php
# <Formateur/19-front-controller/public/index.php

/********************************************** 
 * **
 * **             CONTROLER FRONTAL 
 * 
 * Ce fichier va gerer toutes les requetes
 * vers les pages du site
 * 
 * *********************************************/

// inclure les dependances
// ici les fichier de configuration
//require_once rend le changement du fichier
//
include "../config.php";

echo PATH_TO_PROJET_ROOT;


// contantes magiques __DIR__, 
// nous donne le chemin du serveur depuis la racine
echo __DIR__;