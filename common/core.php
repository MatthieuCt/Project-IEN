<?php

@session_start ();


//function __autoload($class_name) {
	
	//include_once($class_name.".php");
//}

include_once('configs/db.php');
require_once('Smarty.class.php');
include_once('CWebPage.php');


// Strips slashes recursively only up to 3 levels to prevent attackers from
// causing a stack overflow error.
function stripslashes_array(&$array, $iterations=0) {
    if ($iterations < 3) {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                stripslashes_array($array[$key], $iterations + 1);
            } else {
                $array[$key] = stripslashes($array[$key]);
            }
        }
    }
}

if (get_magic_quotes_gpc()) {
    stripslashes_array($_GET);
    stripslashes_array($_POST);
    stripslashes_array($_COOKIE);
}

?>
