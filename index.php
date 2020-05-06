<?php
$age = 18;
$a = 2;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex1 partie1 php</title>
</head>
<body>
  <p>
    <?php
    if ($a > $age) {
  echo $a."Vous êtes majeur".$age;
} else if ($a == $age) {
  echo $a."Vous êtes majeur".$age;
} else ($a < $age) {
  echo $a."Vous êtes mineur".$age;
endif;
  }
    ?>
  </p>
</body>
</html>
