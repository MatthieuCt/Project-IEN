<?php
    require_once("common/session_validator.php");
    require_once("common/database.php");
    require_once("common/form.php");

    require_once("form_definition.php");

    $page_id = clearVar($_GET["page_id"]);

    $return_module = $forms["return_module"];
    $return_action = $forms["return_action"];
    
    if($page_id!="") {
  
            delete("DELETE FROM blog_to_page WHERE page_id=$page_id LIMIT 1");
    }

    header("Location: /index.php?module=$return_module&action=$return_action");
    die();   
?>