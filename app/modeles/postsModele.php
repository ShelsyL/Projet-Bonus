<?php
/*
    ./app/modeles/postsModele.php
    Modèle des posts
*/

/*Ici on va avoir des fonctions,
  - La première fonction c'est findAll,
    càd c'est ce qui va aller chercher tous les enregistrements dans la table produits,
    qui va faire un return de qq chose.
    */

    namespace Modeles\PostsModele;

    function findAll(PDO $connexion) {
      $sql = "SELECT *
              FROM posts
              LIMIT 10;";
      $rs = $connexion->query($sql);


$posts = $rs->fetchAll(PDO::FETCH_ASSOC);
// On sort (tous les tiroirs) un tableau indéxé de tableaux associatifs
// fetchAll    -> tableau indéxé
// FETCH_ASSOC -> tableaux associatifs
$rs->closeCursor(); // closeCursor() pour libérer
unset($rs); // Pour tuer

return $posts; /* Ce $posts va se retrouver dans postsControleur.php*/
}
