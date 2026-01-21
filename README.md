# Guessing Game – PHP

## Description
Ce mini-projet est un exercice en PHP dont l’objectif est de gérer une valeur envoyée par l’utilisateur via un paramètre GET et de vérifier si elle correspond à un nombre secret.

## Objectifs pédagogiques
- Comprendre le fonctionnement des paramètres GET
- Valider les entrées utilisateur côté serveur
- Gérer les cas limites (paramètre manquant, vide, non numérique)
- Comparer une valeur fournie par l’utilisateur à une valeur fixe

## Fonctionnement
Le script attend un paramètre `guess` passé dans l’URL.

Selon la valeur fournie, le programme affiche :
- un message indiquant que le paramètre est manquant
- un message indiquant que la valeur est trop courte
- un message indiquant que la valeur n’est pas un nombre
- un message indiquant que la valeur est trop basse
- un message indiquant que la valeur est trop élevée
- un message de félicitations si la valeur est correcte

## Exemple d’utilisation
guess.php?guess=25


## Technologies utilisées
- PHP
- HTTP GET

## Contexte
Exercice réalisé dans le cadre de l’apprentissage des bases du développement web en PHP, avec validation automatique via un auto-grader.
