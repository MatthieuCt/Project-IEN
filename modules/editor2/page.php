<?php

    require_once("common/session_validator.php");
    require_once("common/form.php");
    if($_GET['id'] == "" and $_GET['page_id'] != ""){
        $_GET['id'] = $_GET['page_id'];
    }
    require_once("modules/$current_module/form_definition.php");
    
    $forms = updateFormData($forms);
    
    
    $smarty->assign("form", $forms);
    $smarty->assign("form_name", $form_name);

?>
