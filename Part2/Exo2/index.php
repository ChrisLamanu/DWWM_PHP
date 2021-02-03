<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exo - Part2 - PHP 2</title>
</head>
<body>
    <?php $isEasy = false; ?>

    <?php echo ($isEasy) ? "C'est facile!!" : "C'est difficile !!!"; ?>

    <?php
        if ($isEasy) {
            echo "C'est facile!!";
        }
        else {
            echo "C'est difficile !!!";
        }
    ?>
</body>
</html>