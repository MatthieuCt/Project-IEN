<?php
$form_name = "kategoria_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "lista",
    
    "return_module" => "kategoria",

    "table_name" => "kategoria",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "nazwa",
            "label" => "Nazwa",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "kategoria_id",
            "label" => "Kategoria nadrzędna",
            "type"  => "combo",
            "combovalues" => createDictionary("kategoria_id", "kategoria", "id", "nazwa", "1 asc", "kategoria_id is null", null, " - Kategoria główna - "),
            "default"       => "",
            "validate"      => "notempty"
            ),
        array(
            "name"  => "nazwa_skrocona",
            "label" => "Nazwa skócona",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "opis",
            "label" => "Opis",
            "type"  => "textarea",
            "params"        => "maxlength=10000",
            "default"       => "",
            "validate"      => "notempty"
        ),
        



    )
);


?>
