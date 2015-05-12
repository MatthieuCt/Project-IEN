<?php
require_once 'common/database.php';
/**
*  CUser.php
*  @author Szymon Domurat (szymon.domurat@gmail.com)
*  @version 1.0
*  @license PRIVATE
*/
class CUser {

    /**
     * constructor FrontContrllera - System Core
     */
    public function __construct () {

            
    }
    
    public function login($user_login, $user_pass){
        // we try to login
        $results = get_rows('   SELECT u.*
                                FROM user as u inner join `group` as g on u.group_id=g.id 
                                WHERE user_login = :userlogin and user_password=Md5( :pass );'
                    ,array( ":userlogin" => $user_login, ":pass" => $user_pass )
                );
        
        if( count($results) == 1 ){
            
            $_SESSION['S_User'] = $results[0]['user_login'];
            $_SESSION['S_UserName'] = $results[0]['user_name'];
            $_SESSION['S_UserID'] = $results[0]['id'];
            $_SESSION['S_GroupID'] = $results[0]['group_id'];
            $ret = TRUE;
        }else{
            $ret = FALSE;
        }
        
        return $ret;
    }
    
    /**
     * Setting variables for the anonymous user
     */
    public function setDefaultUser(){
        $_SESSION['S_User'] = 'User Not Login';
        $_SESSION['S_UserName'] = 'Guest';
        $_SESSION['S_UserID'] = 0;
        $_SESSION['S_GroupID'] = 0;
        $_SESSION['S_LangID'] = 1;
        $_SESSION['S_EditMode'] = 0;
        
        
    }
    
}

?>
