<?php

/******************************/
/********** ROOTING ***********/
/******************************/

// Page vaut home par défaut
$page = 'home';

// Si tu as une valeur pour $_GET['p']
if (isset($_GET['page'])) {

    $page = $_GET['page'];

}


include('Controllers/'.$page.'Controller.php');







/******************************/
/*** Liens utile pour TWIG ****/
/******************************/

// Doc TWIG :
//https://twig.symfony.com/doc/2.x/api.html#twig-loader-filesystem

//Video Graffikart :
//https://www.youtube.com/watch?v=mpTtPt62s_w