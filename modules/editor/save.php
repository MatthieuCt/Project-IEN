<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("form_definition.php");
    

    
    if($_POST['id']==""){
        $page_id = saveFormData($forms, false, FALSE, array(
                                        'created_user_id'=>$_SESSION['S_UserID'],
                                        'modified_dt'=>'CURRENT_TIMESTAMP',
                                        'modified_user_id'=>$_SESSION['S_UserID']
                                        )
        );
    }else{
        $page_id = saveFormData($forms, false, FALSE, array(
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
    
    if($_POST['ext_blog_id']!=""){
        $sql= 'DELETE FROM blog_to_page WHERE blog_id='.$_POST['ext_blog_id'].' AND page_id='.$page_id.';';
        delete($sql);
        $sql= 'INSERT INTO blog_to_page (blog_id, page_id) VALUES ('.$_POST['ext_blog_id'].','.$page_id.');';
        insert($sql);
    }
    
    
    $return_module = $_POST["return_module"];
    $return_action = $_POST["return_action"];
    
    header("Location: ".HTTP_ADDRESS."index.php?module=$return_module&action=$return_action");
    die(); 
    
?>
