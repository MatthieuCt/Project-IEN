<?php
    session_start();
    $req = $_SERVER[REQUEST_URI];
    
    $sid = $_COOKIE["PHPSESSID"];
    if($sid!=session_id()) {
        header("Location: logout.php?req=$req");
        die();
    }

    $user_id = $_SESSION["user_id"];

?>
