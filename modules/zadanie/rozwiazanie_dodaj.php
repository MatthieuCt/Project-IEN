<?php
    require_once("common/session_validator.php");
    require_once("common/database.php");
    require_once("common/form.php");
    require_once("modules/$current_module/rozwiazanie_form_definition.php");
    
    $forms = updateFormData($forms);
    
    
    $smarty->assign("form", $forms);
    $smarty->assign("form_name", $form_name);
?>