<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("form_definition.php");
    
    if( $_POST['id'] == ""){
        // nowy
        saveFormData($forms, true, TRUE, array( 'data_dodania' => 'CURRENT_DATE', 'data_modyfikacji' => 'CURRENT_DATE', 'dodano_przez_uzytkownik_id' => $_SESSION['S_UserID'] ) );
    }else{
        //update
        saveFormData($forms, true, TRUE, array( 'data_modyfikacji' => 'CURRENT_DATE' ) );
    }
?>
