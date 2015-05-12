<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once("common/session_validator.php");
require_once("common/database.php");

   
   $data= get_rows('SELECT   b.id
                                , b.branch_name
                                , b.institute_id
  				, b.lang_id
  				, l.lang_name
                                , b.symbol
                                , b.active
                                , b.page_id
          FROM branch b 
          INNER JOIN lang  l ON b.lang_id LIKE l.id
          INNER JOIN institute i ON b.institute_id LIKE i.id
  		 ');
    
   $smarty -> assign('data', $data);
   
?>
