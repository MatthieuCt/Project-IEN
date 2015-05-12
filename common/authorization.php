<?php
    require_once('CSmarty.php');
    require_once("database.php"); 
    require_once('CUser.php');
    session_start();
    
    
    if( isset( $_POST['login'] ) && isset( $_POST['paswd'] )){
        // proba zalogowania uzytkownika
        $user = new CUser();
        $ok = $user -> login( $_POST['login'], $_POST['paswd'] );    

        if( $ok ){
            $req = $_POST["req"]; 
            
            if( $req !="" ){
                header("Location: $req");
                die("");
            }
        }else{
            $msg=$_MSG['LOGIN_ERROR'];
            if(LOGON ==0) header('location: index.php?module=user&action=login&type=error&msg=Błąd podczas logowania');
        }
    }
    
    if( (!isset($_SESSION["S_User"]) || $_SESSION['S_User']=="") && LOGON==1 ) {   
        
        $smarty = new CSmarty("login.tpl"); 
        $smarty->assign("req", $_SERVER[REQUEST_URI]);
        $smarty->assign("user", "Niezalogowany");
        $smarty->assign("msg", $msg);
        echo $smarty ->getOutput();
        die();
        
    } else {
        
        if(LOGON==0 && (!isset($_SESSION["S_User"]) || $_SESSION['S_User']=="") ){
           $user = new CUser();
           $user -> setDefaultUser();         
            
        }
        
        $user = $_SESSION["S_User"];
               
 
        //$data = get_row('SELECT count(*) as cnt from uzytkownik where user_login='.$_SESSION['S_User']);
        //$data = get_assoc_row("select count(*) as cnt from uprawnienia up join grupa g on (up.grupa_id = g.id) join uzytkownik u on (u.grupa_id = g.id and u.uzytkownik = \"$user\") where up.modul=\"$current_module\" and up.akcja=\"$current_action\"");
                
        //if($data["cnt"]==1) {
        //    $error = "";
        //} else {
        //    $error = $NO_ACCESS;
        //}        
    }        
?>