<?php
$age = 18;
$a = 45;
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
  echo "Vous êtes majeur";
}  if ($a == $age) {
  echo "Vous êtes majeur";
} if ($a < $age) {
  echo "Vous êtes mineur";

  }
    ?>
  </p>
</body>
</html>
