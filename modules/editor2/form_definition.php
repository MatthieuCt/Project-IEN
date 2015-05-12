<?php
$form_name = "editor_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "",
    
    "return_module" => "",

    "table_name" => "page",
    
    "id"        =>      "",
    
    "fields"        => array(
            array(
                "name"  => "lang_id",
                "label" => label("TXT_EDITOR_LANGUAGE"),
                "type"  => "combo",
                "combovalues" => createDictionary("lang_id", "`lang`", "id", "lang_name", "1 asc", "1=1", null),
                "default"       => 1,
                "validate"      => "notempty",
               
            ),

            array(
                "name"  => "page_content",
                "label" => label("TXT_EDITOR_CONTENT"),
                "type"  => "tinymce",
                "params"        => "maxlength=10000",
                "default"       => "",
                "validate"      => "notempty",
                "tab" => label("TXT_EDITOR_CONTENT")

            ),
        
            array(
                "name"  => "page_files",
                "label" => label("TXT_FILES"),
                "type"  => "files",
                "default"       => "",
                "tab" => label("TXT_FILES")

            )

        )

);


?>
