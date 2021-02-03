<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exo - Part2 - PHP 3</title>
</head>
<body>
    <?php $age = 54; $gender = "Femme"; ?>
    
    <?php
        if ($age >= 18) {
            if ($gender == "Homme") {
                echo "Vous êtes un homme et vous êtes majeur";
            }
            else {
                echo "Vous êtes une femme et vous êtes majeur";
            }
        }
        else {
            if ($gender == "Homme") {
                echo "Vous êtes un homme et vous êtes mineur";
            }
            else {
                echo "Vous êtes une femme et vous êtes mineur";
            }
        }
    ?>
</body>
</html>