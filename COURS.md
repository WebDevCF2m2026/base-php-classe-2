# Cours PHP - Les Bases

## Formation Web Développeur - CF2M Bruxelles

> **Classe** : 2

> **Version** : 2026

> **Prérequis** : HTML, CSS, bases en algorithmique

> **PHP** : Version 8.x

> **Auteur** : Michaël J. Pitz Pour le [CF2M](https://www.cf2m.be/formation/developpeur-web) - Centre de Formation 2 Mille

---

## Introduction

Bien que l'écosystème `PHP contemporain` soit largement dominé par la **Programmation Orientée Objet** (`POO`) et les frameworks complexes (**Symfony, Laravel, etc**), l'apprentissage initial du **paradigme procédural** ([lien](https://fr.wikipedia.org/wiki/Programmation_proc%C3%A9durale)) demeure **une étape pédagogique incontournable**. 

Il permet aux apprenants de comprendre le flux d'exécution séquentiel, la gestion d'état et la logique brute sans la surcharge cognitive liée à l'abstraction des classes et des objets. L'unique exception à cette règle procédurale sera l'utilisation de l'extension `PDO` (PHP Data Objects) et la gestion des Exceptions, qui seront introduites comme des standards industriels indispensables pour garantir la **sécurité et la portabilité** des interactions avec les bases de données.

---


## Table des matières

1. [Présentation de PHP](#1---présentation-de-php)
2. [Historique de PHP](#2---historique-de-php)
3. [Installation de l'environnement](#3---installation-de-lenvironnement)
4. [Algorithmique - Rappels fondamentaux](#4---algorithmique---rappels-fondamentaux)
5. [Les bases de PHP](#5---les-bases-de-php)
   - [Les fichiers PHP](#51---les-fichiers-php)
   - [Les balises PHP](#52---les-balises-php)
   - [Les commentaires](#53---les-commentaires)
   - [Placement des balises PHP](#54---placement-des-balises-php-dans-le-html)
6. [Les variables](#6---les-variables)
   - [Déclaration de variables](#61---déclaration-de-variables-non-strictement-typées)
   - [Les types de données](#62---les-types-de-données)
   - [Le casting (transtypage)](#63---le-casting-transtypage)
   - [Les tableaux](#64---les-tableaux)
   - [Les tableaux indexés](#641---les-tableaux-indexés)
   - [Les tableaux associatifs](#642---les-tableaux-associatifs)
   - [Les tableaux multidimensionnels](#643---les-tableaux-multidimensionnels)
   - [Les variables superglobales](#65---les-variables-superglobales)
7. [Les constantes](#7---les-constantes)
8. [Les opérateurs](#8---les-opérateurs)
   - [Les opérateurs arithmétiques](#81---les-opérateurs-arithmétiques)
   - [Les opérateurs de comparaison](#82---les-opérateurs-de-comparaison)
   - [Les opérateurs logiques](#83---les-opérateurs-logiques)
   - [Les opérateurs d'affectation](#84---les-opérateurs-daffectation)
   - [Les opérateurs d'incrémentation et décrémentation](#85---les-opérateurs-dincrémentation-et-décrémentation)
   - [L'opérateur de concaténation](#86---lopérateur-de-concaténation)
9. [Les conditions](#9---les-conditions)
   - [if / else / elseif](#91---if--else--elseif)
   - [switch](#92---switch)
   - [match (PHP 8)](#93---match-php-8)
   - [L'opérateur ternaire](#94---lopérateur-ternaire)
   - [Syntaxe alternative](#95---syntaxe-alternative-pour-les-conditions)
10. [Les boucles](#10---les-boucles)
    - [for](#101---for)
    - [foreach](#102---foreach)
    - [while](#103---while)
    - [do...while](#104---dowhile)
    - [break et continue](#105---break-et-continue)
11. [Les inclusions de fichiers](#11---les-inclusions-de-fichiers)
    - [include / include_once](#111---include-et-include_once)
    - [require / require_once](#112---require-et-require_once)
    - [Le contrôleur frontal](#113---le-contrôleur-frontal-front-controller)
12. [Les fonctions](#12---les-fonctions)
    - [Les fonctions natives](#121---les-fonctions-natives)
    - [Les fonctions personnalisées](#122---les-fonctions-personnalisées)
    - [Les paramètres et arguments](#123---les-paramètres-et-arguments)
    - [Les paramètres par défaut](#124---les-paramètres-par-défaut)
    - [Les arguments nommés (PHP 8)](#125---les-arguments-nommés-php-8)
    - [Les valeurs de retour](#126---les-valeurs-de-retour)
    - [Portée des variables (scope)](#127---portée-des-variables-scope)
13. [Les chaînes de caractères](#13---les-chaînes-de-caractères)
14. [Les formulaires - GET et POST](#14---les-formulaires---get-et-post)
    - [$_GET](#141---_get)
    - [$_POST](#142---_post)
    - [Sécuriser les entrées](#143---sécuriser-les-entrées-utilisateur)
15. [Les fonctions de manipulation de tableaux](#15---les-fonctions-de-manipulation-de-tableaux)
16. [Les fonctions de date et heure](#16---les-fonctions-de-date-et-heure)

## 1 - Présentation de PHP

![PHP Elephpant](Data/Elephpant.png)

**PHP**, acronyme récursif de **Hypertext Preprocessor**, est un langage de script utilisé le plus souvent côté serveur.

Dans cette architecture, le serveur **interprète** le code PHP des pages web demandées et génère du code (HTML, CSS, XML, JSON, JavaScript…) et/ou des données (JPEG, GIF, PNG, SVG, PDF…) pouvant être interprétés et rendus par un **navigateur web**.

`PHP` a été conçu pour permettre la création d'**applications dynamiques**, le plus souvent développées pour le Web. Étant un langage de type **script**, il n'est pas obligatoirement compilé pour être exécuté. Il est donc interprété à chaque appel de page par le serveur (sauf pour la compilation à la volée `JIT` ou par gestion des caches).

`PHP` est le plus souvent couplé à un serveur **Apache**, bien qu'il puisse être installé sur la plupart des serveurs HTTP tels que **IIS** (Microsoft), **Nginx** ou **Caddy** (langage `GO` pour une vitesse d'exécution accrue).

Ce couplage permet de récupérer des informations issues d'une **base de données**, d'un système de fichiers, ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.

C'est un langage qui peut, comme au début de ce cours, être **peu typé** et souple, donc facile à apprendre par un débutant, mais de fait moins sécurisé et plus difficile à maintenir. Un typage fort est donc conseillé par la suite avec l'adoption de la **Programmation Orientée Objet** (POO), qui sera abordée dans le cours avancé.

**Caractéristiques principales :**

- **Libre et gratuit** : PHP est open source
- **Multi-plateforme** : fonctionne sur Linux, Windows et macOS
- **Simple d'installation** et d'utilisation pour un débutant
- **Améliorations constantes** : nouvelles fonctionnalités et optimisations régulières ([lien](https://endoflife.date/php))
- **Grande communauté** : documentation abondante, forums actifs
- **Utilisé massivement** : WordPress, Magento, Laravel, Symfony, Drupal, Joomla, etc.
- Nécessite une **connaissance aiguë des problèmes de sécurité**

📖 **Documentation officielle** : [https://www.php.net/manual/fr/](https://www.php.net/manual/fr/)

📖 **Documentation W3C** : [PHP Tutorial](https://www.w3schools.com/php/default.asp)

---

[Retour à la table des matières](#table-des-matières)

---

## 2 - Historique de PHP

| Année | Version | Événement clé |
|-------|---------|---------------|
| 1994 | - | Création par **Rasmus Lerdorf** (Personal Home Page) |
| 1995 | PHP 1 | Annonce officielle comme langage de script côté serveur |
| 1996-97 | PHP/FI 2 | Support des formulaires web, bases de données, sessions |
| 1998 | PHP 3 | Moteur remanié, modules, module Apache, début de la POO |
| 2000 | PHP 4 | Améliorations de la POO, performances accrues (Zend Engine 1) |
| 2004 | **PHP 5** | **POO native**, exceptions, espaces de noms, Zend Engine 2 |
| 2015 | **PHP 7** | **Performances x2** (Zend Engine 3), types de retour scalaires |
| 2020 | **PHP 8.0** | Attributs, arguments nommés, **JIT compiler**, `match`, union types |
| 2021 | **PHP 8.1** | Enums, propriétés `readonly`, fibres |
| 2022 | **PHP 8.2** | Classes readonly, types DNF, constantes dans les traits |
| 2023 | **PHP 8.3** | Constantes typées dans les classes, `json_validate()`, `#[Override]` |
| 2024 | **PHP 8.4** | Hooks de propriétés, visibilité asymétrique, nouvelle API DOM |
| 2025-2026 | **PHP 8.5** | En cours de développement, opérateur Pipe, Clone With, nouvelles fonctions de manipulation de tableaux |

> ⚠️ **PHP 6 n'a jamais existé** officiellement — le projet a été abandonné.

📖 [Historique complet sur php.net](https://www.php.net/manual/fr/history.php.php)

---

[Retour à la table des matières](#table-des-matières)

---

## 3 - Installation de l'environnement

Pour développer en PHP, nous avons besoin de trois composants :

1. **Un serveur web** (Apache ou Nginx)
2. **PHP** (interpréteur)
3. **Un serveur de base de données** (MySQL ou MariaDB)

### 3.1 - Packages tout-en-un

| OS | Package | Lien |
|----|---------|------|
| Windows | **WAMP** | [wampserver.com](https://www.wampserver.com/) |
| Windows | WAMP + add-ons | [wampserver.aviatechno.net](https://wampserver.aviatechno.net/) - **Conseillé sous Windows** |
| macOS | **XAMPP** | [apachefriends.org](https://www.apachefriends.org/fr/index.html) |
| Linux | **LAMP** | Installation manuelle via apt/yum, vaut pour WSL2 sous Windows |
| Tous | **Docker** | [docker.com](https://www.docker.com/) |

### 3.2 - Installation de WAMP (Windows)

Téléchargez WAMP sur [wampserver.aviatechno.net](https://wampserver.aviatechno.net/) et suivez les instructions.

📖 Tutoriel d'installation : [README.md#installation-de-wamp-sous-windows](README.md#installation-de-wamp-sous-windows)

### 3.3 - Installation de XAMPP (macOS)

Nous préférons XAMPP à MAMP, car MAMP (version gratuite) pose des problèmes de droits d'accès.

📖 Tutoriel : [https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/](https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/)

### 3.4 - Vérification de l'installation

Créez un fichier `info-php.php` dans votre dossier `Stagiaires\{Prenom}`  avec le contenu suivant :

```php
<?php
phpinfo();
```

Ouvrez cette page dans votre navigateur en passant par un `hôte virtuel` (WAMP) ou `www`, `htdocs`, etc . Vous devriez voir une page détaillant la configuration PHP.

> ⚠️ **Supprimez ce fichier en production** : il révèle des informations sensibles sur votre serveur.

---

[Retour à la table des matières](#table-des-matières)

---

## 4 - Algorithmique - Rappels fondamentaux

Avant de coder en PHP, il est **fondamental** de comprendre les bases de l'algorithmique. La programmation n'est que la **traduction d'un algorithme** dans un langage donné.

### 4.1 - Qu'est-ce qu'un algorithme ?

Un algorithme est une suite d'instructions **finies**, **ordonnées** et **non ambiguës**, permettant de résoudre un problème ou d'accomplir une tâche.

**Exemple quotidien** : une recette de cuisine est un algorithme.

### 4.2 - Les briques fondamentales

Tout programme informatique repose sur **trois structures** de base :

1. **Les séquences** : instructions exécutées l'une après l'autre
2. **Les conditions** (structures de sélection) : choix entre plusieurs chemins
3. **Les boucles** (structures de répétition) : répétition d'instructions

### 4.3 - Les variables en algorithmique

Une variable est un **conteneur nommé** qui stocke une valeur en mémoire.

```
ALGORITHME calculSomme
VARIABLES
    a : ENTIER
    b : ENTIER
    somme : ENTIER
DÉBUT
    a ← 5
    b ← 3
    somme ← a + b
    AFFICHER somme
FIN
```

### 4.4 - Les conditions en algorithmique

```
SI condition ALORS
    instruction(s)
SINON SI autre_condition ALORS
    instruction(s)
SINON
    instruction(s)
FIN SI
```

### 4.5 - Les boucles en algorithmique

**Boucle POUR** (nombre d'itérations connu) :
```
POUR i DE 0 À 10
    AFFICHER i
FIN POUR
```

**Boucle TANT QUE** (nombre d'itérations inconnu) :
```
TANT QUE condition
    instruction(s)
FIN TANT QUE
```

### 4.6 - Les fonctions en algorithmique

```
FONCTION addition(a : ENTIER, b : ENTIER) : ENTIER
    RETOURNER a + b
FIN FONCTION
```

📖 **Ressources algorithmique** :
- [Cours d'algorithmique - France IOI](http://www.france-ioi.org/)
- [Algorithmique pour l'apprenti programmeur - OpenClassrooms](https://openclassrooms.com/fr/courses/7527306-decouvrez-le-fonctionnement-des-algorithmes)
- Il existe de nombreux exercices d'algorithmique sur des plateformes comme [LeetCode](https://leetcode.com/), [HackerRank](https://www.hackerrank.com/domains/algorithms) ou [CodeWars](https://www.codewars.com/).
- [Pseudo-code](https://fr.wikipedia.org/wiki/Pseudo-code) : un langage de description d'algorithmes, plus proche du langage naturel que du code source.

Vous verrez que les concepts d'algorithmique sont universels et s'appliquent à tous les langages de programmation, y compris PHP. Vous aurez un cours dédié à l'algorithmique avancée, mais il est important de maîtriser ces bases dès le début.

> 💡 **Conseil** : Avant d'écrire du code PHP, écrivez d'abord votre algorithme en pseudo-code !

---

[Retour à la table des matières](#table-des-matières)

---

## 5 - Les bases de PHP

### 5.1 - Les fichiers PHP

Les fichiers PHP sont des fichiers texte enregistrés avec l'extension `.php`. Le code PHP est exécuté **sur le serveur**, et le résultat est renvoyé au navigateur sous forme de code HTML (ou autre).

### 5.2 - Les balises PHP

Le code PHP est écrit entre les balises `<?php` et `?>`.


```php
<?php
echo "Hello World";
?>
```

Il existe une **balise courte** `<?= ?>` équivalente à `<?php echo ?>` :


```php
<?= "Hello World" ?>
```

**Règles importantes :**

- Le `;` termine chaque instruction (première cause d'erreur pour les débutants !)
- Le `;` est **facultatif** juste avant `?>`
- Si le fichier ne contient **que du PHP**, on **ne ferme pas** la balise `?>` (bonne pratique)


```php
<?php
echo "Hello World";
echo "<br>Hello friends";
// Pas de ?> en fin de fichier = bonne pratique
```

📖 [Documentation : Balises PHP](https://www.php.net/manual/fr/language.basic-syntax.phptags.php)

#### ✏️ Exercice 01
> Créez un fichier `01-hello-world.php` dans votre dossier `Stagiaires\{Prenom}\` qui affiche **"Hello World"** dans le navigateur.

#### ✏️ Exercice 02
> Créez un fichier `02-hello-world-short.php` dans votre dossier `Stagiaires\{Prenom}\` qui affiche **"Hello World"** en utilisant la balise courte `<?= ?>`.

#### ✏️ Exercice 03
> Créez un fichier `03-hello-friends.php` dans votre dossier `Stagiaires\{Prenom}\` qui affiche **"Hello World"** suivi de **"Hello friends"** sur la ligne suivante.

---

### 5.3 - Les commentaires

Les commentaires sont des lignes **non exécutées** par le serveur. Ils servent à documenter et rendre le code lisible.

```php
<?php
// Commentaire sur une ligne

# Commentaire sur une ligne (style shell)

/*
Commentaire
sur plusieurs lignes
*/
```

📖 [Documentation : Commentaires](https://www.php.net/manual/fr/language.basic-syntax.comments.php)

#### ✏️ Exercice 04
> Créez un fichier `04-commentaires.php` dans votre dossier `Stagiaires\{Prenom}\` qui **n'affiche rien** dans le navigateur, mais contient les trois types de commentaires.

---

### 5.4 - Placement des balises PHP dans le HTML

Les balises PHP peuvent être placées **n'importe où** dans un document HTML :

```php
<?php
  // Code PHP en début de fichier
  $date = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Ma page - <?= date("H:i") ?></title>
</head>
<body>
  <h1>Date : <?= $date ?></h1>
  <p>Il est <?= date("H:i:s") ?></p>
</body>
</html>
```

Nous avons utilisé la fonction native `date()` et stocké le résultat dans une **variable** `$date`.

📖 [Documentation : date()](https://www.php.net/manual/fr/function.date.php) | [Formats de date](https://www.php.net/manual/fr/datetime.format.php)

#### ✏️ Exercice 05
> Créez un fichier `05-php-placement.php` dans votre dossier `Stagiaires\{Prenom}\` qui affiche la date et l'heure du serveur dans une page HTML complète.

---

[Retour à la table des matières](#table-des-matières)

---

## 6 - Les variables

Une variable est un **conteneur pour stocker des informations**. C'est la **première brique** d'un langage de programmation.

**Règles de nommage :**
- Commence par `$` suivi d'une lettre ou `_`
- Ne contient que des lettres, chiffres et `_`
- **Sensible à la casse** (`$nom` ≠ `$Nom`)
- Peut changer de type après sa création (typage non strict)

📖 [Documentation : Variables](https://www.php.net/manual/fr/language.variables.basics.php) | [Variables prédéfinies](https://www.php.net/manual/fr/reserved.variables.php)

### 6.1 - Déclaration de variables non strictement typées

```php
<?php
// string (chaîne de caractères)
$nom_de_variable = "valeur de la variable";

// integer (nombre entier)
$nomDeVariable2 = 123;

// float (nombre décimal)
$NomDeVariable3 = 123.456;

// boolean (vrai ou faux)
$estActif = true; // ou false

// array (tableau indexé)
$nombres = [1, 2, 3];

// array (tableau associatif)
$personne = ["clef1" => "valeur1", "clef2" => "valeur2"];

// null (absence de valeur)
$rien = null;

// Affichage avec le débogueur var_dump()
var_dump($nom_de_variable, $nomDeVariable2, $NomDeVariable3);
```

**Noms de variables NON VALIDES :**

```php
<?php
$Nom de Variable = 5;       // ❌ contient des espaces
$123Nom_De_Variable = 3;    // ❌ commence par un chiffre
$toto@mailcity.com = [];    // ❌ caractère spécial @
$Nom-de-variable = "coucou";// ❌ signe - interdit (kebab-case)
nom_de_variable = "Yes";    // ❌ ne commence pas par $
```

#### ✏️ Exercice 06
> Créez un fichier `06-variables-valides.php` : déclarez des variables de chaque type (string, integer, float, boolean, array, null) et affichez-les avec `var_dump()`.

#### ✏️ Exercice 07
> Créez un fichier `07-variables-non-valides.php` : essayez de déclarer des variables non valides et observez les erreurs.


---


[Retour à la table des matières](#table-des-matières)

---

### 6.2 - Les types de données

| Type | Description | Exemple |
|------|-------------|---------|
| `string` | Chaîne de caractères | `"Bonjour"` |
| `int` (integer) | Nombre entier | `42` |
| `float` | Nombre décimal | `3.14` |
| `bool` (boolean) | Vrai ou faux | `true`, `false` |
| `array` | Tableau | `[1, 2, 3]` |
| `null` | Absence de valeur | `null` |
| `object` | Instance d'une classe | *(cours avancé)* |
| `resource` | Ressource externe | *(fichier, connexion BDD)* |

**Fonctions utiles pour les types :**

```php
<?php
$a = "42";

// Connaître le type
echo gettype($a);      // string
var_dump($a);           // string(2) "42"

// Vérifier le type
is_string($a);          // true
is_int($a);             // false
is_float($a);           // false
is_bool($a);            // false
is_array($a);           // false
is_null($a);            // false
is_numeric($a);         // true (contient un nombre)

// Vérifier l'existence et le contenu
isset($a);              // true (existe et n'est pas null)
empty($a);              // false (n'est pas vide)
```

📖 [Documentation : Types](https://www.php.net/manual/fr/language.types.php)

---

### 6.3 - Le casting (transtypage)

Le casting permet de **convertir** un type en un autre :

```php
<?php
$chaine = "42";

$entier = (int) $chaine;       // 42
$decimal = (float) $chaine;    // 42.0
$booleen = (bool) $chaine;     // true
$tableau = (array) $chaine;    // ["42"]
$redevientChaine = (string) 42;// "42"

// Avec settype()
$var = "123";
settype($var, "integer");
var_dump($var); // int(123)

// Supprimer une variable
$a = 5;
unset($a);
// $a n'existe plus
```

📖 [Documentation : Transtypage](https://www.php.net/manual/fr/language.types.type-juggling.php)

#### ✏️ Exercice 08
> Créez un fichier `08-types.php` : déclarez une variable string contenant `"3.14"`, convertissez-la en int, float et bool, et affichez les résultats avec `var_dump()`.

---

[Retour à la table des matières](#table-des-matières)

---

### 6.4 - Les tableaux

Un tableau est une variable qui peut contenir **plusieurs valeurs**. Les tableaux en PHP sont des structures très flexibles.

📖 [Documentation : Tableaux](https://www.php.net/manual/fr/language.types.array.php) | [Fonctions de tableaux](https://www.php.net/manual/fr/ref.array.php)

```php
<?php
// Deux syntaxes équivalentes
$voitures = array("Volvo", "BMW", "Toyota");
$langages = ["PHP", "MySQL", "JavaScript"];
```

#### 6.4.1 - Les tableaux indexés

Un tableau indexé possède des clés numériques **automatiques à partir de 0**.

```php
<?php
$fruits = ["pomme", "poire", "banane", "fraise", "cerise"];

// Accéder à un élément
echo $fruits[0]; // pomme
echo $fruits[2]; // banane

// Compter les éléments
echo count($fruits); // 5

// Ajouter un élément
$fruits[] = "kiwi"; // ajouté à l'index 5
```

#### ✏️ Exercice 09
> Créez `09-array-index.php` : déclarez `$monTab = ['un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix'];` et affichez chaque élément séparé par un `<hr>` en utilisant `echo` et les index.

---

[Retour à la table des matières](#table-des-matières)

---

#### 6.4.2 - Les tableaux associatifs

Les clés sont des **chaînes de caractères**.

```php
<?php
$personne = [
    "prenom" => "Michaël",
    "nom" => "Pitz",
    "age" => 42
];

echo $personne["prenom"]; // Michaël
echo $personne["age"];    // 42
```

#### ✏️ Exercice 10
> Créez `10-array-assoc.php` : déclarez `$monTabAssoc = ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique", "dateDeNaissance" => "1951-03-02"];` et affichez chaque valeur séparée par un `<hr>`.

---

[Retour à la table des matières](#table-des-matières)

---

#### 6.4.3 - Les tableaux multidimensionnels

Des tableaux qui contiennent **d'autres tableaux** :

```php
<?php
$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
];

// Accéder au github de Marie
echo $stagiaires["WEBDEV02"]["Sites"]["github"];
// https://github.com/marie
```

#### ✏️ Exercice 11
> Créez `11-array-multi.php` : créez un tableau multidimensionnel de 3 stagiaires avec nom, prénom et un sous-tableau de sites (perso + github). Affichez le github du troisième stagiaire.

---

[Retour à la table des matières](#table-des-matières)

---

### 6.5 - Les variables superglobales

Les variables superglobales sont des variables prédéfinies **toujours accessibles** dans tous les contextes. Ce sont des **tableaux associatifs**.

| Variable | Description |
|----------|-------------|
| `$_GET` | Données de l'URL (méthode GET) |
| `$_POST` | Données de formulaire (méthode POST) |
| `$_REQUEST` | Fusion de `$_GET`, `$_POST` et `$_COOKIE` |
| `$_SESSION` | Données de session |
| `$_COOKIE` | Données des cookies |
| `$_FILES` | Fichiers uploadés |
| `$_SERVER` | Informations serveur et en-têtes HTTP |
| `$_ENV` | Variables d'environnement |
| `$GLOBALS` | Toutes les variables globales |

📖 [Documentation : Superglobales](https://www.php.net/manual/fr/language.variables.superglobals.php)

**Exemple avec `$_GET` :**

L'URL `page.php?section=contact&page=3` remplira `$_GET` ainsi :

```php
<?php
var_dump($_GET);
// array(2) { ["section"]=> string(7) "contact" ["page"]=> string(1) "3" }

echo $_GET["section"]; // contact
```

#### ✏️ Exercice 12
> Créez `12-GET.php` : une page HTML avec 4 liens qui pointent vers des variables GET différentes (ex: `?section=accueil`, `?section=contact`, etc.). Affichez le contenu de `$_GET` avec `var_dump()`.

---

[Retour à la table des matières](#table-des-matières)

---

## 7 - Les constantes

Une constante est un identifiant dont la valeur **ne peut pas changer** durant l'exécution du script.

**Bonnes pratiques** : MAJUSCULES en `SNAKE_CASE`.

```php
<?php
// Avec define()
define("NOM_DU_SITE", "CF2M WebDev");
echo NOM_DU_SITE; // CF2M WebDev

// Avec const
const VERSION = "2.0";
echo VERSION; // 2.0

// Les constantes sont GLOBALES
function afficherSite() {
    echo NOM_DU_SITE; // Accessible partout !
}
```

**Constantes magiques** (changent selon le contexte) :

| Constante | Description |
|-----------|-------------|
| `__LINE__` | Numéro de ligne actuel |
| `__FILE__` | Chemin complet du fichier |
| `__DIR__` | Répertoire du fichier |
| `__FUNCTION__` | Nom de la fonction |
| `__CLASS__` | Nom de la classe |
| `PHP_VERSION` | Version de PHP |
| `PHP_INT_MAX` | Valeur max d'un entier |

📖 [Documentation : Constantes](https://www.php.net/manual/fr/language.constants.php)

---

[Retour à la table des matières](#table-des-matières)

---

## 8 - Les opérateurs

### 8.1 - Les opérateurs arithmétiques

| Opérateur | Description | Exemple | Résultat |
|-----------|-------------|---------|----------|
| `+` | Addition | `5 + 3` | `8` |
| `-` | Soustraction | `5 - 3` | `2` |
| `*` | Multiplication | `5 * 3` | `15` |
| `/` | Division | `10 / 3` | `3.333…` |
| `%` | Modulo (reste) | `10 % 3` | `1` |
| `**` | Puissance | `2 ** 3` | `8` |

📖 [Documentation : Opérateurs arithmétiques](https://www.php.net/manual/fr/language.operators.arithmetic.php)

---

### 8.2 - Les opérateurs de comparaison

| Opérateur | Description | Exemple |
|-----------|-------------|---------|
| `==` | Égal à (valeur) | `5 == "5"` → `true` |
| `===` | Strictement égal (valeur ET type) | `5 === "5"` → `false` |
| `!=` ou `<>` | Différent de | `5 != 3` → `true` |
| `!==` | Strictement différent | `5 !== "5"` → `true` |
| `<` | Inférieur à | `3 < 5` → `true` |
| `>` | Supérieur à | `5 > 3` → `true` |
| `<=` | Inférieur ou égal | `5 <= 5` → `true` |
| `>=` | Supérieur ou égal | `5 >= 3` → `true` |
| `<=>` | Comparaison combinée (spaceship) | `1 <=> 2` → `-1` |

> ⚠️ **Attention** : `==` compare les valeurs sans vérifier le type. Utilisez `===` quand c'est possible pour éviter des bugs subtils !

📖 [Documentation : Opérateurs de comparaison](https://www.php.net/manual/fr/language.operators.comparison.php)

---

### 8.3 - Les opérateurs logiques

| Opérateur | Description | Détails |
|-----------|-------------|---------|
| `&&` ou `and` | ET | Toutes les conditions doivent être vraies |
| `\|\|` ou `or` | OU | Au moins une condition doit être vraie |
| `xor` | OU exclusif | Une seule des conditions doit être vraie |
| `!` | NON (Not) | Inverse la condition |

```php
<?php
$age = 25;
$estMajeur = ($age >= 18);       // true
$estJeune = ($age < 30);         // true

if ($estMajeur && $estJeune) {
    echo "Majeur et jeune";
}

if (!$estMajeur) {
    echo "Mineur";
}
```

📖 [Documentation : Opérateurs logiques](https://www.php.net/manual/fr/language.operators.logical.php)

---

### 8.4 - Les opérateurs d'affectation

| Opérateur | Description | Équivalent |
|-----------|-------------|------------|
| `=` | Affectation | `$a = 5` |
| `+=` | Addition et affectation | `$a = $a + 2` |
| `-=` | Soustraction et affectation | `$a = $a - 2` |
| `*=` | Multiplication et affectation | `$a = $a * 2` |
| `/=` | Division et affectation | `$a = $a / 2` |
| `%=` | Modulo et affectation | `$a = $a % 2` |
| `.=` | Concaténation et affectation | `$a = $a . " suite"` |

📖 [Documentation : Opérateurs d'affectation](https://www.php.net/manual/fr/language.operators.assignment.php)

---

### 8.5 - Les opérateurs d'incrémentation et décrémentation

```php
<?php
$a = 1;
echo $a++;  // Affiche 1, PUIS incrémente → $a vaut 2
echo $a;    // 2
echo ++$a;  // Incrémente PUIS affiche → 3
echo $a--;  // Affiche 3, PUIS décrémente → $a vaut 2
echo --$a;  // Décrémente PUIS affiche → 1
```

> 💡 **Pré-incrémentation** (`++$a`) : incrémente **avant** l'utilisation.
> **Post-incrémentation** (`$a++`) : incrémente **après** l'utilisation.

📖 [Documentation : Incrémentation](https://www.php.net/manual/fr/language.operators.increment.php)

---

### 8.6 - L'opérateur de concaténation

Le point `.` sert à coller des chaînes de caractères ensemble :

```php
<?php
$prenom = "Jean";
$nom = "Dupont";

// Concaténation
echo $prenom . " " . $nom; // Jean Dupont

// Concaténation avec affectation
$phrase = "Bonjour";
$phrase .= " le monde";
echo $phrase; // Bonjour le monde

// Interpolation dans les guillemets doubles
echo "Bonjour $prenom $nom"; // Bonjour Jean Dupont
echo "Bonjour {$prenom} {$nom}"; // Bonjour Jean Dupont (recommandé)

// ⚠️ Pas d'interpolation dans les guillemets simples !
echo 'Bonjour $prenom $nom'; // Bonjour $prenom $nom (littéral)
```

---

[Retour à la table des matières](#table-des-matières)

---

## 9 - Les conditions

Les conditions sont la **deuxième brique fondamentale** d'un langage de programmation. Elles permettent d'évaluer l'état de propositions et d'exécuter du code en conséquence.

### 9.1 - if / else / elseif

```php
<?php
// if simple
$a = true;
if ($a) {
    echo "ok";
}

// if / else
$a = false;
if ($a) {
    echo "ok";
} else {
    echo "ko";
}

// if / elseif / else
$temperature = mt_rand(-100, 200);

if ($temperature <= 0) {
    echo "L'eau est solide à {$temperature}°";
} elseif ($temperature < 100) {
    echo "L'eau est liquide à {$temperature}°";
} else {
    echo "L'eau est gazeuse à {$temperature}°";
}
```

#### ✏️ Exercice 13
> Créez `13-eau.php` : générez une température aléatoire entre -100 et 200° et affichez l'état de l'eau (solide ≤ 0, liquide entre 1 et 99, gazeux ≥ 100).

#### ✏️ Exercice 14
> Créez `14-pair.php` : générez un nombre aléatoire entre 1 et 20 avec `mt_rand()`. S'il est pair, affichez "Le nombre X est pair", sinon "Le nombre X est impair". **Indice** : utilisez l'opérateur modulo `%`.

#### ✏️ Exercice 15
> Créez `15-conditions.php` : générez un chiffre entre 0 et 10, puis affichez : 0-3 → "X : Nul, étudie la prochaine fois", 4-5 → "X : Peut mieux faire", 6-7 → "X : Bien", 8-10 → "X : Très bien".

---

### 9.2 - switch

Le `switch` vérifie l'égalité **non stricte** d'une variable contre plusieurs cas. Plus lisible que de multiples `elseif` pour des comparaisons d'égalité.

> ⚠️ Le `switch` de PHP est **non strict** (`==`), contrairement à celui de JavaScript (`===`).
> **Attention** : sans `break`, l'exécution continue dans les cas suivants (effet de chute).
> La syntaxe moderne de `match` (PHP 8) est strict et retourne une valeur, sans risque d'oubli de `break`. Nous verrons `match` par la suite.

```php
<?php
$note = mt_rand(1, 4);

switch ($note) {
    case 1:
        echo "Première place, bravo !";
        break; // IMPORTANT : sans break, l'exécution continue !
    case 2:
        echo "Deuxième place";
        break;
    case 3:
        echo "Troisième place";
        break;
    default: // sinon (= else)
        echo "Quatrième place";
}

// Regrouper des cas
switch ($note) {
    case 1:
    case 2:
    case 3:
        echo "Podium !";
        break;
    default:
        echo "Hors podium";
}
```

📖 [Documentation : switch](https://www.php.net/manual/fr/control-structures.switch.php)

#### ✏️ Exercice 15b
> Créez `15b-switch.php` : refaites l'exercice 15 en utilisant un `switch`.

---

### 9.3 - match (PHP 8)

`match` est un `switch` **strict** (`===`) qui retourne une valeur, sans risque d'oubli de `break`.

```php
<?php
$status = 200;

$message = match ($status) {
    200 => "OK",
    301 => "Redirection permanente",
    404 => "Page non trouvée",
    500 => "Erreur serveur",
    default => "Statut inconnu",
};

echo $message; // OK
```

📖 [Documentation : match](https://www.php.net/manual/fr/control-structures.match.php)

---

### 9.4 - L'opérateur ternaire

Une condition condensée sur une seule ligne :

```php
<?php
$age = 20;

// Ternaire classique
$statut = ($age >= 18) ? "Majeur" : "Mineur";

// Opérateur null coalescent (??) - PHP 7+
$nom = $_GET["nom"] ?? "Anonyme";
// Équivaut à : $nom = isset($_GET["nom"]) ? $_GET["nom"] : "Anonyme";
```

📖 [Documentation : Opérateur ternaire](https://www.php.net/manual/fr/language.operators.comparison.php#language.operators.comparison.ternary)

---

### 9.5 - Syntaxe alternative pour les conditions

Utile lorsqu'on mélange PHP et HTML :

```php
<?php $point = mt_rand(0, 10); ?>

<?php if ($point <= 3): ?>
    <p>Nul, étudie la prochaine fois.</p>
<?php elseif ($point < 6): ?>
    <p>Peut mieux faire.</p>
<?php elseif ($point < 8): ?>
    <p>Bien.</p>
<?php else: ?>
    <p>Très bien !</p>
<?php endif; ?>
```

📖 [Documentation : Syntaxe alternative](https://www.php.net/manual/fr/control-structures.alternative-syntax.php)

---

[Retour à la table des matières](#table-des-matières)

---

## 10 - Les boucles

Les boucles permettent de **répéter** des instructions tant qu'une condition est vraie.

> ⚠️ **Danger** : une boucle infinie fera planter le serveur !

### 10.1 - for

La boucle la plus **structurée**, idéale quand on connaît le nombre d'itérations.

```php
<?php
for ($i = 0; $i <= 10; $i++) {
    echo "$i ";
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
```

**Structure** : `for (initialisation; condition; incrémentation)`

#### ✏️ Exercice 16
> Créez `16-boucle-for.php` :
> a) Affichez les nombres de 1 à 100
> b) Affichez les nombres **pairs** de 0 à 50
> c) Affichez un décompte de 10 à 0
> d) Affichez la table de multiplication de 7

---

### 10.2 - foreach

La boucle la **plus utilisée** pour parcourir les tableaux.

```php
<?php
$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];

// Sans la clé
foreach ($fruits as $fruit) {
    echo "$fruit ";
}
// pomme poire banane fraise cerise

// Avec la clé
foreach ($fruits as $index => $fruit) {
    echo "$index : $fruit<br>";
}
// 0 : pomme
// 1 : poire
// etc.

// Tableau associatif
$personne = ["prenom" => "Jean", "nom" => "Dupont", "age" => 30];

foreach ($personne as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
```

#### ✏️ Exercice 17
> Créez `17-boucle-foreach.php` : créez un tableau de 10 prénoms et affichez-les dans une liste HTML `<ul><li>`.

#### ✏️ Exercice 17b
> Créez `17b-foreach-table.php` : créez un tableau associatif avec les données d'un stagiaire (nom, prénom, email, âge) et affichez-les dans un tableau HTML `<table>`.

---

### 10.3 - while

Répète tant qu'une condition est vraie. La plus **souple**.

```php
<?php
$i = 0;
while ($i <= 10) {
    echo "$i ";
    $i++;
}
// 0 1 2 3 4 5 6 7 8 9 10
```

#### ✏️ Exercice 18
> Créez `18-boucle-while.php` : utilisez une boucle while pour afficher les nombres de 1 à 20, en mettant en **gras** les nombres divisibles par 3.

---

### 10.4 - do...while

Exécute les instructions **au moins une fois**, même si la condition est fausse.

```php
<?php
$page = 1;
$totalPages = 4;

echo "Pages : ";
do {
    echo "$page ";
    $page++;
} while ($page <= $totalPages);
// Pages : 1 2 3 4
```

#### ✏️ Exercice 18b
> Créez `18b-do-while.php` : simulez un système de pagination affichant les numéros de page de 1 à N (N aléatoire entre 1 et 10).

---

### 10.5 - break et continue

- `break` : **sort** de la boucle
- `continue` : **saute** à l'itération suivante

```php
<?php
for ($i = 0; $i < 20; $i++) {
    if ($i == 15) break;       // Arrête à 15
    if ($i % 2 != 0) continue; // Saute les impairs
    echo "$i ";
}
// 0 2 4 6 8 10 12 14
```

📖 [Documentation : Boucles](https://www.php.net/manual/fr/language.control-structures.php)

---

[Retour à la table des matières](#table-des-matières)

---

## 11 - Les inclusions de fichiers

Les expressions `include`, `include_once`, `require` et `require_once` permettent d'**inclure et exécuter** un fichier PHP.

### 11.1 - include et include_once

- `include` : inclut le fichier. Si absent → **warning**, le script continue.
- `include_once` : idem, mais n'inclut **qu'une seule fois** le même fichier.

```php
<?php
include("menu.php");         // Inclut menu.php
include("menu.php");         // Inclut une 2ème fois menu.php

include_once("footer.php");  // Inclut footer.php
include_once("footer.php");  // N'inclut PAS une 2ème fois
```

### 11.2 - require et require_once

- `require` : inclut le fichier. Si absent → **erreur fatale**, le script STOPPE.
- `require_once` : idem, mais n'inclut **qu'une seule fois** le même fichier.

```php
<?php
require("config.php");       // Si absent, le script s'arrête
require_once("functions.php"); // Inclus une seule fois
```

> 💡 **Bonne pratique** : utilisez `require_once` pour les fichiers critiques (config, fonctions), `include` pour les templates optionnels.

📖 [Documentation : include](https://www.php.net/manual/fr/function.include.php) | [require](https://www.php.net/manual/fr/function.require.php)

---

### 11.3 - Le contrôleur frontal (Front Controller)

Le contrôleur frontal centralise **toutes les requêtes** vers un seul fichier `index.php` qui redirige vers les bons templates.

**Architecture de fichiers :**

```
projet/
├── index.php           → redirige vers public/
├── public/
│   ├── index.php       → CONTRÔLEUR FRONTAL
│   ├── css/style.css
│   ├── js/script.js
│   └── img/
├── templates/
│   ├── inc/
│   │   ├── menu.php
│   │   └── footer.php
│   ├── accueil.php
│   ├── contact.php
│   ├── actualites.php
│   └── page-404.php
```

**index.php (racine) :**
```php
<?php
header("Location: public");
exit;
```

**public/index.php (contrôleur frontal) :**
```php
<?php
if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'contact':
            include('../templates/contact.php');
            break;
        case 'actualites':
            include('../templates/actualites.php');
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
```

**templates/accueil.php :**
```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'inc/menu.php'; ?>
    <h1>Bienvenue</h1>
    <p>Page d'accueil</p>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
```

> ⚠️ Les chemins CSS/JS/images partent du **contrôleur frontal** (dossier `public/`).

#### ✏️ Exercice 19
> Créez un dossier `19-front-controller/` avec l'architecture ci-dessus. Créez un site de 4 pages (accueil, actualités, contact, mentions légales) avec un menu de navigation par `$_GET` et une page 404.

---

[Retour à la table des matières](#table-des-matières)

---

## 12 - Les fonctions

Une fonction est un **bloc de code réutilisable** qui peut prendre des paramètres et renvoyer une valeur.

- **Fonction** : renvoie une valeur avec `return`
- **Procédure** : ne renvoie rien (affiche directement)

### 12.1 - Les fonctions natives

PHP possède des milliers de fonctions intégrées.

**Fonctions essentielles à connaître :**

| Catégorie | Fonctions |
|-----------|-----------|
| **Affichage** | `echo`, `print`, `var_dump()`, `print_r()` |
| **Types** | `gettype()`, `settype()`, `is_string()`, `is_int()`, `is_array()`, `is_null()`, `is_numeric()`, `isset()`, `empty()`, `unset()` |
| **Chaînes** | `strlen()`, `strtolower()`, `strtoupper()`, `trim()`, `substr()`, `str_replace()`, `strpos()`, `explode()`, `implode()`, `nl2br()`, `htmlspecialchars()`, `htmlentities()`, `ucfirst()`, `lcfirst()`, `str_contains()` (PHP 8), `str_starts_with()` (PHP 8), `str_ends_with()` (PHP 8) |
| **Tableaux** | `count()`, `array_push()`, `array_pop()`, `array_shift()`, `array_unshift()`, `array_merge()`, `array_keys()`, `array_values()`, `in_array()`, `array_search()`, `sort()`, `rsort()`, `ksort()`, `krsort()`, `array_reverse()`, `array_unique()`, `array_slice()`, `array_splice()`, `array_map()`, `array_filter()` |
| **Mathématiques** | `mt_rand()`, `rand()`, `round()`, `ceil()`, `floor()`, `abs()`, `max()`, `min()`, `pow()`, `sqrt()` |
| **Date** | `date()`, `time()`, `mktime()`, `strtotime()` |
| **Fichiers** | `file_get_contents()`, `file_put_contents()`, `fopen()`, `fclose()`, `fwrite()`, `file_exists()`, `is_file()`, `is_dir()` |

📖 [Référence complète des fonctions PHP](https://www.php.net/manual/fr/funcref.php)

---

### 12.2 - Les fonctions personnalisées

```php
<?php
function bonjour() {
    return "Bonjour !";
}

echo bonjour(); // Bonjour !
```

📖 [Documentation : Fonctions](https://www.php.net/manual/fr/language.functions.php)

---

### 12.3 - Les paramètres et arguments

```php
<?php
function addition($a, $b) {
    return $a + $b;
}

echo addition(5, 3); // 8
```

---

### 12.4 - Les paramètres par défaut

```php
<?php
function saluer($prenom = "inconnu", $politesse = "Bonjour") {
    return "$politesse $prenom !";
}

echo saluer("Jean");          // Bonjour Jean !
echo saluer("Marie", "Salut");// Salut Marie !
echo saluer();                // Bonjour inconnu !
```

> ⚠️ Les paramètres avec valeur par défaut doivent être placés **après** ceux sans valeur par défaut.

---

### 12.5 - Les arguments nommés (PHP 8)

Depuis PHP 8, on peut passer les arguments **par leur nom** :

```php
<?php
$texte = "Hello-World";

// Ordre classique
echo str_replace("-", " ", $texte); // Hello World

// Arguments nommés (ordre libre)
echo str_replace(subject: $texte, replace: " ", search: "-"); // Hello World
```

📖 [Documentation : Arguments nommés](https://www.php.net/manual/fr/functions.arguments.php#functions.named-arguments)

---

### 12.6 - Les valeurs de retour

```php
<?php
function estPair($nombre) {
    return $nombre % 2 === 0;
}

if (estPair(4)) {
    echo "4 est pair";  // Affiché
}

if (!estPair(7)) {
    echo "7 est impair"; // Affiché
}
```

#### ✏️ Exercice 20
> Créez `20-ma-fonction.php` : créez une fonction `estPair($n)` qui retourne `true` si le nombre est pair, `false` sinon. Testez-la avec plusieurs nombres.

#### ✏️ Exercice 21
> Créez `21-calculette.php` : créez une fonction `calculSimple($a, $b, $operateur)` qui calcule `+`, `-`, `*`, `/` selon l'opérateur passé en paramètre. Gérez le cas de la division par zéro.

#### ✏️ Exercice 22
> Créez `22-fonctions-string.php` : créez une fonction `inverserMot($mot)` qui retourne le mot à l'envers **sans utiliser** `strrev()`. Testez avec "Bonjour" → "ruojnoB".

---

### 12.7 - Portée des variables (scope)

Les variables déclarées dans une fonction sont **locales** à cette fonction.

```php
<?php
$nom = "Global";

function test() {
    // $nom n'existe PAS ici
    echo $nom; // ⚠️ Warning: Undefined variable
}

// Pour accéder à une variable globale :
function testGlobal() {
    global $nom; // Déconseillé en général
    echo $nom;   // "Global"
}

// Meilleure pratique : passer en paramètre
function afficherNom($nom) {
    echo $nom;
}
afficherNom($nom); // "Global"
```

📖 [Documentation : Portée des variables](https://www.php.net/manual/fr/language.variables.scope.php)

---

[Retour à la table des matières](#table-des-matières)

---

## 13 - Les chaînes de caractères

PHP offre de nombreuses façons de manipuler les chaînes.

```php
<?php
$texte = "  Bonjour le Monde !  ";

echo strlen($texte);           // 23 (longueur)
echo trim($texte);             // "Bonjour le Monde !" (supprime espaces)
echo strtolower($texte);       // "  bonjour le monde !  "
echo strtoupper($texte);       // "  BONJOUR LE MONDE !  "
echo substr($texte, 2, 7);     // "Bonjour" (extraction)
echo str_replace("Monde", "PHP", $texte); // "  Bonjour le PHP !  "
echo strpos($texte, "Monde");  // 16 (position)

// PHP 8+
echo str_contains($texte, "Monde");     // true
echo str_starts_with($texte, "  Bon");  // true
echo str_ends_with($texte, "!  ");      // true

// Découper / Joindre
$mots = explode(" ", trim($texte)); // ["Bonjour", "le", "Monde", "!"]
echo implode("-", $mots);           // "Bonjour-le-Monde-!"

// Sécurité
$html = "<script>alert('XSS')</script>";
echo htmlspecialchars($html); // &lt;script&gt;alert('XSS')&lt;/script&gt;
```

📖 [Documentation : Fonctions de chaînes](https://www.php.net/manual/fr/ref.strings.php)

#### ✏️ Exercice 23
> Créez `23-strings.php` : demandez un prénom via `$_GET` et affichez-le avec la première lettre en majuscule et le reste en minuscule, même si l'utilisateur tape "jEaN".

---

[Retour à la table des matières](#table-des-matières)

---

## 14 - Les formulaires - GET et POST

### 14.1 - $_GET

Les données sont passées **dans l'URL** (visibles).

```html
<form action="traitement.php" method="GET">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
    <button type="submit">Envoyer</button>
</form>
```

```php
<?php
// traitement.php
if (isset($_GET['nom'])) {
    echo "Bonjour " . htmlspecialchars($_GET['nom']);
}
```

### 14.2 - $_POST

Les données sont envoyées **dans le corps de la requête** (invisibles dans l'URL).

```html
<form action="traitement.php" method="POST">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email">
    <label for="message">Message :</label>
    <textarea id="message" name="message"></textarea>
    <button type="submit">Envoyer</button>
</form>
```

```php
<?php
// traitement.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    echo "Email : $email<br>Message : $message";
}
```

### 14.3 - Sécuriser les entrées utilisateur

> ⚠️ **JAMAIS** faire confiance aux données utilisateur !

```php
<?php
// Toujours vérifier et nettoyer les entrées
$nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';

// Vérifier qu'un champ n'est pas vide
if (empty($nom)) {
    echo "Le nom est obligatoire";
}

// Valider un email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "Email invalide";
}
```

📖 [Documentation : filter_input()](https://www.php.net/manual/fr/function.filter-input.php)

#### ✏️ Exercice 24
> Créez `24-formulaire.php` : un formulaire de contact (nom, email, message) en POST. Vérifiez que tous les champs sont remplis et affichez un message de confirmation ou d'erreur.

#### ✏️ Exercice 25
> Créez `25-calculatrice.php` : un formulaire avec deux champs numériques et un select pour l'opération (+, -, *, /). Traitez le calcul en PHP et affichez le résultat.

---

[Retour à la table des matières](#table-des-matières)

---

## 15 - Les fonctions de manipulation de tableaux

```php
<?php
$fruits = ["pomme", "poire", "banane"];

// Ajouter
array_push($fruits, "kiwi");     // Ajoute à la fin
array_unshift($fruits, "cerise");// Ajoute au début
$fruits[] = "mangue";            // Ajoute à la fin (raccourci)

// Retirer
$dernier = array_pop($fruits);   // Retire le dernier
$premier = array_shift($fruits); // Retire le premier

// Rechercher
in_array("poire", $fruits);       // true
$cle = array_search("banane", $fruits); // retourne la clé

// Trier
sort($fruits);       // Tri croissant (réindexe)
rsort($fruits);      // Tri décroissant
asort($fruits);      // Tri croissant (conserve les clés)
ksort($fruits);      // Tri par clé croissante

// Fusionner
$legumes = ["carotte", "tomate"];
$alimentation = array_merge($fruits, $legumes);

// Clés et valeurs
$cles = array_keys($alimentation);
$valeurs = array_values($alimentation);

// Filtrer et transformer
$nombres = [1, 2, 3, 4, 5, 6];
$pairs = array_filter($nombres, fn($n) => $n % 2 === 0);     // [2, 4, 6]
$doubles = array_map(fn($n) => $n * 2, $nombres);             // [2, 4, 6, 8, 10, 12]
```

📖 [Documentation : Fonctions de tableaux](https://www.php.net/manual/fr/ref.array.php)

#### ✏️ Exercice 26
> Créez `26-tableaux-avances.php` : créez un tableau de 10 nombres aléatoires. Triez-le, retirez les doublons, puis affichez le résultat dans un tableau HTML.

---

[Retour à la table des matières](#table-des-matières)

---

## 16 - Les fonctions de date et heure

```php
<?php
// Date actuelle
echo date("Y-m-d");       // 2025-12-15
echo date("d/m/Y");       // 15/12/2025
echo date("H:i:s");       // 14:30:45
echo date("Y-m-d H:i:s"); // Format datetime MySQL

// Timestamp (secondes depuis 01/01/1970)
echo time(); // 1734267045

// Créer une date
echo date("d/m/Y", mktime(0, 0, 0, 12, 25, 2025)); // 25/12/2025

// Parser une date en texte
echo date("d/m/Y", strtotime("next monday")); // prochain lundi
echo date("d/m/Y", strtotime("+1 month"));    // dans 1 mois
echo date("d/m/Y", strtotime("2025-01-01"));  // 01/01/2025

// Formatage jour de la semaine en français
setlocale(LC_TIME, 'fr_FR.UTF-8');
```

**Formats courants :**

| Caractère | Description | Exemple |
|-----------|-------------|---------|
| `Y` | Année (4 chiffres) | 2025 |
| `y` | Année (2 chiffres) | 25 |
| `m` | Mois (01-12) | 03 |
| `d` | Jour (01-31) | 15 |
| `H` | Heure 24h (00-23) | 14 |
| `i` | Minutes (00-59) | 30 |
| `s` | Secondes (00-59) | 45 |
| `l` | Jour de la semaine | Monday |
| `N` | Jour ISO (1=lundi, 7=dimanche) | 3 |

📖 [Documentation : date()](https://www.php.net/manual/fr/function.date.php) | [Formats](https://www.php.net/manual/fr/datetime.format.php)

#### ✏️ Exercice 27
> Créez `27-dates.php` : affichez la date du jour en français (ex: "Nous sommes le vendredi 15 décembre 2025, il est 14h30"), puis calculez et affichez le nombre de jours restants avant le 31 décembre.

---

[Retour à la table des matières](#table-des-matières)

---