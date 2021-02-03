<?php
    require "controller_index.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>ExoPHP - Part 10 - TP 1</title>
</head>
<body>
    <div class="row h-100 m-0 align-content-center justify-content-center p-3">
        <div id="mainCol" class="col-12 col-md-6 p-3">
            <?php
                if($showForm) {
                    ?>
                        <form method="post" action="index.php" novalidate>
                            <h1 class="text-center p-5">Vos informations</h1>

                            <div class="row g-4">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastName" placeholder="lastName" name="lastName" value="<?= (isset($_POST["lastName"]) ? htmlspecialchars($_POST["lastName"]) : "") ?>" required>
                                        <label for="lastName">Votre nom</label>
                                        
                                    </div>
                                    <?= (isset($_POST["Submit"])) ? var_dump($errorMessagesRegistered) : "" ?>
                                    <?= (isset($errorMessagesRegistered["lastName"])) ? var_dump($errorMessagesRegistered) : "" ?>
                                    <?= (isset($errorMessagesRegistered["lastName"])) ? "<p class='text-danger'>" . $errorMessagesRegistered["lastName"] .  "</p>" : "" ?>
                                    <span><?= isset($errorMessagesRegistered['lastName']) ? $errorMessagesRegistered['lastName'] : '' ?></span>
                                    
                                    <div class="text-danger">
                                        <!-- message d'erreur si pas validé -->
                                        <span><?= isset($errorMessagesRegistered['lastName']) ? $errorMessagesRegistered['lastName'] : '' ?></span>
                                        
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="firstName" placeholder="firstName" name="firstName" required>
                                        <label for="firstName">Votre prénom</label>
                                        <?= (isset($errorMessagesRegistered["firstName"])) ? "<p class='text-danger'>" . $errorMessagesRegistered["firstName"] .  "</p>" : "" ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="birthday" placeholder="birthday" name="birthday" required>
                                <label for="birthday">Votre date de naissance</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="birthCountry" placeholder="birthCountry" name="birthCountry" required>
                                <label for="birthCountry">Votre pays de naissance</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select name="nationality" class="form-select" aria-label="Nationality select" name="nationality" required>
                                    <option selected disabled>Choisir un Pays</option>
                                    <optgroup label="A">
                                        <option value="afghanistan">Afghanistan</option>
                                        <option value="afrique-du-sud">Afrique du Sud</option>
                                        <option value="albanie">Albanie</option>
                                        <option value="algerie">Algérie</option>
                                        <option value="allemagne">Allemagne</option>
                                        <option value="ancienne-republique-yougoslave-de-macedoine">Ancienne République yougoslave de Macédoine</option>
                                        <option value="andorre">Andorre</option>
                                        <option value="angola">Angola</option>
                                        <option value="anguilla">Anguilla</option>
                                        <option value="antarctique">Antarctique</option>
                                        <option value="antigua-et-barbuda">Antigua-et-Barbuda</option>
                                        <option value="antilles-neerlandaises">Antilles néerlandaises</option>
                                        <option value="arabie-saoudite">Arabie saoudite</option>
                                        <option value="argentine">Argentine</option>
                                        <option value="armenie">Arménie</option>
                                        <option value="aruba">Aruba</option>
                                        <option value="australie">Australie</option>
                                        <option value="autriche">Autriche</option>
                                        <option value="azerbaidjan">Azerbaïdjan</option>
                                    </optgroup>
                                    <optgroup label="B">
                                        <option value="bahamas">Bahamas</option>
                                        <option value="bahrein">Bahreïn</option>
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="barbade">Barbade</option>
                                        <option value="belgique">Belgique</option>
                                        <option value="belize">Belize</option>
                                        <option value="benin">Bénin</option>
                                        <option value="bermudes">Bermudes</option>
                                        <option value="bhoutan">Bhoutan</option>
                                        <option value="bielorussie">Biélorussie</option>
                                        <option value="bolivie">Bolivie</option>
                                        <option value="bosnie-et-herzegovine">Bosnie-et-Herzégovine</option>
                                        <option value="botswana">Botswana</option>
                                        <option value="bresil">Brésil</option>
                                        <option value="brunei-darussalam">Brunei Darussalam</option>
                                        <option value="bulgarie">Bulgarie</option>
                                        <option value="burkina-faso">Burkina Faso</option>
                                        <option value="burundi">Burundi</option>
                                    </optgroup>
                                    <optgroup label="C">
                                        <option value="cambodge">Cambodge</option>
                                        <option value="cameroun">Cameroun</option>
                                        <option value="canada">Canada</option>
                                        <option value="cap-vert">Cap-Vert</option>
                                        <option value="chili">Chili</option>
                                        <option value="chine">Chine</option>
                                        <option value="chypre">Chypre</option>
                                        <option value="colombie">Colombie</option>
                                        <option value="comores">Comores</option>
                                        <option value="congo">Congo</option>
                                        <option value="costa-rica">Costa Rica</option>
                                        <option value="cote-d-ivoire">Côte d'Ivoire</option>
                                        <option value="croatie">Croatie</option>
                                        <option value="cuba">Cuba</option>
                                    </optgroup>
                                    <optgroup label="D">
                                        <option value="danemark">Danemark</option>
                                        <option value="djibouti">Djibouti</option>
                                        <option value="dominique">Dominique</option>
                                    </optgroup>
                                    <optgroup label="E">
                                        <option value="egypte">Égypte</option>
                                        <option value="el-salvador">El Salvador</option>
                                        <option value="emirats-arabes-unis">Émirats arabes unis</option>
                                        <option value="equateur">Équateur</option>
                                        <option value="erythree">Érythrée</option>
                                        <option value="espagne">Espagne</option>
                                        <option value="estonie">Estonie</option>
                                        <option value="etats-federes-de-micronesie">États fédérés de Micronésie</option>
                                        <option value="etats-unis">États-Unis</option>
                                        <option value="ethiopie">Éthiopie</option>
                                    </optgroup>
                                    <optgroup label="F">
                                        <option value="fidji">Fidji</option>
                                        <option value="finlande">Finlande</option>
                                        <option value="france">France</option>
                                    </optgroup>
                                    <optgroup label="G">
                                        <option value="gabon">Gabon</option>
                                        <option value="gambie">Gambie</option>
                                        <option value="georgie">Géorgie</option>
                                        <option value="georgie-du-sud-et-les-iles-sandwich-du-sud">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                                        <option value="ghana">Ghana</option>
                                        <option value="gibraltar">Gibraltar</option>
                                        <option value="grece">Grèce</option>
                                        <option value="grenade">Grenade</option>
                                        <option value="groenland">Groenland</option>
                                        <option value="guadeloupe">Guadeloupe</option>
                                        <option value="guam">Guam</option>
                                        <option value="guatemala">Guatemala</option>
                                        <option value="guinee">Guinée</option>
                                        <option value="guinee-equatoriale">Guinée équatoriale</option>
                                        <option value="guinee-bissau">Guinée-Bissau</option>
                                        <option value="guyane">Guyane</option>
                                        <option value="guyane-francaise">Guyane française</option>
                                    </optgroup>
                                    <optgroup label="H">
                                        <option value="haiti">Haïti</option>
                                        <option value="honduras">Honduras</option>
                                        <option value="hong-kong">Hong Kong</option>
                                        <option value="hongrie">Hongrie</option>
                                    </optgroup>
                                    <optgroup label="I">
                                        <option value="ile-bouvet">Ile Bouvet</option>
                                        <option value="ile-christmas">Ile Christmas</option>
                                        <option value="ile-norfolk">Île Norfolk</option>
                                        <option value="ile-pitcairn">Île Pitcairn</option>
                                        <option value="iles-aland">Iles Aland</option>
                                        <option value="iles-cayman">Iles Cayman</option>
                                        <option value="iles-cocos-keeling">Iles Cocos (Keeling)</option>
                                        <option value="iles-cook">Iles Cook</option>
                                        <option value="iles-feroe">Îles Féroé</option>
                                        <option value="iles-heard-et-macdonald">Îles Heard-et-MacDonald</option>
                                        <option value="iles-malouines">Îles Malouines</option>
                                        <option value="iles-mariannes-du-nord">Îles Mariannes du Nord</option>
                                        <option value="iles-marshall">Îles Marshall</option>
                                        <option value="iles-mineures-eloignees-des-etats-unis">Îles mineures éloignées des États-Unis</option>
                                        <option value="iles-salomon">Îles Salomon</option>
                                        <option value="iles-turques-et-caiques">Îles Turques-et-Caïques</option>
                                        <option value="iles-vierges-britanniques">Îles Vierges britanniques</option>
                                        <option value="iles-vierges-des-etats-unis">Îles Vierges des États-Unis</option>
                                        <option value="inde">Inde</option>
                                        <option value="indonesie">Indonésie</option>
                                        <option value="iraq">Iraq</option>
                                        <option value="irlande">Irlande</option>
                                        <option value="islande">Islande</option>
                                        <option value="israel">Israël</option>
                                        <option value="italie">Italie</option>
                                    </optgroup>
                                    <optgroup label="J">
                                        <option value="jamahiriya-arabe-libyenne">Jamahiriya arabe libyenne</option>
                                        <option value="jamaique">Jamaïque</option>
                                        <option value="japon">Japon</option>
                                        <option value="jordanie">Jordanie</option>
                                    </optgroup>
                                    <optgroup label="K">
                                        <option value="kazakhstan">Kazakhstan</option>
                                        <option value="kenya">Kenya</option>
                                        <option value="kirghizistan">Kirghizistan</option>
                                        <option value="kiribati">Kiribati</option>
                                        <option value="koweit">Koweït</option>
                                    </optgroup>
                                    <optgroup label="L">
                                        <option value="lesotho">Lesotho</option>
                                        <option value="lettonie">Lettonie</option>
                                        <option value="liban">Liban</option>
                                        <option value="liberia">Libéria</option>
                                        <option value="liechtenstein">Liechtenstein</option>
                                        <option value="lituanie">Lituanie</option>
                                        <option value="luxembourg">Luxembourg</option>
                                    </optgroup>
                                    <optgroup label="M">
                                        <option value="macao">Macao</option>
                                        <option value="madagascar">Madagascar</option>
                                        <option value="malaisie">Malaisie</option>
                                        <option value="malawi">Malawi</option>
                                        <option value="maldives">Maldives</option>
                                        <option value="mali">Mali</option>
                                        <option value="malte">Malte</option>
                                        <option value="maroc">Maroc</option>
                                        <option value="martinique">Martinique</option>
                                        <option value="maurice">Maurice</option>
                                        <option value="mauritanie">Mauritanie</option>
                                        <option value="mayotte">Mayotte</option>
                                        <option value="mexique">Mexique</option>
                                        <option value="monaco">Monaco</option>
                                        <option value="mongolie">Mongolie</option>
                                        <option value="montserrat">Montserrat</option>
                                        <option value="mozambique">Mozambique</option>
                                        <option value="myanmar">Myanmar</option>
                                    </optgroup>
                                    <optgroup label="N">
                                        <option value="namibie">Namibie</option>
                                        <option value="nauru">Nauru</option>
                                        <option value="nepal">Népal</option>
                                        <option value="nicaragua">Nicaragua</option>
                                        <option value="niger">Niger</option>
                                        <option value="nigeria">Nigéria</option>
                                        <option value="niue">Niué</option>
                                        <option value="norvege">Norvège</option>
                                        <option value="nouvelle-caledonie">Nouvelle-Calédonie</option>
                                        <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                                    </optgroup>
                                    <optgroup label="O">
                                        <option value="oman">Oman</option>
                                        <option value="ouganda">Ouganda</option>
                                        <option value="ouzbekistan">Ouzbékistan</option>
                                    </optgroup>
                                    <optgroup label="P">
                                        <option value="pakistan">Pakistan</option>
                                        <option value="palaos">Palaos</option>
                                        <option value="panama">Panama</option>
                                        <option value="papouasie-nouvelle-guinee">Papouasie-Nouvelle-Guinée</option>
                                        <option value="paraguay">Paraguay</option>
                                        <option value="pays-bas">Pays-Bas</option>
                                        <option value="perou">Pérou</option>
                                        <option value="philippines">Philippines</option>
                                        <option value="pologne">Pologne</option>
                                        <option value="polynesie-francaise">Polynésie française</option>
                                        <option value="porto-rico">Porto Rico</option>
                                        <option value="portugal">Portugal</option>
                                        <option value="province-chinoise-de-taiwan">Province chinoise de Taiwan</option>
                                    </optgroup>
                                    <optgroup label="Q">
                                        <option value="qatar">Qatar</option>
                                    </optgroup>
                                    <optgroup label="R">
                                        <option value="republique-arabe-syrienne">République arabe syrienne</option>
                                        <option value="republique-centrafricaine">République centrafricaine</option>
                                        <option value="republique-de-coree">République de Corée</option>
                                        <option value="republique-de-moldavie">République de Moldavie</option>
                                        <option value="republique-democratique-du-congo">République démocratique du Congo</option>
                                        <option value="republique-dominicaine">République dominicaine</option>
                                        <option value="republique-islamique-d-iran">République islamique d'Iran</option>
                                        <option value="republique-populaire-democratique-de-coree">République populaire démocratique de Corée</option>
                                        <option value="republique-populaire-du-laos">République Populaire du Laos</option>
                                        <option value="republique-tcheque">République tchèque</option>
                                        <option value="republique-unie-de-tanzanie">République-Unie de Tanzanie</option>
                                        <option value="reunion">Réunion</option>
                                        <option value="roumanie">Roumanie</option>
                                        <option value="royaume-uni">Royaume-Uni</option>
                                        <option value="russie">Russie</option>
                                        <option value="rwanda">Rwanda</option>
                                    </optgroup>
                                    <optgroup label="S">
                                        <option value="sahara-occidental">Sahara occidental</option>
                                        <option value="saint-christophe-et-nieves">Saint-Christophe-et-Niévès</option>
                                        <option value="saint-marin">Saint-Marin</option>
                                        <option value="saint-pierre-et-miquelon">Saint-Pierre-et-Miquelon</option>
                                        <option value="saint-siege-cite-du-vatican">Saint-Siège (Cité du Vatican)</option>
                                        <option value="saint-vincent-et-les-grenadines">Saint-Vincent-et-les Grenadines</option>
                                        <option value="sainte-helene">Sainte-Hélène</option>
                                        <option value="sainte-lucie">Sainte-Lucie</option>
                                        <option value="samoa">Samoa</option>
                                        <option value="samoa-americaines">Samoa américaines</option>
                                        <option value="sao-tome-et-principe">Sao Tomé-et-Principe</option>
                                        <option value="senegal">Sénégal</option>
                                        <option value="serbie-et-montenegro">Serbie-et-Monténégro</option>
                                        <option value="seychelles">Seychelles</option>
                                        <option value="sierra-leone">Sierra Leone</option>
                                        <option value="singapour">Singapour</option>
                                        <option value="slovaquie">Slovaquie</option>
                                        <option value="slovenie">Slovénie</option>
                                        <option value="somalie">Somalie</option>
                                        <option value="soudan">Soudan</option>
                                        <option value="sri-lanka">Sri Lanka</option>
                                        <option value="suede">Suède</option>
                                        <option value="suisse">Suisse</option>
                                        <option value="suriname">Suriname</option>
                                        <option value="svalbard-et-jan-mayen">Svalbard et Jan Mayen</option>
                                        <option value="swaziland">Swaziland</option>
                                    </optgroup>
                                    <optgroup label="T">
                                        <option value="tadjikistan">Tadjikistan</option>
                                        <option value="tchad">Tchad</option>
                                        <option value="territoire-britannique-de-l-ocean-indien">Territoire britannique de l'océan Indien</option>
                                        <option value="territoire-francais-du-sud">Territoire Francais du Sud</option>
                                        <option value="territoires-palestiniens-occupes">Territoires palestiniens occupés</option>
                                        <option value="thailande">Thaïlande</option>
                                        <option value="timor-oriental">Timor oriental</option>
                                        <option value="togo">Togo</option>
                                        <option value="tokelau">Tokelau</option>
                                        <option value="tonga">Tonga</option>
                                        <option value="trinite-et-tobago">Trinité-et-Tobago</option>
                                        <option value="tunisie">Tunisie</option>
                                        <option value="turkmenistan">Turkménistan</option>
                                        <option value="turquie">Turquie</option>
                                        <option value="tuvalu">Tuvalu</option>
                                    </optgroup>
                                    <optgroup label="U">
                                        <option value="ukraine">Ukraine</option>
                                        <option value="uruguay">Uruguay</option>
                                    </optgroup>
                                    <optgroup label="V">
                                        <option value="vanuatu">Vanuatu</option>
                                        <option value="venezuela">Vénézuéla</option>
                                        <option value="vietnam">Vietnam</option>
                                    </optgroup>
                                    <optgroup label="W">
                                        <option value="wallis-et-futuna">Wallis-et-Futuna</option>
                                    </optgroup>
                                    <optgroup label="Y">
                                        <option value="yemen">Yémen</option>
                                    </optgroup>
                                    <optgroup label="Z">
                                        <option value="zambie">Zambie</option>
                                        <option value="zimbabwe">Zimbabwe</option>
                                    </optgroup>
                                </select>

                                <label for="nationality">Votre nationalité</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                                <label for="email">Votre e-mail</label>
                            </div>

                            <div class="row g-4">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="tel" placeholder="tel" name="tel" required>
                                        <label for="tel">Votre téléphone</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="nbJobCenter" placeholder="nbJobCenter" name="nbJobCenter" required>
                                        <label for="nbJobCenter">Votre numéro pôle emploi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <select id="degree" name="degree" class="form-select" aria-label="Degree select" name="degree" required>
                                    <option selected disabled>Choisir votre diplôme</option>
                                    <option value="sans">Sans diplôme</option>
                                    <option value="cap">Niveau 3 | CAP, BEP</option>
                                    <option value="bac">Niveau 4 | BAC</option>
                                    <option value="bac2">Niveau 5 | DEUG, BTS, DUT, DEUST</option>
                                    <option value="bac3">Niveau 6 | Licence, licence professionnelle</option>
                                    <option value="bacplus">Niveau Supérieur</option>
                                </select>
                                <label for="degree">Votre diplôme</label>
                            </div>

                            <div class="row g-4">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="codecademyBadge" placeholder="codecademyBadge" name="codecademyBadge" required>
                                        <label for="codecademyBadge">Votre nombre de badge</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="link" class="form-control" id="codecademyLink" placeholder="codecademyLink" name="codecademyLink" required>
                                        <label for="codecademyLink">Votre liens codecademy</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-floating">
                                <textarea class="form-control areaResize" placeholder="heroText" id="heroText" maxlength="255" name="heroText" required></textarea>
                                <label for="heroText">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                                <?= (isset($errorMessagesRegistered["heroText"])) ? "<div class='text-danger'>" . $errorMessagesRegistered["heroText"] .  "</div>" : "" ?>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control areaResize" placeholder="hackText" id="hackText" maxlength="255" name="hackText" required></textarea>
                                <label for="hackText">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                            </div>

                            <!-- <div class="form-floating">
                                <textarea class="form-control areaResize" placeholder="expText" id="expText" maxlength="255" name="expText" required></textarea>
                                <label for="expText">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                            </div> -->
                            <div class="row g-4">
                                <div class="col-12 col-md-12">
                                    Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="expText" id="expText1">
                                        <label class="form-check-label" for="expText1">Oui</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="expText" id="expText2" checked>
                                        <label class="form-check-label" for="expText2">Non</label>
                                    </div>
                                </div>
                            </div>


                            <div class="w-100 d-flex justify-content-center">
                                <button type="submit" name="Submit" class="btn btn-warning m-5 p-4 text-white fs-2">Déposer votre candidature !</button>
                            </div>
                        </form>
                    <?php
                }
                else {
                    $value = $_POST;
                    ?>
                        <h1 class="text-center p-5">Félicitations !</h1>
                        <p class="text-center">Bonjour <?= htmlspecialchars($value["firstName"]) ?> <?= htmlspecialchars($value["lastName"]) ?> votre candidature à bien été déposé, good luck !</p>
                        
                        <form method="post">
                            <div class="w-100 d-flex justify-content-center">
                                <button type="submit" name="Reset" class="btn btn-warning m-5 p-4 text-white fs-2">Retour à votre candidature !</button>
                            </div>
                        </form>
                    <?php
                    (isset($_POST["Reset"])) ? $showForm = true : $showForm = false;
                }
            ?>

        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>