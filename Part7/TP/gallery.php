<?php 
    $file_base_path = "assets/img/upload/";
    $scan_file = scandir($file_base_path);

    for ($i=0; $i < count($scan_file); $i++) { 
        if ($scan_file[$i] == "." || $scan_file[$i] == "..") {
            unset($scan_file[$i]);
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>TP - PHP</title>
</head>
<body>
    <div id="firstRow" class="row flex-grow-1 m-0 align-content-center justify-content-center">
        <div id="firstCol" class="col-12 col-md-8 text-center h-100 d-flex align-items-center justify-content-center flex-column">
            <div class="card-columns">
                <?php
                foreach ($scan_file as $value) {
                    ?>
                        <div class="card">      
                            <img src="<?= $file_base_path ?><?= $value ?>" class="card-img-top" alt="<?= $value ?>">
                        </div>
                    <?php
                }
                ?>
            </div>
            <a href="index.php"><button type="submit" class="btn btn-secondary">Retour Upload !</button></a>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>           
</body>
</html>