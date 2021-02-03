<?php
        function checkGenderAge($age, $gender) {
            if ($gender == "homme") {
                if ($age >= 18) {
                    $checkAge = "majeur";
                }
                else {
                    $checkAge = "mineur";
                }

                return "Vous êtes un homme et vous êtes $checkAge";
            }
            else {
                if ($age >= 18) {
                    $checkAge = "majeur";
                }
                else {
                    $checkAge = "mineur";
                }

                return "Vous êtes une femme et vous êtes $checkAge";
            }
        }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 4 - Exo 7</title>
</head>
<body>

<p><?= checkGenderAge(42, "femme"); ?></p>
<p><?= checkGenderAge(15, "femme"); ?></p>
<p><?= checkGenderAge(42, "homme"); ?></p>
<p><?= checkGenderAge(17, "homme"); ?></p>

</body>
</html>