<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 3 - Exo 4</title>
</head>
<body>
    <?php
        $first = 1;
    ?>
    
    <?php
        while ($first <= 10) {
            echo "<p>";
            echo $first;
            echo "<p>";
            $first += $first / 2;
        }
    ?>

</body>
</html>