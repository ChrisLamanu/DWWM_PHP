<?php
    function concatAll($lastName, $firstName, $age) {
        return "Bonjour $lastName $firstName, tu as $age ans.";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 4 - Exo 6</title>
</head>
<body>
 
<p><?= concatAll("Aznavour", "Charles", 482); ?></p>

</body>
</html>