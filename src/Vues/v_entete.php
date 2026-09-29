<?php

/**
 * Vue Entête
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
 * @link      https://getbootstrap.com/docs/3.3/ Documentation Bootstrap v3
 */

?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
        <link href="./styles/bootstrap/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="./styles/style.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <?php
            $uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($estConnecte) {
                ?>
            <div class="header">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h1>
                            <img src="./images/logo.jpg" class="img-fluid" 
                                 alt="Laboratoire Galaxy-Swiss Bourdin" 
                                 title="Laboratoire Galaxy-Swiss Bourdin">
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav nav-pills justify-content-end" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link<?= (!$uc || $uc == 'accueil') ? ' active' : '' ?>" href="index.php">
                                    <i class="bi bi-house"></i>
                                    Accueil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= ($uc == 'gererFrais') ? ' active' : '' ?>"
                                   href="index.php?uc=gererFrais&action=saisirFrais">
                                    <i class="bi bi-pencil"></i>
                                    Renseigner la fiche de frais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= ($uc == 'etatFrais') ? ' active' : '' ?>"
                                   href="index.php?uc=etatFrais&action=selectionnerMois">
                                    <i class="bi bi-card-list"></i>
                                    Afficher mes fiches de frais
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= ($uc == 'deconnexion') ? ' active' : '' ?>"
                                   href="index.php?uc=deconnexion&action=demandeDeconnexion">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            } else {
                ?>   
                <h1>
                    <img src="./images/logo.jpg"
                         class="img-fluid d-block mx-auto"
                         alt="Laboratoire Galaxy-Swiss Bourdin"
                         title="Laboratoire Galaxy-Swiss Bourdin">
                </h1>
                <?php
            }
