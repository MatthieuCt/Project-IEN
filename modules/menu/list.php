<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("common/session_validator.php");
require_once("common/database.php");

   $data = get_rows('
       SELECT m.id 
       , (SELECT lang.lang_name FROM lang WHERE lang.id = m.lang_id) as lang_name
       , m.menu_name
       , (SELECT m2.menu_name FROM menu m2 WHERE m2.id=m.parent_menu_id) as parent_menu_name
       , m.module 
       , m.action
       , m.active
       , m.publish_start_dt
       , m.publish_end_dt
       , m.created_dt
       , (SELECT u.user_name FROM user u WHERE u.id = m.created_user_id ) as created_user
       , m.modified_dt 
       , (SELECT u.user_name FROM user u WHERE u.id = m.modified_user_id ) as modified_user
       , m.page_id
       FROM menu m');
    
   $smarty -> assign('data', $data);
?>