<?php
    require_once('configs/config.php');
    session_start();
    unset($_SESSION["user"]);
    $_SESSION["user"] = null;
    session_destroy();

    $req = "";
    if(isset($_GET["req"])) {
        $req = $_GET["req"];
    }
    
    header("Location: ".HTTP_ADDRESS);
    die();       
?>