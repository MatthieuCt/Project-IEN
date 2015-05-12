<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("common/session_validator.php");
require_once("common/database.php");

$data = get_rows('
       SELECT 
       p.id
       , p.page_name
       ,SUBSTRING(p.page_content, 1, 200) AS page_content
       FROM page p 
       WHERE p.id IN 
            (SELECT btp.page_id 
            FROM blog_to_page btp 
            WHERE btp.blog_id=:blogid) 
       ORDER BY p.modified_dt DESC',array(":blogid"=>$_GET['id_data']));
    
   $smarty -> assign('data_blog', $data);
?>