<?php
/*
  ./noyau/init.php
  Création d'une instance PDO $connexion
*/

//Paramètres de connexion
  // Ca ne changera jamais d'un site à l'autre ------------------
$dsn = "mysql:host=".DBHOTE.";dbname=".DBNAME;
$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

//Création de l'objet PDO $connexion
// PDO a besoin de 4 informations
try {
  $connexion = new PDO($dsn, DBUSER, DBPWD, $param);
}
catch (PDOException $e) {
  die("Problème de connexion à la base de données...");
}
