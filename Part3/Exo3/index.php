<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 3 - Exo 3</title>
</head>
<body>
    <?php
        $first = 100;
        $second = 74; 
    ?>
    
    <?php
        while ($first >= 10) {
            echo "<p>";
            echo $first * $second;
            echo "<p>";
            $first--;
        }
    ?>

</body>
</html>