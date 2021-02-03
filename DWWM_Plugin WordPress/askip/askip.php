<?php
/*
Plugin Name: Askip plugin
Description: Askip sometime i say hello, but hey it's only if i want
Author: Kriax
Version: 0.1
*/ 
    add_action("admin_menu", "askip_admin_setup");

    function askip_admin_setup() {
        add_menu_page("Askip Setup Page", "Askip Setup", "manage_options", "askip-plugin", "askipMessage", plugins_url("askip/assets/img/otter.png"));
    }
    
    function askipMessage() {
        echo "<h1>Hello world!</h1>"; 
    }
?>