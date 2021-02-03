<?php
    $normandy = [];
    $normandy[14] = "Calvados";
    $normandy[27] = "Eure";
    $normandy[50] = "Manche";
    $normandy[61] = "Orne";
    $normandy[76] = "Seine-Maritime";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 5 - Exo 10</title>
</head>
<body>
    <?php
        foreach($normandy as $k => $v) {
            echo "<p>Le département $v a le numéro $k</p>";
        }
    ?>
</body>
</html>