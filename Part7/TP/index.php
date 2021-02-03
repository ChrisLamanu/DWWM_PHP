<?php 
    $file_base_path = "assets/img/upload/";
    $file_max_size = 1000000;  
    $file_uploaded;
    $message = "";
    $errorMessage = "";
    $file_img = [
                    "image/gif",
                    "image/jpeg",
                    "image/png",
                    "application/x-shockwave-flash",
                    "image/psd",
                    "image/bmp",
                    "image/tiff",
                    "image/tiff",
                    "application/octet-stream",
                    "image/jp2",
                    "application/octet-stream",
                    "application/octet-stream",
                    "application/x-shockwave-flash",
                    "image/iff",
                    "image/vnd.wap.wbmp",
                    "image/xbm",
                    "image/vnd.microsoft.icon",
                    "image/webp"
                ];

    if (count($_FILES) != 0) {
        $file_uploaded = $_FILES["uploadFile"];
        if ($file_uploaded["size"] < $file_max_size AND !$_FILES["uploadFile"]["error"]) {
            if (in_array(mime_content_type($file_uploaded["tmp_name"]), $file_img)){  
                $pathinfo = pathinfo($file_uploaded["name"]);
                $file_uploaded["name"] = uniqid("", false) . "." . $pathinfo["extension"];
                move_uploaded_file($file_uploaded["tmp_name"], $file_base_path . $file_uploaded["name"]);
                $message = "Le fichier " . $file_uploaded["name"] . " a bien été uploadé";
            }
            else {
                $message = "Votre fichier n'a pas été Upload";
                $errorMessage = "Votre fichier n'est pas une image"; 
            }
        }
        else {
            $message = "Votre fichier n'a pas été Upload";
            $errorMessage = "Désolé, votre fichier doit faire moins de 1Mo";  
        }
    }

    (count(scandir($file_base_path)) > 0) ? $nbImg = count(scandir($file_base_path)) - 2 : $nbImg = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>TP - PHP</title>
</head>
<body>
    <div id="firstRow" class="row flex-grow-1 m-0 align-content-center justify-content-center">
        <div id="firstCol" class="col-12 col-md-8 text-center h-100 d-flex align-items-center justify-content-center flex-column">
            <form class="w-100" id="uploadForm" action="index.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="uploadFile" class="fs-4 fw-bold form-label">Envoyer votre fichier</label>   
                    <input type="file" class="form-control" id="uploadFile" name="uploadFile" required>
                    <?= (!empty($message)) ? "<p> $message </p>" : "" ?>
                    <?= (!empty($errorMessage)) ? "<p> $errorMessage </p>" : "" ?>
                </div>
                <button type="submit" class="btn btn-success">Upload !</button>
            </form>
            <a href="gallery.php"><button type="button" class="btn btn-secondary m-2">Galeries <span class="text-warning"><?= $nbImg ?></span></button></a> 
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>           
</body>
</html>