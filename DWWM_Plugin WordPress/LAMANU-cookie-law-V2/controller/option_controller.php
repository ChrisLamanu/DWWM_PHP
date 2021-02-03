<?php
// $regexRule = '/^\bUA\b[-]\d{9}[-]\d{1}$/';
$regexRule = '/^\b[A-Z]{1}-[0-9A-Z]{10}$/';
global $wpdb;

if (isset($_POST["submit"])) {
    // echo $wpdb->last_error;
    // echo $wpdb->show_errors();

    (isset($_POST["trackingID"]) && !preg_match($regexRule, $_POST["trackingID"])) ? $errorMessage = "Veuillez saisir un ID de suivi valide." : "" ;
    (isset($_POST["trackingID"]) && empty($_POST["trackingID"])) ? $errorMessage = "Veuillez saisir un ID de suivi." : "" ;
    
    if (isset($_POST["trackingID"]) && preg_match($regexRule, $_POST["trackingID"]) && !empty($_POST["trackingID"])) {
        // https://developer.wordpress.org/reference/classes/wpdb/
        // 1st Method - Declaring $wpdb as global and using it to execute an SQL query statement that returns a PHP object

        $wpdb->insert("{$wpdb->prefix}trackingid", array("id" => NULL, "trackingid" => $_POST["trackingID"]));
        $validateMessage = "ID de suivi enregistré avec succès.";

        // $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}trackingid WHERE trackingid = 1", OBJECT );
        // var_dump($results);
    }
}

// var_dump($GLOBALS);
?>