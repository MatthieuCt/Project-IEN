<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("rejestracja_form_definition.php");
    
    if($_POST['user_password'] != "") $_POST['user_password']  = MD5($_POST['user_password'] );
    
    saveFormData($forms, TRUE, FALSE, array( 'data_zalozenia' => 'CURRENT_DATE') );
?>
