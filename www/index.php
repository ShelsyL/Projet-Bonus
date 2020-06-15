<?php

/*
    ./www.index.php
    Dispatcher central
*/

  require_once '../noyau/init.php'; // charge la configuration (qui elle meme charge les parametre et la connexion)
  require_once '../app/routeur.php'; // Charge le routeur
  require_once '../app/vues/templates/index.php'; // Charge le templates
require_once '../noyau/connexionKill.php';        // On tue la connexion
