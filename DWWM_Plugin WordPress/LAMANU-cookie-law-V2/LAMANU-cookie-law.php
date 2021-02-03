<?php
/*
Plugin Name: LAMANU-cookie-law-V2
Version: 0.1
Plugin URI: http://www.
Description: WordPress Plugin for european cookie law.
Author: TotoAuthor URI: http://www.
*/

    function LAMANU_scripts_setup() {
        add_menu_page("LAMANU Setup Page", "LAMANU Setup", "manage_options", "Configuration", "LAMANU_admin_panel", plugins_url("askip/assets/img/otter.png"));
    }
 
    function script_load() {
        // include "LAMANU-cookie-law/js/tarteaucitron/tarteaucitron.js";
        // wp_enqueue_script("bootstrap-script", plugin_dir_url(__FILE__) . "js/bootstrap/bootstrap.js", array(), "1.0.0", true);
        
        wp_enqueue_script("LAMANU-script", plugin_dir_url(__FILE__) . "js/tarteaucitron/tarteaucitron.js", array(), "1.0.0", true);
    }

    function bootstrap_load() {
        wp_enqueue_style("bootstrap-style", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css");
        wp_enqueue_script("jquery-script", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array("jquery"), "", true);
        wp_enqueue_script("popper-script", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js", array("jquery"), "", true);
        wp_enqueue_script("bootstrap-script", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js", array("jquery"), "", true);     
    }

    function LAMANU_admin_panel() {
        wp_enqueue_style("custom-style", plugin_dir_url(__FILE__) . "assets/css/style.css", array(), "1.0.0", false);
        include "view/option.php";
    }

    add_action("wp_head",  "script_load");
    add_action("admin_enqueue_scripts", "bootstrap_load");
    add_action("admin_menu", "LAMANU_scripts_setup");
    // add_action("admin_init", "register_settings");
?>