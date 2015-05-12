<?php
    require_once("../../common/session_validator.php");
    require_once("../../common/form.php");
    require_once("form_definition.php");
    
    if($_POST['user_password'] != "") $_POST['user_password']  = MD5($_POST['user_password'] );

    $query_upd = 'UPDATE branch SET active=0 WHERE id='.$_GET['id'];
    update($query_upd);
    header("Location: ../../index.php?module=".$current_module."&action=list");
?>
