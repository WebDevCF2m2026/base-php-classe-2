<?php
# Formateur/19-front-controller/config.base.php

/*
* Ce fichier doit être copier en local pour le projet
* sous le nom de config.php
*/

# Racine de notre projet quelque soit le serveur
# Dans une constante (on ne peut la réécrire)
const PATH_TO_PROJECT_ROOT = __DIR__;

# Pages acceptées pour notre site, à ajouter 
# au tableau dans config.php, attention, 
# dans ce système nous utiliserons une sorte
# d'autoload, basé sur le nom du template 
# Ce n'est pas une manière commune de faire 
# du retouge, mais ça le sera dans les appels en
# OO (Orienté objet)
const NOS_PAGES = [];

