<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 7 - Exo 8</title>
</head>
<body>
    <div class="row h-100 m-0 align-content-center justify-content-center">
        <div class="col-12 col-md-4 text-center">
            <?php
                if (count($_GET) == 0 AND count($_POST) == 0) {
                    ?>
                        <form action="index.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="civility" class="form-label">Civilité</label>
                                <select class="form-select" aria-label="Civility select" id="civility" name="civility" required>
                                    <option selected="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </div>
            
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Votre Nom</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="firstName" class="form-label">Votre Prénom</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" required>
                            </div>

                            <div class="mb-3">
                                <label for="resume" class="form-label">Votre Curriculum Vitae</label>
                                <input type="file" class="form-control" id="resume" name="resume" required>
                            </div>
            
                            <button type="submit" class="btn btn-secondary">Envoyer</button>
                        </form>
                    <?php
                } 
                else {
                    if (isset($_POST["civility"]) AND isset($_POST["lastName"]) AND isset($_POST["firstName"])) {
                        ?>

                        <p class="fs-1 fw-bold">Bonjour <?= htmlspecialchars($_POST["civility"]) ?> <?= htmlspecialchars($_POST["lastName"]) ?> <?= htmlspecialchars($_POST["firstName"]) ?></p>

                        <?php
                    }
                    else {
                        ?>

                        <p class="fs-1 fw-bold">Bonjour <?= htmlspecialchars($_GET["civility"]) ?> <?= htmlspecialchars($_GET["lastName"]) ?> <?= htmlspecialchars($_GET["firstName"]) ?></p>
                        
                        <?php
                    }
                    if (isset($_FILES["resume"]) AND $_FILES["resume"]["type"] == "application/pdf") {
                        ?>

                        <p class="fs-5 fw-bold text-success">Votre curriculum vitae a bien été uploader !</p>

                        <?php     
                    }
                    else {
                        ?>

                        <p class="fs-5 fw-bold text-danger">ERREUR - Votre fichier n'a pu être uploadé merci d'envoyer un fichier de type PDF uniquement !</p>

                        <?php   
                    }
                    ?>

                    <a href="index.php"><button type="submit" class="btn btn-secondary">Retour INDEX</button></a>

                    <?php
                }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>