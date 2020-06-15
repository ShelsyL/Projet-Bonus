<?php

/*
    ./app/vues/posts/index.php
    La liste des posts
    Variables disponibles :
      - produits ARRAY(ARRAY(id, title, created_at,resume, image, content)) // $posts qui est un Array (tableau indexé de tableaux associatifs)
 */
 /*
 Ici, On va avoir le code HTML qui correspond à cette vue.
  On a un tableau indexé de tableau associatifs donc => Boucle foreach
 */
 ?>

 <h2>Liste des posts</h2>
 <ul>
  <?php foreach($posts as $post): ?>
    <li>
      <h5><?php echo $post['title']; ?></h5>
      <div><?php echo $post['content']; ?></div>
     </li>
  <?php endforeach; ?>
 </ul>
