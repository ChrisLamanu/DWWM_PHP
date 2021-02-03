<?php
/*
Plugin Name: Copyright plugin
Description: show a copyright in the footer
Author: Kriax
Version: 0.1
*/ 
    add_action("admin_menu", "copyright_admin_setup");
    add_action("wp_footer", "showCopyright");

    function copyright_admin_setup() {
        add_menu_page("Copyright Setup Page", "Copyright Setup", "manage_options", "copyright-plugin", "showCopyright", plugins_url("askip/assets/img/otter.png"));
    }
    
    function showCopyright() {
        echo "<p>Copyright Kriax all right reserved</p>"; 
    }
?>