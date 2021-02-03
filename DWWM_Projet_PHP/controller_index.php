<?php
    $XMLImport = simplexml_load_file("assets/xml/source.xml");
    $menuArray = [];
    $urlArray = [];
    $id = 0;
    
    if (isset($_GET["id"]) && $_GET["id"] != $id) {
        $id = intval($_GET["id"]);
        $title = $XMLImport->{"page"}[$id]->{"title"};
        $content = $XMLImport->{"page"}[$id]->{"content"};
    }
    else {
        $id = 0;
        $title = $XMLImport->{"page"}[$id]->{"title"};
        $content = $XMLImport->{"page"}[$id]->{"content"};
    }
    
    for ($i=0; $i < count($XMLImport->{"page"}); $i++) { 
        $menuArray[$i] = $XMLImport->{"page"}[$i]->{"menu"};
        $temp = lcfirst(str_replace(" ", "-", $XMLImport->{"page"}[$i]->{"menu"}));
        if (substr($temp, -1) == "?") {
            $temp = substr($temp, 0, -1);
        }
        $urlArray[$i] = $temp . ".html";
    }
?>