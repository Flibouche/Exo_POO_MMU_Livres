<?php

echo "<h1>Exercice de POO : Livres</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Auteur(s) =====================// 

$a1 = new Auteur("King", "Stephen");
$a2 = new Auteur("Lovecraft", "H.P");

//===================== Livre(s) =====================// 

$l1 = new Livre($a1, "Ca", 1986, 1138, 20);
$l2 = new Livre($a1, "Simetierre", 1983, 374, 15);
$l3 = new Livre($a1, "Le Fléau", 1978, 823, 14);
$l4 = new Livre($a1, "Shining", 1977, 447, 16);
$l5 = new Livre($a2, "Le Mythe de Cthulhu", 1928, 578, 10);
$l6 = new Livre($a2, "Les Montagnes hallucinées", 1936, 725, 11.25);

//===================== Echo =====================// 

// Méthode à appliquer si beaucoup d'auteurs différents.

$auteurs = [$a1, $a2];

foreach($auteurs as $auteur) {
    echo $auteur->afficherBibliographie();
}

?>