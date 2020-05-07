<?php
$age = 130;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex1 partie2 php</title>
</head>
<body>
  <?php if ($age >= 18 && $age < 120) { ?>
    <p>Vous êtes majeur</p>
  <?php } elseif ($age < 18 && $age > 0) { ?>
    <p>Vous êtes mineur</p>
  <?php } else { ?>
    <p>tu ne peux pas être mineur</p>
  <?php } ?>
</body>
</html>
