<?php
    $errorMessagesRegistered = [];
    $allValidate = [];
    $allValidated = false;

    $errorMessages = [
        "lastNameValidate" => "Veuillez saisir un nom valide",  "lastNameEmpty" => "Veuillez saisir votre nom",
        "firstNameValidate"=> "Veuillez saisir un prénom valide", "firstNameEmpty"=> "Veuillez saisir votre prénom",
        "birthdayValidate"=> "Veuillez saisir une date valide", "birthdayEmpty"=> "Veuillez saisir votre date de naissance",
        "birthCountryValidate"=> "Veuillez saisir une date valide", "birthCountryEmpty"=> "Veuillez saisir votre date de naissance",
        "emailValidate"=> "Veuillez saisir un email valide", "emailEmpty"=> "Veuillez saisir votre email",
        "telValidate"=> "Veuillez saisir un numéro de téléphone valide", "telEmpty"=> "Veuillez saisir votre numéro de téléphone",
        "nbJobCenterValidate"=> "Veuillez saisir un numéro pôle emploi valide", "nbJobCenterEmpty"=> "Veuillez saisir votre numéro pôle emploi",
        "degreeValidate"=> "Veuillez saisir un email valide", "degreeEmpty"=> "Veuillez saisir votre email",
        "codecademyBadgeValidate"=> "Veuillez saisir un numéro de téléphone valide", "codecademyBadgeEmpty"=> "Veuillez saisir votre numéro de téléphone",
        "codecademyLinkValidate"=> "Veuillez saisir un numéro pôle emploi valide", "codecademyLinkEmpty"=> "Veuillez saisir votre numéro pôle emploi",
        "heroTextValidate"=> "Veuillez saisir un numéro de téléphone valide", "heroTextEmpty"=> "Veuillez saisir votre numéro de téléphone",
        "hackTextValidate"=> "Veuillez saisir un numéro pôle emploi valide", "hackTextEmpty"=> "Veuillez saisir votre numéro pôle emploi"
    ];
    
    $regex = [
        "lastName" => "/^([a-z]+[,.]?[ ]?|[a-z]+['-]?)+$/" 
    ];

    if (isset($_POST["Submit"])) {
        foreach($_POST as $key => $value) {
            if ($key != "Submit") {
                echo $key . " " . $value . "<br>";
                (isset($_POST[$key])) ? testRegex($key, $regex["lastName"], $errorMessages) : "";
            }
        }
        // (isset($_POST["lastName"])) ? testRegex("lastName", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["firstName"])) ? testRegex("firstName", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["birthday"])) ? testRegex("birthday", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["birthCountry"])) ? testRegex("birthCountry", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["email"])) ? testRegex("email", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["tel"])) ? testRegex("tel", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["nbJobCenter"])) ? testRegex("nbJobCenter", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["degree"])) ? testRegex("degree", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["codecademyBadge"])) ? testRegex("codecademyBadge", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["codecademyLink"])) ? testRegex("codecademyLink", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["heroText"])) ? testRegex("heroText", $regex["lastName"], $errorMessages) : "";
        // (isset($_POST["hackText"])) ? testRegex("hackText", $regex["lastName"], $errorMessages) : "";

        var_dump($errorMessagesRegistered);
    }

    function testRegex($value, $regex, $errorArray) {
        if (!preg_match($regex, $_POST[$value])) {
            $errorMessagesRegistered[$value] = $errorArray[$value . "Validate"];
            // echo $errorArray[$value . "Validate"] . "<br>";
            // $errorMessagesRegistered[$value] = 'Veuillez saisir un Prénom valide';
            $allValidate[$value] = false;
        }
        else {
            $errorMessagesRegistered[$value] = "";
            $allValidate[$value] = true;
        }

        if (empty($_POST[$value])) {
            $errorMessagesRegistered[$value] = $errorArray[$value . "Empty"];
            $allValidate[$value] = false;
        }
        // echo $value . "<br>";
        // echo $errorMessagesRegistered[$value] . "<br>";
        // echo print_r($errorMessagesRegistered) . "<br>";
        // echo count($errorMessagesRegistered) . "<br>";
        // var_dump($errorMessagesRegistered) . "<br>";


        // echo count($errorMessagesRegistered);
        // print_r($errorMessagesRegistered);
        // if (isset($errorMessagesRegistered[$value])) {
        //     print_r($errorMessagesRegistered);
            
        // }
        // echo $errorMessagesRegistered["lastName"];
        // var_dump($value);
        // echo $value;
        // foreach($allValidate as $key => $value) {
        //     echo $key;
        // }
        // echo key($_POST["lastName"]);
    }

    (isset($_POST["Submit"]) AND $allValidated) ? $showForm = false : $showForm = true;
?>