<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 3 - Exo 2</title>
</head>
<body>
    <?php
        $first = 0;
        $second = 29; 
    ?>
    
    <?php
        while ($first < 20) {
            echo "<p>";
            echo $first * $second;
            echo "<p>";
            $first++;
        }
    ?>

</body>
</html>