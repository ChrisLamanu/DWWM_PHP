<?php // Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.
$curr_date = new DateTime("", new DateTimeZone("Europe/Paris"));
$date = "2-08-2016 15:00";
$past_date = DateTime::createFromFormat("d-m-Y H:i", $date, new DateTimeZone("Europe/Paris"));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 8 - Exo 4</title>
</head>
<body>
    <div class="row h-100 m-0 align-content-center justify-content-center">
        <div class="col-12 col-md-4 text-center">
            <p>Le timestamp (unix) désigne le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit UTC précise.</p>
            <p>Nous sommes le <?= $curr_date->format("d-m-Y H:i")?>, le timestamp est : <?= $curr_date->getTimestamp()?></p>
            <p>Pour la date du mardi 2 août 2016 à 15h00, le timestamp est : <?= $past_date->getTimestamp()?></p>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>