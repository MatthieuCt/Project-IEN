<?php
$form_name = "zadanie_form";
$forms = array(
    "form_save"     => "save.php",
    
    "return_action" => "lista",
    
    "return_module" => "zadanie",

    "table_name" => "zadanie",
    
    "id"        =>      "",
    
    "fields"        => array(
        array(
            "name"  => "tytul",
            "label" => "Tytuł",
            "type"  => "text",
            "params"        => "maxlength=128 size=28",
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "tresc",
            "label" => "Treść",
            "type"  => "textarea",
            "params"        => "maxlength=10000",
            "default"       => "",
            "validate"      => "notempty"
        ),
        
        array(
            "name"  => "poziom_trudnosci",
            "label" => "Poziom trudności",
            "type"  => "combo",
            "combovalues" => createDictionary("poziom_trudnosci", "poziom_trudnosci", "id", "nazwa", "1 asc"),
            "default"       => 2,
            "validate"      => "notempty"
        ),
        array(
            "name"  => "kategoria_id",
            "label" => "Kategoria",
            "type"  => "combo",
            "combovalues" => createDictionary("kategoria_id", "kategoria", "id", "nazwa", "1 asc", "kategoria_id is not null"),
            "default"       => '',
            "validate"      => "notempty"
        ),
        array(
            "name"  => "ukryj",
            "label" => "Zadanie prywatne",
            "type"  => "combo",
            "combovalues" => createDictionaryFromArray("ukryj", array( 0=>" - Nie - ",1=>" - Tak - " ), 0),
            "default"       => '',
            "validate"      => "notempty"
        )



    )
);

if( $_SESSION['S_GrupaID']==1){
    $forms['fields'][] = array(
            "name"  => "usun",
            "label" => "Zadanie jest usunięte:",
            "type"  => "combo",
            "combovalues" => createDictionaryFromArray("usun", array( 0=>" - Nie - ",1=>" - Tak - " ), 0),
            "default"       => '',
            "validate"      => "notempty"
        );
    
}
?>
