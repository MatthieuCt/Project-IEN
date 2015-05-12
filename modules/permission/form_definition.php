<?php 
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "permission",

    "table_name" => "permission",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "group_id",
            "label" => label("TXT_GROUP"),
            "type"  => "combo",
            "combovalues" => createDictionary("group_id", "`group`", "id", "name", "1 asc", "1=1", null, array( "" => "-- Please choose --")),
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "module",
            "label" => label("TXT_MODULE"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "action",
            "label" => label("TXT_ACTION"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        



    )
);


?>
