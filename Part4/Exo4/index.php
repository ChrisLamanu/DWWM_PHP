<?php
    function checkNb($firstNb, $secondNb) {
        if ($firstNb > $secondNb) {
            $result = "Le premier nombre est plus grand";
        }
        else if ($firstNb < $secondNb) {
            $result = "Le premier nombre est plus petit";
        }
        else {
            $result = "Les deux nombres sont identiques";
        }

        return $result;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 4 - Exo 4</title>
</head>
<body>
    <?= checkNb(10, 5); ?>
</body>
</html>