<?php
    $normandy = [];
    $normandy[14] = "Calvados";
    $normandy[27] = "Eure";
    $normandy[50] = "Manche";
    $normandy[61] = "Orne";
    $normandy[76] = "Seine-Maritime";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ExoPHP - Part 5 - Exo 9</title>
</head>
<body>
    <!--  -->
    <?php
        foreach($normandy as $v) {
            echo "<p>Le département $v</p>";
        }
    ?>
    <!--  -->
    <table>
        <thead>
            <tr>
                <th>Département</th>
            </tr>
        </thead>
        <tbody>
            <!--  -->
            <?php
                foreach($normandy as $v) {
                    echo "<tr>
                            <td>$v</td>
                          </tr>";
                }
            ?>
            <!--  -->
            <?php foreach($normandy as $v) { ?>
                    <tr>
                        <td><?= $v ?></td>
                    </tr>
            <?php } ?>
            <!--  -->
        </tbody>
    </table>
</body>
</html>