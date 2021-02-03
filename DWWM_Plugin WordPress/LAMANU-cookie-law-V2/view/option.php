<!-- https://blog.pascal-martin.fr/post/php-5.3-constante-magique-__dir__/ -->
<?php include_once __DIR__ . "/../controller/option_controller.php" ?>

<div id="wpcitrus-row" class="row h-100 m-0 align-content-center justify-content-center">
    <div id="wpcitrus-bg" class="d-none d-md-block col-md-6">

    </div>
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-center">
        <p class="fs-2 m-0 pb-2">ID de suivi</p>

        <form method="post" novalidate>
            <div class="form-floating mb-3">  
                <input type="text" class="form-control" id="google_analytics" placeholder="google_analytics" name="google_analytics" value="<?= get_option('google_analytics','UA-00000000-0'); ?>" required>
                <label for="google_analytics">Ex: G-0Z0Z0Z0Z00</label>

            </div>
            <?php 
                //Cette fonction doit être appelée à l'intérieur de la balise form. C'est pour autoriser l'enregistrement en base
                //settings_fields('LAMANU_GoogleAnalytics');
                //On rappelle le nom de la page d'option
                //do_settings_sections('Configuration'); 
            ?>
            <?= (isset($errorMessage)) ? "<p class='text-danger'>$errorMessage</p>" : "" ?>
            <?= (isset($validateMessage)) ? "<p class='text-success'>$validateMessage</p>" : "" ?>

            <div class="w-100 d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-dark m-1 p-3 text-white fs-4">Sauvegarder !</button>
            </div>

            
            <?= var_dump($_POST) ?>
        </form>
    </div>
</div>
