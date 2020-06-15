<?php
/*
  ./app/routeur.php
  Routeur principal
  Il décide quelle action de quel controleur il faut lancer ...
*/

// $content="<h1>Hello, ça fonctionne :) </h1>"; TEST DE DEPART

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: PostsControleur Le CONTROLEUR, puisque c'est une table posts, on va avoir "postsControleur"
// L'ACTION sera indexAction car c'est la liste des posts

    include_once '../app/controleurs/postsControleur.php';
    indexAction($connexion); /* On lance l'action indexAction qui aura pour rôle
                      d'aller remplir $content avec la liste des produits */
