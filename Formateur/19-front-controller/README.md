# 19-front-controller

## Premier Site avec contrôleur frontal

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
// contantes magiques __DIR__, 
// nous donne le chemin du serveur depuis la racine
echo __DIR__;
```


