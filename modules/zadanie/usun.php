<?php
    require_once("common/session_validator.php");
    require_once("common/database.php");
    require_once("common/form.php");

    require_once("form_definition.php");

    $id = clearVar($_GET["id"]);

    $return_module = $forms["return_module"];
    $return_action = $forms["return_action"];

    if($id!="") {
        update("UPDATE ".$forms["table_name"]." SET usun=1 WHERE id=$id LIMIT 1");
    }

    header("Location: index.php?module=$return_module&action=$return_action");
    die();   
?>