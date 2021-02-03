<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exo - Part2 - PHP 5</title>
</head>
<body>

    <?php $gender = "Homme"; ?>

    <?php
        if ($gender != 'Homme') {
            echo "C'est une développeuse !!!";
        }
        else {
            echo "C'est un développeur !!!";
        }
    ?>
</body>
</html>