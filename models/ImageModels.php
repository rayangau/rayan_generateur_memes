<?php

include('Connexion/ConnectionBDD.php');


function getAllTemplates() {
  global $dbh;
  
  $templates = $dbh->prepare('SELECT * FROM templates');
  $templates->execute();
  
  return $templates->fetchAll();
  }
  
  // function getOneTemplate($id_template) {
  // global $dbh;
  
  // $template = $dbh->prepare('SELECT id, nom_template, url_template FROM templates WHERE id=?;');
  // $template->execute([$id_template]);
  
  // return $template->fetchAll();
  // }


