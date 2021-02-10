<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 * Définissez tous les getters et les setters.
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle
 * contiendra les propriétés:
 *    - garage ( booleen )
 *Définissez tous les getters et les setters.
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies,
 * sauf les setters ( dans index.php ).
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'Habitation.php';
require 'Maison.php';
require 'Appartement.php';

$habitation = new Habitation('Be', 'Gognies-Chaussée', '59600', '2','3');

$maison1 = new Maison('Fr', 'Limont', '59330', '3', '2', true, '1', true);

echo "Maison 1:<br>";
echo "Pays: ".$maison1->getPays()." - Ville: ". $maison1->getVille().
    " - Code: ". $maison1->getCodepost().' - Chambres:'. $maison1->getChambres().
    "- Etages: ". $maison1->getEtage();
echo "<br><br>";

echo "Appart 1:<br>";
$appart1 = new Appartement('Fr', 'Maubeuge','59', '1', '3', true);
echo "Pays: ".$appart1->getPays()." - Ville: ". $appart1->getVille().
    " - Code: ". $appart1->getCodepost(). ' - Chambres: '. $appart1->getChambres().
    " - Pieces: ".$appart1->getPieces();
echo "<br><br>";
