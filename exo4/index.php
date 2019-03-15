<?php $count = 1 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 3 exo 4 php</title>
  </head>
  <body>
    <ul>
    <?php while($count <10){ ?>
      <li><?= $count ?></li>
      <?php $count += ($count/2);} ?>
    </ul>
  </body>
</html>
