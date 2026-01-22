# MD5 Cracker (PHP)

## Description
Ce projet est un exercice en PHP qui consiste à inverser un hash MD5 à l’aide d’une approche par force brute.
L’application teste toutes les combinaisons possibles de codes PIN à quatre chiffres (0000 à 9999) afin de retrouver la valeur originale correspondant à un hash donné.

## Objectifs pédagogiques
- Comprendre le fonctionnement des fonctions de hachage (MD5)
- Manipuler les paramètres GET en PHP
- Valider les entrées utilisateur côté serveur
- Implémenter un algorithme de brute force
- Comparer des hashes de manière correcte
- Mesurer le temps d’exécution d’un algorithme

## Fonctionnement
L’utilisateur fournit un hash MD5 via un paramètre GET nommé `md5`.

Exemple :
index.php?md5=81dc9bdb52d04dc20036dbd8313ed055


Le programme :
- teste tous les PIN de `0000` à `9999`
- calcule le hash MD5 de chaque PIN
- compare le hash calculé avec celui fourni
- affiche le PIN correspondant s’il est trouvé
- affiche `PIN: Not found` si aucune correspondance n’existe

Les 15 premières tentatives sont affichées à des fins de débogage.

## Technologies utilisées
- PHP
- HTML
- Méthode HTTP GET

## Sécurité (remarque)
Cet exercice montre que l’algorithme MD5 n’est pas sécurisé pour le stockage de mots de passe,
car il est vulnérable aux attaques par force brute sur des espaces de recherche réduits.

## Contexte
Exercice réalisé dans le cadre de l’apprentissage du développement web et de la programmation serveur en PHP.
