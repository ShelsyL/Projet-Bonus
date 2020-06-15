<?php
/*
/app/controleurs/PostsControleur.php
Contrôleur des posts
C'est un ensemble de fonctions nommées Actions
Hydrater les zones dynamiques du templates ($content)
*/


namespace Controleurs\PostsControleur;


    function indexAction(PDO $connexion){
      include_once '../app/modeles/postsModele.php'; // Je demande au modèle la liste des produits
      $posts = findAll($connexion); // Va me chercher tous les posts
                                    // résultat de la fonction appelée findAll(), pour aller chercher tous les modeles


    // 2. Je charge la vue index dans $content
    GLOBAL $content; // GLOBAL car on va MODIFIER la variable $content qui est définie à la racine
    ob_start();  // On doit mettre une vue dans $content, donc on passe par un tampon
      include '../app/vues/posts/index.php';
    $content = ob_get_clean(); // On met cette vue (ce tampon) dans $content
    }
