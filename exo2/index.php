<?php
$first = 0;
$second = random_int(1,100);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Partie 3 exo 2 php</title>
</head>
<body>
    <ul>
      <?php while($first <= 20){  ?>
      <li><?=$first*$second?></li>
      <?php $first++;} ?>
    </ul>
  </body>
  </html>
