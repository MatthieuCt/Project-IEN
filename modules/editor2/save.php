<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("form_definition.php");
    

    
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
    foreach( $_POST as $k => $v){
        if( substr( $k , 0, 4 ) == 'ext_' and strlen($k) > 4 ){
            $sql = 'UPDATE '.(str_replace(array( 'ext_', '_id'), '', $k)).' SET page_id='.$page_id.' WHERE id='.$v.' LIMIT 1;';
            update($sql);
        }
    }
    
    $return_module = $_POST["return_module"];
    $return_action = $_POST["return_action"];
    
    header("Location: ".HTTP_ADDRESS."index.php?module=$return_module&action=$return_action");
    die(); 
    
?>
