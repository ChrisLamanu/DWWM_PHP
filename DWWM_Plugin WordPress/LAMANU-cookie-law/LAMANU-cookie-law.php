<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://www.
Description: WordPress Plugin for european cookie law.
Author: TotoAuthor URI: http://www.
*/

    function LAMANU_scripts() {
        //initialisation du script Tarte au citron
        echo '<script type="text/javascript" src="' . plugin_dir_url(__FILE__) . 'js/tarteaucitron/tarteaucitron.js"></script>

        <script type="text/javascript">
        tarteaucitron.init({
            "hashtag": "#tarteaucitron",
            "highPrivacy": false,
            "orientation": "bottom",
            "adblocker": false,
            "showAlertSmall": true,
            "cookieslist": true,
            "removeCredit": false
        });
        tarteaucitron.user.analyticsUa = \'' . get_option('google_analytics', 'UA-00000000-0') . '\';
        tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */
        };
        (tarteaucitron.job = tarteaucitron.job || []).push("analytics");
        </script>';
    }

    function LAMANU_admin_menu() {
        add_menu_page("Page de config de gestion des cookies", "Gestion des cookies", "manage_options", "Configuration", "LAMANU_admin_menu_page");
    }

    // fonction permettant de faire des champs dans la partie admin.
    function register_settings() {
        // déclaration du champ pour récupérer l'UA du compte Google Analytics. Il faut le mettre en liste blanche pour que WP l'enregistre en base.
        register_setting('LAMANU_GoogleAnalytics', 'google_analytics');
    }

    //fonction permettant de charger la vue de la page de configuration.
    function LAMANU_admin_menu_page() {
        require_once( plugin_dir_path(__FILE__) . 'view/option.php' );
    }

    add_action("wp_head", "LAMANU_scripts");
    add_action("admin_menu", "LAMANU_admin_menu");
    add_action("admin_init", "register_settings");
?>

