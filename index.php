<?php
$object = 'Bonjour, '; //déclaration variable
$message = 'en route pour une aventure'; //variable object et message
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
    echo $object; //affiche la variable $object / $message
    echo $message;
    ?>
  </p>
  <p><?php echo $object . $message; ?></p> <!--ou-->
  <p><?= $object . $message; ?></p> <!--version raccourci-->
</body>
</html>
