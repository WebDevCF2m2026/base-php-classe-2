# 19-front-controller
## Premier site avec controleur frontal
###

- creation du dosier 'public', c'est le seul acces qu'on laissera aux 




Ce fichier est ceui ou **TOUTES les requetes http vers les pages vont transiter**.

Pour voir le chemin, on peut utiliser :
```php
//contantes magiques __DIR__,
//nous donne le chemin du serveur depuis la racine
echo__DIR__;

###Creation du .gitignore
ce fichier indique ce qu´on ne peut pas envoyer sur github : ´.gitignore`

´Formateur\19-front-controller\.gitignore`
on cree a la racine du projet un fichier nome ´config.php`
Faisons un ´git status`,
Il apparait : 
Formateur/19-font-controller/.gitignore
Formateur/19-font-controller/.gitignore

#Fichier
###Creation d'une copie envoyee sur github
on va copier 'congig.php' sour le nom de 'config.base.php' et retirer les valeurs 
dangereuses! Dans notre exemple je retire les pages valides du tableau, ce n'est pas vraiment de la securite
on purra, a la maisons par exemple ou un autre utilisateur, recréer  'config.php'