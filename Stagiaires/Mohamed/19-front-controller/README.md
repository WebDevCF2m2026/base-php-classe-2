# 19-front-controller

## Premier Site avec contrôleur frontal

### Création du .gitignore

Ce fichier indique à `git` ce qu'on ne veut pas suivre et donc envoyer sur `github` : `.gitignore`

`Formateur\19-front-controller\.gitignore`

On crée à la racine du projet un fichier nommé `config.php`

Faisons un `git status`,

Il apparaît :

        Formateur/19-front-controller/.gitignore
        Formateur/19-front-controller/config.php

Il contiendra des **valeurs confidentielles**, on doit le rajouter au `.gitignore` !

```gitignore
# 
# Fichier de configuration
config.php
```

#### Création du contenu de config.php

```php
<?php
# Formateur/19-front-controller/config.php

/*
* Ce fichier à la racine du projet, va contenir les constantes
* Indispensables à son fonctionnement, Il ne doit pas être suivi
*/

# Racine de notre projet quelque soit le serveur
# __DIR__ est une constante magique (change suivant l'emplacement)
# Dans une constante (on ne peut la réécrire)
const PATH_TO_PROJECT_ROOT = __DIR__;

# Pages acceptées pour notre site, données sensibles 
# (pas dans le README.md en principe ;-))
const NOS_PAGES = ['accueil', 'contact','actualites'];
```

### Création d'une copie envoyée sur github

On va copier `config.php` sous le nom de `config.base.php` et retirer les valeurs dangereuses! Dans notre exemple je retire les pages valides du tableau, ce n'est pas vraiment de la sécurité

On DEVRA, à la maison par exemple, ou un autre utiliseur, recréer `config.php` en partant de `config.base.php`

### Création des dossiers et fichiers

- création du dossier `public`, c'est le seul accès qu'on laissera aux utilisateurs du site (**Sécurité!**)
- Pour cet exercice on va créer un fichier nommé `index.php` à la racine de `19-front-controller` avec une redirection vers le dossier `public`, car l'exercice est accessible par une une autre URL. Il contient une redirection relative `header("Location: public");`

```php
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
```
- Création d'un hôte virtuel sur Wamp sur votre machine qui pointe directement vers les dossier `public`

```bash
19-front-controller 
- Directory : c:/web2026/php/base-php-classe-2/formateur 19-front-controller/public

```
- Création du contôleur frontal.

### public/index.php -> Front Controller

Ce fichier est celui où **TOUTES les requêtes http vers les pages vont transiter**.

Pour voir le chemin, on peut utiliser :
```php
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
// oubliez pas de le copier depuis config.base.php
// sous le nom config.php
require_once "../config.php";


echo 'Racine de notre projet :'.PATH_TO_PROJECT_ROOT;


```

### Création des vues

Création du dossier `view` avec les 3 vues



