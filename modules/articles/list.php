<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("common/session_validator.php");
require_once("common/database.php");

   if($_SESSION['S_GroupID'] == '1'){
    $data = get_rows('
        SELECT a.id
        ,(SELECT lang.lang_name FROM lang WHERE lang.id=a.lang_id) as langname
        , a.article_name 
        , a.page_id
        , a.article_publish
        , a.visible_flag
        ,a.created_user_id
        ,a.modified_user_id
        FROM article a');
   }
   else {
       $data = get_rows('
        SELECT a.id
        ,(SELECT lang.lang_name FROM lang WHERE lang.id=a.lang_id) as langname
        , a.article_name 
        , a.page_id
        , a.article_publish
        ,a.created_user_id
        ,a.modified_user_id
        FROM article a   
        WHERE visible_flag = 1 '); 
   }
    
   $smarty -> assign('data', $data);
?>
