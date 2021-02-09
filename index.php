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

$newMaison = new Maison();
echo $newMaison;