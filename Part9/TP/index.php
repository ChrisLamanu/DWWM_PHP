<?php
$time_zone = new DateTimeZone("Europe/Paris");
$actual_months;
$min_year = 1500;
$max_year = 2500;
$actual_years;
$date = new DateTime("", $time_zone);
$days = [1 => "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = [1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
$nbCells = count($days) * 6;
$weekIndex = 1;
$dateIndex = 1;
$switchBGColors = true;

(isset($_POST["selectYear"])) ? $actual_years = $_POST["selectYear"] : $actual_years = $date->format("Y");
(isset($_POST["selectMonth"])) ? $actual_months = $_POST["selectMonth"] : $actual_months = $date->format("n");

if (isset($_POST["selectMonth"]) AND isset($_POST["selectYear"]) AND isset($_POST["Submit"])) {
    ($temp_date = new DateTime("", $time_zone))->setDate($actual_years, $actual_months, 1)->modify("last day of this month");
    if ($date->format("d") >= $temp_date->format("d")) {
        $date = $temp_date;
    }
    else {
        ($date = new DateTime("", $time_zone))->setDate($actual_years, $actual_months, $date->format("d"));
        
    }
    $new_date = new DateTime($date->format("d-m-Y"), $time_zone);
    $new_date->modify("first day of this month");
}
else {
    $date = new DateTime("", $time_zone);
    $new_date = new DateTime($date->format("d-m-Y"), $time_zone);
    $new_date->modify("first day of this month");
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 8 - TP</title>
</head>
<body>
    <div class="row justify-content-center m-0">
        <div class="col-12 col-md-8">
            <div id="imgHero" class="container-fluid p-0">
                <img class="w-100 hidden" src="assets/img/2931094.jpg" alt="">

                <form id="formHero" method="post">
                    <div>
                        <select id="selectMonth" class="form-select" name="selectMonth">
                            <?php
                                for ($i = 1; $i <= count($months); $i++) { 
                                    if ($actual_months == $i) {
                                        ?>
                                            <option selected value=<?=$i?>><?=$months[$i]?></option>
                                        <?php
                                    }
                                    else {
                                        ?>
                                            <option  value=<?=$i?>><?=$months[$i]?></option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div>
                        <select id="selectYear" class="form-select" name="selectYear">
                            <?php
                                for ($i = $min_year; $i <= $max_year; $i++) { 
                                    if ($actual_years == $i) {
                                        ?>
                                            <option selected value=<?=$i?>>Année <?= $i?></option>
                                        <?php
                                    }
                                    else {
                                        ?>
                                            <option  value=<?=$i?>>Année <?= $i?></option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <button id="submitBtn" type="submit" name="Submit" class="btn btn-secondary bg-darker text-gold">Appliquer</button>
                </form>    
            </div>
            <div id="rowDays" class="row d-none d-sm-flex m-0 text-center bg-darker">
                <?php
                    foreach($days as $value) {
                        ?>
                            <div class="col p-1 borderDays"><?= $value ?></div>
                        <?php
                    }
                ?>
            </div>
            <div class="row m-0 text-center text-white bg-darker">
                <?php
                    for ($i = 1; $i <= $nbCells; $i++) {
                        if ($i >= $new_date->format("N") && $dateIndex <= $date->format("t")) {
                            if ($switchBGColors) {
                                ?>
                                    <div class="days bg-red-darker">
                                        <div class="text-gold p-1"><?= $days[$weekIndex] ?></div>
                                    </div>
                                    <div class="col cusCol bg-red">
                                <?php
                                $switchBGColors = false;
                            }
                            else {
                                ?>
                                    <div class="days bg-gold-darker">
                                        <div class="text-darker p-1"><?= $days[$weekIndex] ?></div>
                                    </div>
                                    <div class="col cusCol bg-gold">
                                <?php
                                $switchBGColors = true;       
                            }
                                ?>
                                    <div class="dateBadge">
                                        <p><?= $dateIndex ?></p>
                                    </div>
                                    <?= ($dateIndex == $date->format("j")) ? '<div id="actualDayText">V</div>' : "" ?>     
                                </div>
                            <?php
                            $dateIndex++;
                        }
                        else {
                            ?>
                                <div class="col cusCol bg-darker">  </div>
                            <?php
                        }
                        ($weekIndex == count($days)) ? $weekIndex = 1 : $weekIndex++; 
                    }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>