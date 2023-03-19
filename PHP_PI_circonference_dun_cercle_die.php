<?php

// Définition d'une constante
define('PI', 3.14159265359);

// Fonction pour calculer la circonférence d'un cercle
function calculerCirconference($rayon) {
  return 2 * PI * $rayon;
}

// Demande à l'utilisateur de saisir le rayon du cercle
echo "Entrez le rayon du cercle : " . PHP_EOL;
$rayon = readline();

// Vérifie si le rayon est un nombre positif
if ($rayon <= 0) {
  die("Le rayon doit être un nombre positif !" . PHP_EOL);
}

// Calcule la circonférence du cercle
$circonference = calculerCirconference($rayon);

// Affiche la circonférence du cercle
echo "La circonférence du cercle de rayon " . $rayon . " est : " . $circonference . PHP_EOL;

?>

// Ce code définit une constante PI, une fonction pour calculer la circonférence d'un cercle, demande à l'utilisateur de saisir le rayon du cercle, vérifie si le rayon est un nombre positif, calcule la circonférence du cercle et l'affiche. Si l'utilisateur saisit un rayon négatif ou nul, le programme s'arrête avec la fonction die() et affiche un message d'erreur.

PHP_EOL est utilisé pour ajouter une ligne vide entre les lignes de texte affichées à l'écran, indépendamment du système d'exploitation utilisé.