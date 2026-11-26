<?php

/**
 * Gestion de l'accueil
 *
 * PHP Version 8
 *
 * @category  PPE
 * @package   GSB
 * @author    Réseau CERTA <contact@reseaucerta.org>
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2026 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

if ($estConnecte) {
    include_once PATH_VIEWS . 'v_enteteComptable.php';
	$lesVisiteurs = $pdo->getVisiteurs();
    // Afin de sélectionner par défaut le dernier mois dans la zone de liste
    // on demande toutes les clés, et on prend la première,
     // les mois étant triés décroissants
    include PATH_VIEWS . 'v_listeVisiteur.php';
} else {
    include PATH_VIEWS . 'v_connexion.php';
}
