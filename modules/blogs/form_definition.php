<?php
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "blogs",

    "table_name" => "blog",
    
    "id"        =>      "",
    
    "fields"        => array(

        array(
            "name"  => "blog_name",
            "label" => label("TXT_BLOG_NAME"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "employee_id",
            "label" => label("TXT_BLOG_EMPLOYEE"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
       
    )
);


?>
