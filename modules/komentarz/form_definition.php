<?php

$zadanie_id = $_GET['zadanie_id'];
if($zadanie_id ==''){
    $zadanie_id = get_row("SELECT zadanie_id from komentarz WHERE id=".$_GET['id']);
}

$form_name = "komentarz_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "lista",
    
    "return_module" => "zadanie",

    "table_name" => "komentarz",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "zadanie_id",
            "label" => "Zadanie",
            "type"  => "readonly",
            "value" => get_row("SELECT tytul from zadanie WHERE id=".$zadanie_id),
            "default"       => $zadanie_id,
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "komentarz",
            "label" => "Komentarz",
            "type"  => "textarea",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),



    )
);


?>
