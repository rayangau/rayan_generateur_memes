<?php

include('Connexion/ConnectionBDD.php');


function getOneMeme($id) {
  global $dbh;
  
  $memes = $dbh->prepare('SELECT url_meme FROM memes WHERE id='.$id.';');
  $memes->execute([$id]);
  
  return $memes->fetch();
  }
  
  
  function getAllMeme() {
    global $dbh;
    
    $memes = $dbh->prepare('SELECT url_meme FROM memes;');
    $memes->execute();
    
    return $memes->fetchAll();
  }



  // function getOneTemplate($id_template) {
  // global $dbh;
  
  // $template = $dbh->prepare('SELECT id, nom_template, url_template FROM templates WHERE id=?;');
  // $template->execute([$id_template]);
  
  // return $template->fetchAll();
  // }


//   function getOneMovieDirector($id) {
//     global $dbh;

//     $moviesdirectors = $dbh->query('SELECT * FROM films_realisateurs WHERE id_realisateurs='.$id.';');

//     return $moviesdirectors->fetch();
// }