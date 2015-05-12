<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("form_definition.php");
    
    if($_POST['user_password'] != "") $_POST['user_password']  = MD5($_POST['user_password'] );
    
    if($_POST['id']==""){
        saveFormData($forms, TRUE, FALSE, array(
                                        'created_user_id'=>$_SESSION['S_UserID'],
                                        'modified_dt'=>'CURRENT_TIMESTAMP',
                                        'modified_user_id'=>$_SESSION['S_UserID']
                                        )
        );
    }else{
        saveFormData($forms, TRUE, FALSE, array(
                                        'modified_dt'=>'CURRENT_TIMESTAMP',
                                        'modified_user_id'=>$_SESSION['S_UserID']
                                        )
        );
        
    }
?>