<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once("common/session_validator.php");
require_once("common/database.php");

   /*$data = get_rows('
       SELECT u.id
       ,u.user_name
       , u.user_email
       , (SELECT employee.user_profession FROM employee WHERE employee.user_id=u.id) as employee_profession
       , (SELECT employee.user_phone FROM employee WHERE employee.user_id=u.id) as employee_phone
       FROM user u');*/
   
   //		, l.lang_id     a faire    + modifier les champs tpl pour afficher ca correctement


   $data= get_rows("SELECT e.id
                            , b.branch_name
                            , u.user_name
                            , u.user_surname
                            , u.user_email
                            , e.function_name
                            , e.lang_id
                            , e.title
                            , e.branch_id
                            , e.user_id
                            , e.phone
                            , e.phone2
                            , l.lang_name
                    FROM employee e 
                    INNER JOIN lang l ON e.lang_id LIKE l.id
                    INNER JOIN user u ON e.user_id LIKE u.id
                    INNER JOIN branch b ON e.branch_id LIKE b.id
                    WHERE e.lang_id=" . $_SESSION['S_LangID']); 
    
   $smarty -> assign('data', $data);
   
?>
