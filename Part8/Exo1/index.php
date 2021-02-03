<?php
$server =  $_SERVER;

$user_agent = $server["HTTP_USER_AGENT"];
$serv_name = $server["SERVER_NAME"];

($server["REMOTE_ADDR"] == "::1") ? $user_addr = "127.0.0.1" : $user_addr = $server["REMOTE_ADDR"];

$user_host = gethostbyaddr($user_addr);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 8 - Exo 1</title>
</head>
<body>
    <div class="row h-100 m-0 align-content-center justify-content-center">
        <div class="col-12 col-md-4 text-center">
            <?= (isset($user_agent)) ? "<p>User agent du client : $user_agent </p>" : "" ?>
            <?= (isset($user_addr)) ? "<p>IP du client : $user_addr </p>" : "" ?>
            <?= (isset($serv_name)) ? "<p>Nom du server : $serv_name </p>" : "" ?>
            <?= (isset($user_host)) ? "<p>Nom de l'hôte : $user_host </p>" : "" ?>  
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>