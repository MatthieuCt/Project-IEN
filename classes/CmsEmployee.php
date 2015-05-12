<?php

/**

 *  

 * 

 *  @author Rémy LOGIE 

 *  @version SVN: $Id$

 *  @license PRIVATE

 */
require_once 'common/database.php';

class CmsEmployee {

    private $list;

    function __construct(){
                             
                      
            
    }
          
           public function getEmployeeList($branch_id = NULL){
	
            
	
                $sql = "SELECT e.id, b.branch_name
	
                                    , u.user_name as user_name
	
                                    , u.user_surname
	
                                    , u.user_email
	
                                    , e.function_name
	
                                    , e.title
	
                                    , e.branch_id
	
                                    , e.user_id
	
                                    , e.phone
	
                                    , e.phone2
	
                                    , l.lang_name
                                    
                            FROM employee e
	
                            INNER JOIN user u ON e.user_id LIKE u.id
	
                            INNER JOIN lang l ON e.lang_id LIKE l.id
	
                            INNER JOIN branch b ON e.branch_id LIKE b.id 
                             
                            where e.lang_id = ". $_SESSION['S_LangID'];
                             

                if($branch_id != NULL){
                    $sql = $sql." AND e.branch_id=".$branch_id;
                }
                $this->list = get_rows($sql);
                 
                return $this->list;
	
    }
}
?>
