<?php
    // $firstNB = 2;
    // $secondNB = 5;
    // $thirdNB = 7;

    // function checkGenderAge($fNb, $sNb, $tNb) {
    //     return $fNb + $sNb + $tNb;
    // }
    
    // default are assign here
    function checkGenderAge($firstNB = 2, $secondNB = 2, $thirdNB = 2) {
        return $firstNB + $secondNB + $thirdNB;
    }

    /**
     * function showing a welcome message to player
     * 
     * @param string $lastName getting the lastname of the player
     * @param string $firstName getting the firstname of the player
     * @param string $class getting the class of the player
     * 
     * @param string return the welcome message
     */
    function showWelcomeMessage($lastName, $firstName, $class = "NoClass") {
        return "Welcome in game $lastName $firstName, you have taking the $class class today, good choice ;)";
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 4 - Exo 8</title>
</head>
<body>
    <p><?= checkGenderAge(); ?></p>
    <p><?= showWelcomeMessage("Xavier", "Charles", "Rogue"); ?></p>
</body>
</html>