<?php
    if (isset($_POST["Submit"])) {
        setcookie("login", $_POST["login"], time() + 365*24*3600);
        setcookie("pwd", $_POST["pwd"], time() + 365*24*3600);
        // $_COOKIE["login"] = $_POST["login"];
        // $_COOKIE["pwd"] = $_POST["pwd"];
        // header("Location: login.php");
    }
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
            <form method="post">
                <div class="mb-3">
                    <label for="login" class="form-label">Votre pseudo</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                
                <div class="mb-3">
                    <label for="pwd" class="form-label">Votre mot de passe</label>
                    <input type="text" class="form-control" id="pwd" name="pwd" required>
                </div>
                
                <button type="submit" name="Submit" class="btn btn-secondary">Se connecter</button>
            </form>
            <a href="account.php" class="btn btn-secondary m-2">Mes Infos</a>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>