<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("common/session_validator.php");
require_once("common/database.php");

   $data = get_rows('
       SELECT l.id
       ,(SELECT lang.lang_name FROM lang WHERE lang.id=l.lang_id) as langname
       , l.label_name 
       , l.label_value
       FROM label l');
    
   $smarty -> assign('data', $data);
?>