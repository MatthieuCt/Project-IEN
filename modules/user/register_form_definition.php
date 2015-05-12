<?php
$form_name = "rejestracja_uzytkownik_form";
$forms = array(
    "form_save"     => "rejestracja_save",
    
    "return_action" => "logowanie",
    
    "return_module" => "uzytkownik",

    "table_name" => "uzytkownik",
    
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
            "name"  => "pseudonim",
            "label" => "Pseudomin",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => ""
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
            "name"  => "student_index",
            "label" => "Numer Indexu",
            "type"  => "text",
            "params"        => "maxlength=32 size=28",
            "default"       => "",
            "validate"      => "notempty",
            "help"          => "Adres jest wykorzystywany w różnych punktach systemu do wysyłania powiadomień."
        ),
        array(
            "name"  => "grupa_id",
            "label" => "Grupa",
            "type"  => "hidden",
            "default"       => 3
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
