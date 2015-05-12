<?php
$form_name = "rozwiazanie_form";
$forms = array(
    "form_save"     => "rozwiazanie_save.php",
    
    "return_action" => "lista",
    
    "return_module" => "zadanie",

    "table_name" => "zadanie",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "tytul",
            "label" => "Tytuł",
            "type"  => "text",
            "params"        => "readonly",
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "tresc",
            "label" => "Treść",
            "type"  => "showonly",
            "params"        => "maxlength=10000",
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "rozwiazanie",
            "label" => "Rązwiązanie",
            "type"  => "textarea",
            "params"        => "maxlength=10000",
            "default"       => "",
            "validate"      => "notempty"
        ),



    )
);


?>
