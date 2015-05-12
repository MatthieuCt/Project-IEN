<?php
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "institute",

    "table_name" => "institute",
    
    "id"        =>      "",
    
    "fields"        => array(
       array(
            "name"  => "active",
            "label" => label("TXT_INSTITUTE_ACTIVE"),
            "type"  => "combo",
            "combovalues"        => createDictionaryFromArray("active", array( 0=>" - Nie - ",1=>" - Tak - " ), 0),
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "name",
            "label" => label("TXT_INSTITUTE_NAME"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "symbol",
            "label" => label("TXT_INSTITUTE_SYMBOL"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "lang_id",
            "label" => label("TXT_INSTITUTE_LANGUAGE"),
            "type"  => "combo",
            "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null, "-- Please choose --"),
            "default"       => "",
            "validate"      => "notempty"
        )
    )
);


?>