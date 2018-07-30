<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>exo7</title>
</head>
<body>
  <p>
    <?php
    $genre= 'homme';
    $age= 30;

    function verif($genre, $age){
      if ($age > 0){
        # Verification de la saisie des informations
        if ($genre == 'homme' AND $age >= 18) {
          return 'Vous êtes une homme et vous êtes majeur';
        }
        elseif($genre != 'homme' AND $age >= 18) {
          return 'Vous êtes un femme et vous êtes majeur';
        }
        elseif($genre == 'homme' AND $age < 18) {
          return 'Vous êtes une homme et vous êtes mineur';
        }
        elseif($genre != 'homme' AND $age < 18) {
          return 'Vous êtes un femme et vous êtes mineur';
        }
      }
    }
    echo verif($genre,$age);
    ?>
  </p>
</body>
</html>
