<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("common/session_validator.php");
require_once("common/database.php");

   $data = get_rows('
       SELECT b.id
       , b.blog_name
       , b.employee_id
       , b.page_id
       FROM blog b');
    
   $smarty -> assign('data', $data);
?>