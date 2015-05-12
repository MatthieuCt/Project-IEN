<?php
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "labels",

    "table_name" => "label",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "lang_id",
            "label" => "Langue",
            "type"  => "text",
            "type"  => "combo",
            "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null, "-- Please choose --"),
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "label_name",
            "label" => "Label name",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "label_value",
            "label" => "Label Value",
            "type"  => "tinymce",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
    )
);


?>
