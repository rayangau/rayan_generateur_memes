<?php
include('models/ImageModels.php');

/***************************/
/*** initialisation Twig ***/
/***************************/
// Charge l'autoloader permettant de charger les classes de TWIG
require 'vendor/autoload.php';
// CHARGE LE LOADER = dossier contenant les templates
$loader = new Twig_Loader_Filesystem('views');
// INITIALISE TWIG = ($loader, tableau d'option environnement)
$twig = new Twig_Environment($loader, [
    // N'active pas le cache (mieux pour le développement)
    'cache'=>false,
    'debug' => true
]);
$twig->addExtension(new Twig_Extension_Debug());


/********************************************************/
/******* Récupération ou traitement des données *********/
/********************************************************/
// On associe une fonction à une variable
$get_all_templates = getAllTemplates();


/******************************************/
/****** Envois des données aux Views ******/
/******************************************/

// On charge le fichier voulus du dossier Views
// On envoie les données à la vue dans un nouveau tableau ListeImages contenant toutes les données de la table 'templates'
echo $twig->render('home.twig', array('ListeImages' => $get_all_templates));

