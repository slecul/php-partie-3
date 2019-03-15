<?php
$first = 100;
$second = random_int(1,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 2 exo 3 php</title>
  </head>
  <body>
    <ul>
      <?php while($first >= 10){ ?>
      <li><?=$first*$second?></li>
      <?php $first--; } ?>
    </ul>
  </body>
</html>
