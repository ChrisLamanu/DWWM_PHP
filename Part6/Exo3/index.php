<!-- 
    https://www.php.net/manual/fr/reserved.variables.get.php
    https://www.php.net/manual/fr/function.isset.php
    https://www.php.net/manual/fr/function.htmlspecialchars.php
 -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 6 - Exo 3</title>
</head>
<body>
    <div class="row h-100 m-0 align-content-center">
        <div class="col-12 text-center">
            <a href="index.php?startDate=01/09/2019&endDate=17/03/2020"><button type="submit" class="btn btn-primary">Envoie des paramètres</button></a>
            <a href="index.php"><button type="submit" class="btn btn-secondary">Retour INDEX</button></a>

            <?php
                if (isset($_GET["startDate"]) AND isset($_GET["endDate"])) {
                    $startDate = htmlspecialchars($_GET["startDate"]);
                    $endDate = htmlspecialchars($_GET["endDate"]);

                    echo "<p>Commence le $startDate et finit le $endDate</p>";
                    ?>
                    
                    <p>Commence le <?= $startDate ?> et finit le <?= $endDate ?></p>
                    
                    <?php
                }
                var_dump($_GET);
                print_r($_GET);
            ?>
            
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>