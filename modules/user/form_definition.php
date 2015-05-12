<?php
$form_name = "new_user_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "list",
    
    "return_module" => "user",

    "table_name" => "user",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "user_login",
            "label" => "Login użytkownika",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "user_name",
            "label" => "Nazwa użytkownika",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        array(
            "name"  => "user_email",
            "label" => "Adres email",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty",
            "help"          => "Adres jest wykorzystywany w różnych punktach systemu do wysyłania powiadomień."
        ),
         array(
            "name"  => "grupa_id",
            "label" => "Grupa",
            "type"  => "combo",
            "combovalues" => createDictionary("grupa_id", "grupa", "id", "Nazwa", "1 asc"),
            "default"       => 2,
            "validate"      => "notempty"
        ),
        


        array(
            "name"  => "user_password",
            "label" => "Hasło użytkownika",
            "type"  => "pass",
            "params"        => "maxlength=128 size=28",
            "validate"      => "notempty",
            "help"          => "Hasło jest przechowywane w formie zakodowanej. Jeżeli użytkownik zapomni hasło, trzeba ustawić mu nowe. Nie ma możliwości sprawdzenia starego hasła."
        )



    )
);


?>
