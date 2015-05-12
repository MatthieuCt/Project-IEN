<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("rozwiazanie_form_definition.php");
    
    if( $_POST['id'] == ""){
        // nowy
    }else{
        //update
        saveFormData($forms, true, TRUE, array( 'data_modyfikacji' => 'CURRENT_DATE' ) );
    }
?>
