<?php
$count = 0;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 3 exo 1 php</title>
  </head>
  <body>
    <ul>
      <?php while($count <= 10){ ?>
       <li> <?= $count ?></li>
      <?php $count++;}  ?>
    </ul>
  </body>
</html>
