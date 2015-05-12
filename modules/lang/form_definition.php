<?php
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "lang",

    "table_name" => "lang",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "lang_name",
            "label" => label("TXT_LANG_LANGUAGE"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "lang_short",
            "label" => label("TXT_LANG_SHORT"),
            "type"  => "text",
            "params"        => "maxlength=3 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
       array(
            "name"  => "active",
            "label" => label("TXT_LANG_ENABLE"),
            "type"  => "combo",
            "combovalues"        => createDictionaryFromArray("active", array( 0=>" - ".label("TXT_MENU_ACTIVE_NO")." - ",1=>" - ".label("TXT_MENU_ACTIVE_YES")." - " ), 0),
            "default"       => "",
            "validate"      => "notempty"
        )
    )
);


?>