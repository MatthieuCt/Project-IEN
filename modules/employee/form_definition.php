<?php
$form_name = "permission_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "employee",

    "table_name" => "employee",
    
    "id"        =>      "",
    
    "fields"        => array(
        //	Langue	Nom	Nom	Email	Titre	Parier	Fonction	Téléphone	Contenu	Actif	
        array(
            "name"  => "lang_id",
            "label" => label("TXT_EMPLOYEE_LANG"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
       /* array(
            "name"  => "user_name",
            "label" => label("TXT_EMPLOYEE_NAME"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "user_surname",
            "label" => label("TXT_EMPLOYEE_SURNAME"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "user_email",
            "label" => label("TXT_EMPLOYEE_EMAIL"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),*/
        array(
            "name"  => "title",
            "label" => label("TXT_EMPLOYEE_TITLE"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
       /* array(
            "name"  => "branch_name",
            "label" => label("TXT_EMPLOYEE_BRANCH"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),*/
        array(
            "name"  => "function_name",
            "label" => label("TXT_EMPLOYEE_FUNCTION"),
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "phone",
            "label" => label("TXT_EMPLOYEE_PHONE"),
            "type"  => "text",
            "params"        => "maxlength=16 size=28",
            "default"       => "",
            "validate"      => "notempty"
        )
     )
);


?>