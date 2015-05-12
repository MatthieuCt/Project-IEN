<?php
$form_name = "menu_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "menu",

    "table_name" => "menu",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "lang_id",
            "label" => label("TXT_MENU_LANG"),
            "type"  => "combo",
            "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null, "-- Please choose --"),
            "params" => "onchange='load_parent_menu()'",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "parent_menu_id",
            "label" => label("TXT_PARENT_MENU"),
            "type"  => "combo",
            "combovalues" => createDictionary("parent_menu_id", "`menu`", "id", "menu_name", "1 asc", "1=1", null, "-- Please choose --"),
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "menu_name",
            "label" => label("TXT_MENU_NAME"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "module",
            "label" => label("TXT_MENU_MODULE"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "action",
            "label" => label("TXT_MENU_ACTION"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "active",
            "label" => label("TXT_MENU_ACTIVE"),
            "type"  => "combo",
            "combovalues"        => createDictionaryFromArray("active", array( 0=>" - ".label("TXT_MENU_ACTIVE_NO")." - ",1=>" - ".label("TXT_MENU_ACTIVE_YES")." - " ), 0),
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "publish_start_dt",
            "label" => label("TXT_MENU_PUBLISH_START"),
            "type"  => "date",
            "params"        => "",
            "default"       => NULL,
            "validate"      => "empty"
        ),
        array(
            "name"  => "publish_end_dt",
            "label" => label("TXT_MENU_PUBLISH_END"),
            "type"  => "date",
            "params"        => "",
            "default"       => NULL,
            "validate"      => "empty"
        )
    )
);


?>
