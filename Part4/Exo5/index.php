<?php
    function concatCharNb($firstNb, $firstChar) {
        return $firstNb . " " . $firstChar;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 4 - Exo 5</title>
</head>
<body>

<p><?= concatCharNb(5, "char"); ?></p>

</body>
</html>