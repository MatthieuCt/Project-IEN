<?php
    require_once("common/session_validator.php");
    require_once("common/database.php");
    require_once("common/form.php");

    require_once("form_definition.php");

    $id = clearVar($_GET["id"]);

    $return_module = $forms["return_module"];
    $return_action = $forms["return_action"];

    if($id!="") {
        delete("DELETE FROM ".$forms["table_name"]." WHERE id=$id LIMIT 1");
    }

    header("Location: index.php?module=$return_module&action=$return_action");
    die();   
?>
