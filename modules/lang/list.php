<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once("common/session_validator.php");
require_once("common/database.php");

   $data = get_rows('
       SELECT l.id
       , l.lang_name 
       , l.lang_short
       , l.active
       FROM lang l');
    
   $smarty -> assign('data', $data);
?>
