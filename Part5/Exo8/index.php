<?php
    $months = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 5 - Exo 8</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($months); $i++) { 
            echo "<p>$months[$i]</p>";
        }
    ?>
</body>
</html>